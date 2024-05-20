<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DichVu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SidebarUser extends Controller
{
    public function showAllDichVu(){
        $allDichVu = DichVu::getAllDichVu();
        return view('User.Home.dichvu',compact('allDichVu'));
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
