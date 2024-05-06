<?php

use App\Http\Controllers\HomeUser;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeUser::class, 'LoadActivity']);
