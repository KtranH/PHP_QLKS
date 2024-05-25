<?php

namespace App\Http\Controllers\User\Activity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Reserve extends Controller
{
    //
    public function reserve()
    {
        $takeName = "";
        $cookie = request()->cookie('remember');
        $cookie2 = request()->cookie('remember_notSave');
        $cookie3 = request()->cookie('remember_google');
        if ($cookie) {
            $data = json_decode($cookie, true);
            $takeName = $data['user'];
        }
        else if($cookie2)
        {
            $data = json_decode($cookie2, true);
            $takeName = $data['user'];
        }
        else if($cookie3)
        {
            $data = json_decode($cookie3, true);
            $takeName = $data['user'];
        }
        if($takeName == "")
        {
            return redirect()->route("Formlogin");
        }
        else
        {
            $checkUser = DB::select("SELECT * FROM phieudatphong INNER JOIN chitiet_phieudatphong ON phieudatphong.MAPHIEU = chitiet_phieudatphong.MAPHIEU INNER JOIN khachhang ON chitiet_phieudatphong.MAKH = khachhang.MAKH  WHERE USERNAME = ? OR EMAIL = ?", [$takeName,$takeName]);
            $checkUser2 = DB::select("SELECT * FROM giohang INNER JOIN khachhang ON giohang.MAKH = khachhang.MAKH WHERE khachhang.MAKH = ? OR khachhang.EMAIL = ?", [$takeName,$takeName]);
            return view("User.Room.reserveRoom",compact("checkUser","checkUser2"));
        }
    }
}
