<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DichVu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SidebarUser extends Controller
{
    public function loadDichVu()
    {
        $dichvu = DB::select("select * from dichvu");
        return $dichvu;
    }

    public function loadChiTietDV($dv)
    {
        $lines = file(storage_path('Files/activity.txt'));
        $fileJson = file_get_contents(storage_path('Files/news.json'));
        $data = json_decode($fileJson, true);
        $loaiDV = DichVu::loadChiTietDichVu($dv);
        return view('User.Home.dichvu', ['loaiDV' => $loaiDV, 'lines' => $lines, 'data' => $data]);
    }    

    public function loadCoSo1(){
        return view('User.Home.coso1');
    }
    public function loadCoSo2(){
        return view('User.Home.coso2');
    }
    public function loadCoSo3(){
        return view('User.Home.coso3');
    }
}
