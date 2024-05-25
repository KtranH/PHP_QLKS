<?php

use App\Http\Controllers\Admin\Account\HomeAccountAdmin;
use App\Http\Controllers\Admin\Account\LoginAdmin;
use App\Http\Controllers\Admin\Employee\emloyee;
use App\Http\Controllers\Admin\Home\HomeAdmin;
use App\Http\Controllers\Admin\Room\categoryRoom;
use App\Http\Controllers\Admin\Room\RoomAdmin;
use App\Http\Controllers\Admin\Service\serviceAdmin;
use App\Http\Controllers\User\Account\Account;
use App\Http\Controllers\User\Account\Login;
use App\Http\Controllers\User\Account\SignUp;
use App\Http\Controllers\User\Activity\Comment;
use App\Http\Controllers\User\Activity\Reserve;
use App\Http\Controllers\User\Contact\Contact;
use App\Http\Controllers\User\Home\HomeUser;
use App\Http\Controllers\User\Information\About;
use App\Http\Controllers\User\Information\Location_Service;
use App\Http\Controllers\User\Room\CategoriesRoom;
use Illuminate\Support\Facades\Route;


//----------------------------------------------------------------------------------------------------------------------------------------------------------
//-----------------------------------------------------Phần USER--------------------------------------------------------------------------------------------

// Hiển thị trang chủ
Route::get('/', [HomeUser::class, 'LoadActivity'])->name('home');

// Hiển thị đăng ký/ đăng nhập bằng google
Route::get('/authGoogle', [Login::class, 'loginByGoogle'])->name("loginByGoogle");

// Hiển thị đăng ký/ đăng nhập bằng google
Route::get('/callBackGoogle', [Login::class, 'callBackGoogle'])->name("callBackGoogle");

// Hiển thị form đăng nhập
Route::get('/login', [Login::class, 'showLoginForm'])->name("Formlogin");

// Xử lý dữ liệu đăng nhập
Route::post('/login', [Login::class, 'login'])->name('login');

// Xử lý logout
Route::get('/logout', [Login::class, 'logout'])->name('logout');

// Hiển thị form đăng ký
Route::get('/signup', [SignUp::class, 'showSignUpForm'])->name("FormSignUp");

// Xử lý dữ liệu đăng ký
Route::post('/signup', [SignUp::class, 'signup'])->name('signup');

// Hiển thị trang chủ tài khoản
Route::get('/account', [Account::class, 'Account'])->name('home_account');

//Hiển trang chỉnh sửa tài khoản
Route::get('/edit', [Account::class, 'EditAccout'])->name('edit_account');

//Xử lý dữ liệu chỉnh sửa tài khoản
Route::post('/edit', [Account::class, 'saveEdit'])->name('saveEdit');

//Hiển trang liên hệ
Route::get('/contact', [Contact::class, 'contact'])->name('contact');

//Hiển trang thông tin
Route::get('/about', [About::class, 'about'])->name('about');

//Hiển trang đặt phòng
Route::get('/room', [Reserve::class, 'reserve'])->name('reserve');

//Hiển trang đánh giá
Route::get('/comment', [Comment::class, 'comment'])->name('comment');

//Hiển thị tất cả loại phòng
Route::get('/allCategories', [CategoriesRoom::class, 'showALLCategory'])->name('all.category');

//Hiển thị phòng cao cấp
Route::get('/loaicaocap', [CategoriesRoom::class, 'showCaoCap'])->name('loai.caocap');

//Hiển thị phòng phổ thông
Route::get('/loaiphothong', [CategoriesRoom::class, 'showPhoThong'])->name('loai.phothong');

//Hiển thị phòng giá trẻ
Route::get('/loaigiare', [CategoriesRoom::class, 'showGiaRe'])->name('loai.giare');

//Hiển thị phòng từ thấp tới cao
Route::get('/priceLow-Hight', [CategoriesRoom::class, 'showRoomsByPriceLowHigh'])->name('price.low');

//Hiển thị phòng từ cao tới thấp
Route::get('/priceHigh-Low', [CategoriesRoom::class, 'showRoomsByPriceHightLow'])->name('price.high');

//Hiển thị phòng từ thanh tìm kiếm
Route::get('/search', [HomeUser::class, 'search']);

//Xử lý kết quả trả về từ thanh tìm kiếm
Route::get('/search_results/{searchTerm}', [HomeUser::class, 'searchResult'])->name('search.result');

//Hiển thị tất cả dịch vụ
Route::get('/dichvu', [Location_Service::class, 'showAllDichVu'])->name('dichvu');

//Hiển thị cơ sở 1
Route::get('/coso1', [Location_Service::class, 'loadCoSo1'])->name('coso1');

//Hiển thị cơ sở 2
Route::get('/coso2', [Location_Service::class, 'loadCoSo2'])->name('coso2');

//Hiển thị cơ sở 3
Route::get('/coso3', [Location_Service::class, 'loadCoSo3'])->name('coso3');

//-----------------------------------------------------------------------------------------------------------------------------------------------------------
//-----------------------------------------------------Phần ADMIN--------------------------------------------------------------------------------------------

//Hiển thị trang chủ admin
Route::get('/homeadmin', [HomeAdmin::class, 'homeAdmin'])->name('homeAdmin');

//Hiển thị trang loại phòng
Route::get('/categoryadmin', [categoryRoom::class, 'categoryAdmin'])->name('categoryAdmin');

//Hiển thị trang phòng
Route::get('/roomadmin', [RoomAdmin::class, 'roomadmin'])->name('roomAdmin');

//Hiển thị trang dịch vụ
Route::get('/serviceadmin', [serviceAdmin::class, 'serviceadmin'])->name('serviceadmin');

//Hiển thị trang đăng nhập
Route::get('/loginadmin', [LoginAdmin::class, 'loginadmin'])->name('loginadmin');

//Hiển thị xử lý đăng nhập
Route::post('/loginadmin', [LoginAdmin::class, 'authAdmin'])->name('authAdmin');

//Hiển thị trang tài khoản admin
Route::get('/homeaccountadmin', [HomeAccountAdmin::class, 'homeaccountadmin'])->name('homeaccountadmin');

//Xử lý đăng xuất
Route::get('/logoutAdmin', [LoginAdmin::class, 'logoutAdmin'])->name('logoutAdmin');

//Hiển thị trang nhân viên
Route::get('/employeeAdmin', [emloyee::class, 'emloyeeAdmin'])->name('emloyeeAdmin');

