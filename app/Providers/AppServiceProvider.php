<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\SidebarUser;
use App\Models\DichVu;

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
        View::composer('sideBar', function ($view) {
            $sidebarUser = new SidebarUser();
            $dichvu = $sidebarUser->loadDichVu();
            $view->with('dichvu', $dichvu);
        });
    }



    

}
