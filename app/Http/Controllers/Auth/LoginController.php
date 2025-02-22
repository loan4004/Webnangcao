<?php

// namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class LoginController extends Controller
// {
//     // Hiển thị trang đăng nhập
//     public function showLoginForm()
//     {
//         return view('auth.login');
//     }

//     // Xử lý đăng nhập
//     public function login(Request $request)
//     {
//         $request->validate([
//             'email' => 'required|email',
//             'password' => 'required|min:6',
//         ]);

//         if (Auth::attempt($request->only('email', 'password'))) {
//             return redirect()->route('dashboard')->with('success', 'Login successful');
//         }

//         return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
//     }

//     // Xử lý đăng xuất
//     public function logout(Request $request)
//     {
//         Auth::logout();
//         return redirect()->route('login')->with('success', 'Logged out successfully');
//     }
// }


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Hiển thị trang đăng nhập
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Xử lý đăng nhập
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('employees.index')->with('success', 'Login successful');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput($request->only('email'));
    }

    // Xử lý đăng xuất
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged out successfully');
    }
}
