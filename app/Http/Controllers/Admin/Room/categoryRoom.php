<?php

namespace App\Http\Controllers\Admin\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryRoom extends Controller
{
    //
    public function categoryAdmin()
    {
        $cookie = request()->cookie('accountadmin');
        if($cookie)
        {
            $category = DB::select("SELECT * FROM loaiphong");
            return view("Admin.Room.categoryAdmin",compact("category"));
        }
        else
        {
            return redirect()->route("loginadmin");
        }
    }
}
