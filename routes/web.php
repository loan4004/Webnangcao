<?php
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Trang chủ hiển thị danh sách nhân viên
Route::get('/', [EmployeeController::class, 'index'])->name('home');

// Route tài nguyên cho Employee
Route::resource('employees', EmployeeController::class);

// Route đăng nhập
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Route đăng ký
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Route logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


use App\Http\Controllers\EmployeeDetailController;

Route::get('/employees/{id}/details', [EmployeeDetailController::class, 'show'])->name('employees.details');
Route::post('/employees/details/store', [EmployeeDetailController::class, 'store'])->name('employees.details.store');