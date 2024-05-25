<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class serviceAdmin extends Controller
{
    //
    public function serviceadmin()
    {
        $cookie = request()->cookie('accountadmin');
        if($cookie)
        {
            $service = DB::select("SELECT * FROM dichvu");
            return view("Admin.Service.serviceAdmin",compact("service"));
        }
        else
        {
            return redirect()->route("loginadmin");
        }
    }
}
