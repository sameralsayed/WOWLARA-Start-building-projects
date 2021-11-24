<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() 
    {

    }
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    require_once __DIR__ . '/system/start.php';
    }
}
