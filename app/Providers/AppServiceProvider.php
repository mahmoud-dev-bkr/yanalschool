<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $langs = DB::table('langs')->pluck('locale')->toArray();
        config(['translatable.locales' => $langs]);
        view()->share('socialMedia', DB::table('social_media')->where('status', 1)->orderBy('sort')->get());


    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        PaginationPaginator::useBootstrap();


    }
}
