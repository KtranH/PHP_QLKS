<?php

use App\Http\Controllers\HomeUser;
use App\Http\Controllers\SidebarUser;
use App\Http\Controllers\CategoriesRoom;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeUser::class, 'LoadActivity']);
Route::get('/allCategories', [CategoriesRoom::class, 'showALLCategory'])->name('all.category');
Route::get('/loaicaocap', [CategoriesRoom::class, 'showCaoCap'])->name('loai.caocap');
Route::get('/loaiphothong', [CategoriesRoom::class, 'showPhoThong'])->name('loai.phothong');
Route::get('/loaigiare', [CategoriesRoom::class, 'showGiaRe'])->name('loai.giare');
Route::get('/priceLow-Hight', [CategoriesRoom::class, 'showRoomsByPriceLowHigh'])->name('price.low');
Route::get('/priceHigh-Low', [CategoriesRoom::class, 'showRoomsByPriceHightLow'])->name('price.high');
Route::get('/search', [HomeUser::class, 'search']);
Route::get('/search_results/{searchTerm}', [HomeUser::class, 'searchResult'])->name('search.result');
