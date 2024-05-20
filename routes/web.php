<?php

use App\Http\Controllers\HomeUser;
use App\Http\Controllers\SidebarUser;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeUser::class, 'LoadActivity']);
Route::get('/dichvu', [SidebarUser::class, 'showAllDichVu'])->name('dichvu');
Route::get('/coso1', [SidebarUser::class, 'loadCoSo1'])->name('coso1');
Route::get('/coso2', [SidebarUser::class, 'loadCoSo2'])->name('coso2');
Route::get('/coso3', [SidebarUser::class, 'loadCoSo3'])->name('coso3');