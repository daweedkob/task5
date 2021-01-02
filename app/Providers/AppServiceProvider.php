<?php

namespace App\Providers;

use App\Company;
use App\Employee;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('_COMPANIES',Company::all());
        View::share('_EMPLOYEES',Employee::all());
    }
}
