<?php

namespace App\Http\Controllers\User\Account;

use App\Http\Controllers\Controller;

use Exception;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class SignUp extends Controller
{
    //
    public function showSignUpForm()
    {
        return view("Account.signUp");
    }
    public function signup(Request $request)
    {
        try
        {
             // Nhận giá trị
            $name = $request->input('name');
            $username = $request->input('username');
            $email = $request->input('email');
            $password = $request->input('password');
            $phone = $request->input('phone');
            
            $year = date("Y");
            
            // Thêm khách hàng vào database
            $sql = "INSERT INTO khachhang (MAKH,HOTEN,GIOITINH,NGAYSINH,DIACHI,SDT,EMAIL,PASSWORD,DIEMTINNHIEM,AVATAR,CCCD,USERNAME,GHICHU,ISDELETE) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            DB::statement($sql, [$year + $phone, $name, "Chưa rõ", "2024-01-01", "Chưa rõ", $phone, $email, Hash::make($password), 100, "user.png", "Chưa rõ", $username, NULL,1]);

            // Đăng ký thành công chuyển sang trang đăng nhập
            return redirect()->route("Formlogin");
        }
        catch(Exception $e)
        {
            dd($e);
            Session::falsh('errorSignUp', 'Số điện thoại đã tồn tại!');
            return redirect()->route("FormSignUp");
        }
    }
}
