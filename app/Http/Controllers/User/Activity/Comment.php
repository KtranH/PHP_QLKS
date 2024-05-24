<?php

namespace App\Http\Controllers\User\Activity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Comment extends Controller
{
    //
    public function comment()
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
            $checkUser = DB::select("SELECT * FROM danhgia INNER JOIN khachhang ON danhgia.MAKH = khachhang.MAKH WHERE USERNAME = ? OR EMAIL = ?", [$takeName,$takeName]);
            $checkUser2 = DB::select("SELECT * FROM hoadon INNER JOIN phieudatphong ON hoadon.MAPHIEU = phieudatphong.MAPHIEU INNER JOIN chitiet_phieudatphong ON phieudatphong.MAPHIEU = chitiet_phieudatphong.MAPHIEU INNER JOIN khachhang ON chitiet_phieudatphong.MAKH = khachhang.MAKH WHERE USERNAME = ? OR EMAIL = ?",[$takeName,$takeName]);
            return view("User.Room.comment",compact("checkUser","checkUser2"));
        }
    }
}
