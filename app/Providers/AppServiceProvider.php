<?php

namespace App\Providers;

use App\Http\Controllers\CategoriesRoom;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\SidebarUser;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
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
