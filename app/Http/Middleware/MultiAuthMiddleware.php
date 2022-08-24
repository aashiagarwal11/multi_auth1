<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MultiAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $login_info = $request->only('email','password');

        if (Auth::attempt($login_info))
        {

            if (Auth::user()->role_id == 1) {
        
                return redirect('/admin_dashboard')->with('status','Welcome to admin dashboard');
            }
            else{
                return redirect('hr_login')->with('status', 'Access denied because you are not an admin');
            }
            
        }
        else 
        {            
            return redirect('hr_login')->with('status','Entered wrong credentials');
        }         
    }
}
