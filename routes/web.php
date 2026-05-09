<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
}); 

Route::get('/admin/users', function () {
    return view('admin.users');
});

Route::get('/admin/users', [UserController::class, 'index']);
Route::get('/admin/users/create', [UserController::class, 'create']);
Route::post('/admin/users', [UserController::class, 'store']);
Route::get('/admin/users/{id}/edit', [UserController::class, 'edit']);
Route::put('/admin/users/{id}', [UserController::class, 'update']);
Route::delete('/admin/users/{id}', [UserController::class, 'destroy']);