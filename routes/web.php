<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//USER

Route::get(uri: '/users', action: [UserController::class, 'index'])->name(name: 'users.index');
Route::post(uri: '/users', action: [UserController::class, 'store'])->name(name: 'users.store');
Route::get(uri: '/users/create', action: [UserController::class, 'create'])->name(name: 'users.create');
Route::get(uri: '/users/{user}/edit', action: [UserController::class, 'edit'])->name(name: 'users.edit');
Route::put(uri: '/users/{user}', action: [UserController::class, 'update'])->name(name: 'users.update');



Route::get('/', function () {
    return view(view: 'welcome');
});

//DASHBOARD
Route::get('/dashboard', function () {
    return view(view: 'dashboard');
})->middleware(middleware: ['auth', 'verified'])->name(name: 'dashboard');

Route::middleware('auth')->group(callback: function (): void {
    Route::get(uri: '/profile', action: [ProfileController::class, 'edit'])->name(name: 'profile.edit');
    Route::patch(uri: '/profile', action: [ProfileController::class, 'update'])->name(name: 'profile.update');
    Route::delete(uri: '/profile', action: [ProfileController::class, 'destroy'])->name(name: 'profile.destroy');
});

require __DIR__ . '/auth.php';
