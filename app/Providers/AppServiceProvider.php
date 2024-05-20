<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\SidebarUser;
use App\Models\DichVu;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {

        // Đọc dữ liệu từ file
        $lines = file(storage_path('Files/activity.txt'));
        $fileJson = file_get_contents(storage_path('Files/news.json'));
        $data = json_decode($fileJson, true);

        // Chia sẻ dữ liệu qua hết mọi view
        View::share('lines', $lines);
        View::share('data', $data);
    }
}
