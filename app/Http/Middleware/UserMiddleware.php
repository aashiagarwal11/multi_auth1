<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
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
            if (Auth::user()->role_id == 2) {
                        return redirect('employee')->with('status', 'Welcome to Employee dashboard');
                    }
                    elseif (Auth::user()->role_id == 3) {
                        return redirect('project_manager')->with('status', 'Welcome to Project Manager dashboard');
                    }
                    else {
                        return redirect('/login')->with('status', 'Access denied');
                    }
            
        }

        else 
        {
            return redirect('/login')->with('status','Entered wrong credentials');
        }         
    }
}
