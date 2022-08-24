<?php

use App\Http\Controllers\Admin\MultiAuthController;
use App\Http\Middleware\MultiAuthMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[MultiAuthController::class,'index']);

Route::get('/hr_login', [MultiAuthController::class, 'hrlogin'])->name('hr_login_form_page_get');
Route::post('/hr_login', [MultiAuthController::class, 'checkhrlogin'])->name('hr_login_check')->middleware('isAdmin');

    Route::get('/admin_dashboard', function () {
        if(auth::user()->role_id == 1){
        return view('admin.hr_dashboard');
        }else{
            return redirect('hr_login');
        }

    });


// Route::get('/hrlogout', [MultiAuthController::class, 'hrlogout'])->name('hr_logout');    
Route::get('/logout', [MultiAuthController::class, 'logout'])->name('logout');

// other login
Route::get('/login', [MultiAuthController::class, 'otherlogin'])->name('other_login_form_page_get');
Route::post('/login', [MultiAuthController::class, 'checkotherlogin'])->name('other_login_check')->middleware('isUser');


Route::get('/register', [MultiAuthController::class, 'create'])->name('register_page_get');
Route::post('/register', [MultiAuthController::class, 'store'])->name('register_data_post');

Route::get('/employee', function () {
    if(auth::user()->role_id == 2){
        return view('employee');
    }
    else {
        return redirect('login')->with('message', 'Please login first you do not have access');
    }
    
});

Route::get('/project_manager', function () {
    if(auth::user()->role_id == 3){
        return view('project_manager');
    }
    else {
        return redirect('login')->with('message', 'You have not access');
    }
    
});

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/view_hr',[MultiAuthController::class, 'showhrlist'])->name('view_hr');
Route::get('/view_employee',[MultiAuthController::class, 'showEmployee'])->name('view_employee');
Route::get('/view_project_manager',[MultiAuthController::class, 'showProjectManager'])->name('view_project_manager');


// cashfree payment integration
Route::get('/cashfree-payment-gateway',[MultiAuthController::class, 'cashfree_payment_gateway'])->name('OrderDetails');
Route::post('/order',[MultiAuthController::class, 'order'])->name('post_OrderDetails');
Route::post('/return-url', [MultiAuthController::class, 'return_url']);


// for mail 
Route::get('/email', [MultiAuthController::class,'email']);

// for mail with form
Route::get('/mailForm', [MultiAuthController::class,'mailForm']);
Route::post('/mailForm', [MultiAuthController::class,'sendemail'])->name('send_email');

// for api
Route::get('/storeData', [MultiAuthController::class, 'apistore']);
Route::get('/apiData',[MultiAuthController::class , 'showapiData']);