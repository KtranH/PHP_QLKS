<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeAccountAdmin extends Controller
{
    //
    public function homeaccountadmin()
    {
        $cookie = request()->cookie('accountadmin');
        if($cookie)
        {
            $takeName = "";
            $data = json_decode($cookie, true);
            $takeName = $data['user'];
            $checkUser = DB::select("SELECT * FROM nhanvien INNER JOIN nhomquyen ON nhanvien.MANHOM = nhomquyen.MANHOM INNER JOIN phanquyen ON nhomquyen.MAPHANQUYEN = phanquyen.MAPHANQUYEN WHERE EMAIL = ?",[$takeName]);
            return view("Admin.Account.homeaccountAdmin",compact("checkUser"));
        }
        else
        {
            return redirect()->route("loginadmin");
        }
    }
}
