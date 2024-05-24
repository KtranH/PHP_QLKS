<?php

namespace App\Http\Controllers\User\Account;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Account extends Controller
{
    //
    public function Account()
    {
        $takeName = $this->takeData();
        if($takeName == null || $takeName == "Chưa đăng nhập")
        {
            // Trả về trang đăng nhập nếu chưa đăng nhập
            return view("Account.login");
        }
        else
        {
            // Xử lý dữ liệu khi đã đăng nhập
            $checkUser = DB::select("SELECT * FROM khachhang WHERE EMAIL = ? OR USERNAME = ?", [$takeName,$takeName]);
            $flag = false;
            $cookie3 = request()->cookie('remember_google');
            if($cookie3)
            {
                $flag = true;
            }
            return view("User.Account.home_account",compact("checkUser","flag"));
        }
    }
    public function EditAccout()
    {
        $takeName = $this->takeData();
        if($takeName == null || $takeName == "Chưa đăng nhập")
        {
            // Trả về trang đăng nhập nếu chưa đăng nhập
            return view("Account.login");
        }
        else
        {
            // Xử lý dữ liệu khi đã đăng nhập
            $checkUser = DB::select("SELECT * FROM khachhang WHERE EMAIL = ? OR USERNAME = ?", [$takeName,$takeName]);
            $flag = false;
            $cookie3 = request()->cookie('remember_google');
            if($cookie3)
            {
                $flag = true;
            }
            return view("User.Account.edit_account",compact("checkUser","flag"));
        }
    }
    public function takeData()
    {
        // Lấy giá trị từ cookie
        $takeName = "Chưa đăng nhập";
        $cookie = request()->cookie('remember');
        $cookie2 = request()->cookie('remember_notSave');
        $cookie3 = request()->cookie('remember_google');
        if ($cookie) {
            $data = json_decode($cookie, true);
            $takeName = $data['user'];
            return $takeName;
        }
        else if($cookie2)
        {
            $data = json_decode($cookie2, true);
            $takeName = $data['user'];
            return $takeName;
        }
        else if($cookie3)
        {
            $data = json_decode($cookie3, true);
            $takeName = $data['user'];
            return $takeName;
        }
    }
    public function saveEdit(Request $request)
    {
        $cookie3 = request()->cookie('remember_google');
        $request->validate([
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048', // Giới hạn dung lượng 2MB
        ]);
        $fullName = $request->input('fullName');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $cccd = $request->input('cccd');
        $email = $request->input('email');
        $birthday = $request->input('birthday');
        $gender = $request->input('gender');
        $username = $request->input('username');
        try
        {
            // Xử lý và lưu và database
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = $username . "_" . $file->getClientOriginalName();
                $filePath = $file->storeAs('public/img', $fileName);
                DB::update('UPDATE khachhang SET HOTEN = ?, DIACHI = ?, SDT = ?, CCCD = ?, EMAIL = ?, NGAYSINH = ?, GIOITINH = ?, AVATAR = ?, USERNAME = ? WHERE EMAIL = ? OR USERNAME = ?',
            [$fullName,$address,$phone,$cccd,$email,$birthday,$gender,$fileName,$username,$email,$username]);
            }
            else if($cookie3)
            {
                DB::update('UPDATE khachhang SET HOTEN = ?, DIACHI = ?, SDT = ?, CCCD = ?, NGAYSINH = ?, GIOITINH = ? WHERE EMAIL = ? OR USERNAME = ?',
                [$fullName,$address,$phone,$cccd,$birthday,$gender,$email,$username]);
            }
            else
            {
                DB::update('UPDATE khachhang SET HOTEN = ?, DIACHI = ?, SDT = ?, CCCD = ?, EMAIL = ?, NGAYSINH = ?, GIOITINH = ?, USERNAME = ? WHERE EMAIL = ? OR USERNAME = ?',
               [$fullName,$address,$phone,$cccd,$email,$birthday,$gender,$username,$email,$username]);
            }
                //Tìm kiếm và làm mới lại cookie
                $cookie = request()->cookie('remember');
                $cookie2 = request()->cookie('remember_notSave');
                $password = "";
                if(Session::has("pass"))
                {
                    $password = Session::get("pass");
                }
                if ($cookie) {
                    $cookieValue = json_encode([ 
                        "user" => $username,
                        "password" => $password,
                    ]);
                    Session::remove("pass");
                    $cookie = Cookie::make('remember', $cookieValue, 3600 * 24 * 30);
                    return redirect()->route("home_account");
                }
                else if($cookie2)
                {
                    $cookieValue = json_encode([ 
                        "user" => $username,
                        "password" => $password,
                    ]);
                    Session::remove("pass");
                    $cookie = Cookie::make('remember_notSave', $cookieValue, 0);
                    return redirect()->route("home_account");
                }
                else if($cookie3)
                {
                    $cookieValue = json_encode([ 
                        "user" => $email,
                        "password" => $password,
                    ]);
                    Session::remove("pass");
                    $cookie = Cookie::make('remember_google', $cookieValue, 3600 * 24 * 30);
                    return redirect()->route("home_account");
                }
        }
        catch(Exception $e)
        {
            Session::flash("errorEdit","Có lỗi khi thay đổi dữ liệu");
            return redirect()->route("edit_account");
        }
    }
}
