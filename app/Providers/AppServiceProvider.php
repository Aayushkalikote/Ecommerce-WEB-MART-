<?php

namespace App\Providers;

use App\Http\View\Composers\CategoryComposer;
use App\Http\View\Composers\PageComposer;
use App\Http\View\Composers\ProductComposer;
use App\Http\View\Composers\SubCategoryComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Debugbar', \Barryvdh\Debugbar\Facades\Debugbar::class);

        View::composer('customer.layouts.header', ProductComposer::class);
        View::composer('customer.layouts.header', CategoryComposer::class);
        View::composer('customer.layouts.header', SubCategoryComposer::class);
        View::composer('customer.layouts.footer', PageComposer::class);
        // View::composer('admin.layouts.footer', PageComposer::class);

    }
}
