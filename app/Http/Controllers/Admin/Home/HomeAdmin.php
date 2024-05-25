<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeAdmin extends Controller
{
    //
    public function homeAdmin()
    {
        $cookie = request()->cookie('accountadmin');
        if($cookie)
        {
            return view("Admin.Home.homeAdmin");
        }
        else
        {
            return redirect()->route("loginadmin");
        }
    }
}
