<?php

namespace App\Http\Controllers\Admin\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomAdmin extends Controller
{
    //
    public function roomadmin()
    {
        $cookie = request()->cookie('accountadmin');
        if($cookie)
        {
            $room = DB::select("SELECT * FROM phong INNER JOIN loaiphong ON phong.MALP = loaiphong.MALP");
            $category = DB::select("SELECT * FROM loaiphong");
            return view("Admin.Room.roomAdmin",compact("room","category"));
        }
        else
        {
            return redirect()->route("loginadmin");
        }
    }
}
