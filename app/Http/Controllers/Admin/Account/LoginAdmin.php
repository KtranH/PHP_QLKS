<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginAdmin extends Controller
{
    //
    public function loginadmin()
    {
        return view("Admin.Account.loginAdmin");
    }
    public function authAdmin(Request $request)
    {
         // Xác thực đăng nhập
         $user = $request->input("username");
         $password = $request->input("password");
         try
         {
            $checkUser = DB::select("SELECT * FROM nhanvien WHERE EMAIL = ?", [$user]);
            $pass = $checkUser[0]->PASSWORD;
            if($checkUser && Hash::check($password, $pass))
            {
                $cookieValue = json_encode([ 
                    "user" => $user,
                    "password" => $password,
                ]);
                Session::flash("pass",$password);
                $cookie = Cookie::make('accountadmin', $cookieValue, 0);
                return redirect()->route("homeAdmin")->withCookie($cookie);
            }
         }
         catch(Exception $e)
         {
            Session::flash('errorAdmin', 'Bạn đã nhập sai email hoặc sai mật khẩu!');
            return redirect()->route("loginadmin");
         }
    }
    public function logoutAdmin()
    {
        // Xóa phiên đăng nhập
        Cookie::queue(Cookie::forget('accountadmin'));
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route("loginadmin");
    }
}
