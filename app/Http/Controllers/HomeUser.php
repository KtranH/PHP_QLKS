<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeUser extends Controller
{
    public function LoadActivity()
    {
        $lines = file(storage_path('Files/activity.txt'));
        $fileJson = file_get_contents(storage_path('Files/news.json'));
        $data = json_decode($fileJson, true);
        return view("User.Home.home", compact('lines','data'));
    }
}
