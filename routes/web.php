<?php

use App\Http\Controllers\HomeUser;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeUser::class, 'LoadActivity']);
Route::get('/login', function () {
    return view('Account.login');
});
Route::get('/signup', function () {
    return view('Account.signUp');
});

