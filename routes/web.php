<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get(uri: '/', action: [HomeController::class,'index']);

Route::match(methods: ['GET', 'POST'], uri: '/user/test', action: function (): never {
    dd(vars: 'test');
});
