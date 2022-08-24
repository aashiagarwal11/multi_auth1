<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use DateTime;
use Mail;
use Illuminate\Support\Facades\Http;
use App\Models\Apistore;
class MultiAuthController extends Controller

{
    public function __construct() {
        $this->APP_ID = "";
        $this->SECRET_KEY = "";
    }


    public function index(){
        return view('home');  
    }


    public function hrlogin(){
        return view('hr_login');
    }    

    public function checkhrlogin(Request $request){
        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);

        
        
        // // dynamic data
        // $login_info = $request->only('email','password');
        // if (Auth::attempt($login_info))
        // {
        //     // dd(Auth::user()->role_as=='HR');
        //     if (Auth::user()->role_as=='HR') {
        //         // dd('yes');
        //         return redirect('/admin_dashboard')->with('status','Welcome to admin dashboard');
        //     }
        //     else{
        //         // dd('no');
        //         return redirect('/hr_login')->with('status', 'Access denied because you are not HR');
        //     }
            
        // }
        // else 
        // {
        //     return redirect('/')->with('status','Entered wrong credentials');
        // } 


        // static data
        // if ($request->email == 'aashi@gmail.com' && $request->password == '12345678') {
        //     return view('admin.hr_dashboard')->with('status','Welcome to admin dashboard');
        // }
        // else {
        //     return redirect('/');
        // } 
        
        // $exists = DB::table('admins')->where('email' == $request->email && 'password' == $request->password)->first();
        //     if ($exists) {
        //         return redirect('/admin_dashboard')->with('status', 'Welcome to admin dashboard');
        //     } else {
        //         return redirect('/')->with('status','Entered wrong credentials');
        //     }

    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/')->with('status','logged out successfully');       
    }
    
    public function otherlogin(){
        return view('login');        
    }

    public function checkotherlogin(Request $request){

        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);
        // $login_info =  $request->only('email', 'password');  
        // if(Auth::attempt($login_info)) 
        // {
        //     if (Auth::user()->role_as == 'Employee') {
        //         return redirect('employee')->with('status', 'Welcome to Employee dashboard');
        //     }
        //     elseif (Auth::user()->role_as == 'PM') {
        //         return redirect('project_manager')->with('status', 'Welcome to Project Manager dashboard');
        //     }
        //     else {
        //         return redirect('/login')->with('status', 'Access denied');
        //     }
            
        // }
    }


    

    public function create(){
        $users = DB::table('admins')->get();
        $roles = DB::table('role_as')->get();
        
        return view('admin.register',compact('users','roles')); 
        
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=>'required|email',
            'password'=>'required|max:8',
            'contact'=> 'required|digits:10',
            'role_id'=> 'required',
        ]);

        $email= DB::table('admins')->where('email',$request->email)->where('role_id',$request->role_id)->pluck('email')->toArray();

        if (!empty($email)) {
        return redirect('register')->with('message', 'Email already exist'); 
        }
        else {
        // with model
        $user = new Admin;
        $user = Admin::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'contact'=> $request->contact,
            'role_id'=> $request->role_id,
        ]);
        return redirect('/admin_dashboard')->with('message', 'Registerd Successfully'); 
        }
    }


    public function loginview(){
        return view('admin.admin_login'); 
    }

    public function showhrlist(){
        $users = DB::table('admins')->where('role_id', '=', 1)
        ->join('role_as', 'admins.role_id', '=', 'role_as.id')
        ->get();
        return view('admin.view_hr',['users'=>$users]);
    }

    public function showEmployee(){
        $users = DB::table('admins')->where('role_id', '=', 2)
        ->join('role_as', 'admins.role_id', '=', 'role_as.id')
        ->get();
        return view('admin.view_employee',['users'=>$users]);
    }

    public function showProjectManager(){
        $users = DB::table('admins')->where('role_id', '=', 3)
        ->join('role_as', 'admins.role_id', '=', 'role_as.id')
        ->get();
        return view('admin.view_project_manager',['users'=>$users]);
    }


    public function cashfree_payment_gateway(){
        return view('cashfree.cashfree-payment-gateway');
    }

    public function order(Request $request){

    $request->validate([
            'customerName' => 'required',
            'customerPhone' => 'required',
            'customerEmail' => 'required|email',
            'amount' => 'required|numeric',
    ]);
    

        $customerName = $request->customerName;
        $customerPhone = $request->customerPhone;
        $customerEmail = $request->customerEmail;
        $amount = $request->amount;
        $now =  new DateTime();
        $ctime = $now->format('Y-m-d H:i:s');



    $orderID= Order::insertGetId([
        'customerName'=>$customerName,
        'customerPhone'=>$customerPhone,
        'customerEmail'=> $customerEmail,
        'amount'=> $amount,
        'created_at'=> $ctime,
        'status_id'=> 3,
        ]);

        $secretKey =  $this->SECRET_KEY;
        $postData = array(
            "appId" => "170055e75c8fd639ade934524a550071",
            "orderId" => $orderID,
            "orderAmount" => $amount,
            "orderCurrency" => 'INR',
            "orderNote" => 'Wallet',
            "customerName" => $customerName,
            "customerPhone" => $customerPhone,
            "customerEmail" => $customerEmail,
            "returnUrl" => url('return-url'),
            "notifyUrl" => url('notify-url'),
            'secretKey' => $secretKey,
        );
        return view('cashfree.request')->with($postData);
    }


    function return_url(Request $request){
        //print_r($request->all());
        $orderId = $request->orderId;
        $orderAmount = $request->orderAmount;
        $referenceId = $request->referenceId;
        $txStatus = $request->txStatus;
        $paymentMode = $request->paymentMode;
        $txMsg = $request->txMsg;
        $txTime = $request->txTime;
        $signature = $request->signature;
        $secretkey = "a55bedd4ab47b7e96e49122863d82cb4dfc55382";
        $data = $orderId . $orderAmount . $referenceId . $txStatus . $paymentMode . $txMsg . $txTime;
        $hash_hmac = hash_hmac('sha256', $data, $secretkey, true);
        $computedSignature = base64_encode($hash_hmac);
        if ($signature == $computedSignature) {
            if ($txStatus == 'SUCCESS'){
                // success query
                Order::where('id', $orderId)->update(['status_id' => 1]);
                return redirect('cashfree-payment-gateway')->with('successMessage', $request->txStatus);
            }else{
                // rejected query
                Order::where('id', $orderId)->update(['status_id' => 2]);
                return redirect('cashfree-payment-gateway')->with('errorMessage', $txTime);
            }
        }else{
            return redirect('cashfree-payment-gateway')->with('errorMessage', 'Signature not match');
        }
    }


    public function email(){
        $data = ['name'=>"Aachuki", 'data'=>"PHP Developer"];
        $user['to']='aachukiag11@gmail.com';
        Mail::send('email', $data, function($messages) use($user){
            $messages->to($user['to']);
            $messages->subject('Hello Dev');
        });
    }


    public function mailForm(){
        return view('mailForm');
    }

    public function sendemail(Request $request){
        
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required',
        ]);
        // dd($request->validate);
        
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'content'=>$request->content,
        ];
        // dd($data);

        Mail::send('emailForm-template', $data, function($messages) use($data){
            $messages->to($data['email'])
            ->subject($data['subject']);
        });

        return back()->with(['message'=> 'Email Successfully Sent!']);
    }


    public function apistore( Request $request){
        // return view('apiStore');
        $api_url = 'https://financialmodelingprep.com/api/v3/quote/AAPL?apikey=514742cac0f8934f55190d2016b61c14';
        $response = Http::get($api_url);
        $data = json_decode($response->body());
        // dd($data);
        echo "<pre>";
        foreach($data as $value ){
            $post= (array)$value; 
            $user = new Apistore;
            Apistore::updateOrCreate(
                // [   'id' =>$post['id']],
                [
                    'symbol' =>$post['symbol'],
                    'name' =>$post['name'],
                    'price' =>$post['price'],
                    'changesPercentage' =>$post['changesPercentage'],
                    'change' =>$post['change'],
                    'dayLow' =>$post['dayLow'],
                    'dayHigh' =>$post['dayHigh'],
                    'yearHigh' =>$post['yearHigh'],
                    'yearLow' =>$post['yearLow'],
                    'marketCap' =>$post['marketCap'],
                    'priceAvg50' =>$post['priceAvg50'],
                    'priceAvg200' =>$post['priceAvg200'],
                    'volume' =>$post['volume'],
                    'avgVolume' =>$post['avgVolume'],
                    'exchange' =>$post['exchange'],
                    'open' =>$post['open'],
                    'previousClose' =>$post['previousClose'],
                    'eps' =>$post['eps'],
                    'pe' =>$post['pe'],
                    'earningsAnnouncement' =>$post['earningsAnnouncement'],
                    'sharesOutstanding' =>$post['sharesOutstanding'],
                ],
            );
        }
        // $user->save()
        // dd('data stored');


        // $ch = curl_init() ;  
        // //set cURL options  
        // curl_setopt($ch, CURLOPT_URL, 'https://financialmodelingprep.com/api/v3/quote/AAPL?apikey=514742cac0f8934f55190d2016b61c14');  
        
        // //Run cURL (execute http request)   
        // $res = curl_exec($ch) ;  
        
        // // close cURL resource  
        // curl_close($ch) ;  
        // print_r($res) ;  
    }


    public function showapiData(){
        $data =  Apistore::all();
        return view('apiDataView',['data'=>$data]);
    } 


}