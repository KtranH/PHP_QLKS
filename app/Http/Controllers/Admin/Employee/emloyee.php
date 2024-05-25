<?php

namespace App\Http\Controllers\Admin\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class emloyee extends Controller
{
    //
    public function emloyeeAdmin()
    {
        $cookie = request()->cookie('accountadmin');
        if($cookie)
        {
            $takeName = "";
            $data = json_decode($cookie, true);
            $takeName = $data['user'];
            $checkUser = DB::select("SELECT * FROM nhanvien INNER JOIN nhomquyen ON nhanvien.MANHOM = nhomquyen.MANHOM INNER JOIN phanquyen ON nhomquyen.MAPHANQUYEN = phanquyen.MAPHANQUYEN WHERE EMAIL = ?",[$takeName]);
            if($checkUser[0]->CHUCNANG == "Admin")
            {
                $employee = DB::select("SELECT * FROM nhanvien WHERE MANHOM = ?",["N02"]);
                return view("Admin.Employee.employeeAdmin",compact("employee"));
            }
            else
            {
                return redirect()->route("homeAdmin");
            }
        }
        else
        {
            return redirect()->route("loginadmin");
        }
    }
}
