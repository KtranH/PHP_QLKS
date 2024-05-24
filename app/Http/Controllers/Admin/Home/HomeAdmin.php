<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeAdmin extends Controller
{
    //
    public function homeAdmin()
    {
        $lines = file(storage_path('Files/activity.txt'));
        $fileJson = file_get_contents(storage_path('Files/news.json'));
        $data = json_decode($fileJson, true);
        return view("Admin.Home.homeAdmin",  compact('lines','data'));
    }
}
