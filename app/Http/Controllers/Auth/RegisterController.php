<?php

namespace App\Http\Controllers\Auth; // Đảm bảo namespace chính xác

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);
        try {
            // Tạo người dùng mới
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password), // Hash password để bảo mật
            ]);

            return redirect()->route('login')->with('success', 'Đăng ký thành công! Hãy đăng nhập.');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Đăng ký thất bại. Vui lòng thử lại!']);
        }
        // return redirect()->route('login')->with('success', 'Đăng ký thành công! Vui lòng đăng nhập.');
    }
    public function showRegistrationForm()
{
    return view('auth.register'); 
}
}
