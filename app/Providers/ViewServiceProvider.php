<?php

namespace App\Providers;
use App\Models\Categorium;
use App\Models\SklCategorium;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['pruebas.fields'], function ($view) {
            $CategoriumItems = Categorium::pluck('cat_nombre','cat_id')->toArray();
            $view->with('CategoriumItems', $CategoriumItems);
        });
        View::composer(['pruebas.fields'], function ($view) {
            $CategoriumItems = Categorium::pluck('cat_nombre','cat_id')->toArray();
            $view->with('CategoriumItems', $CategoriumItems);
        });
        View::composer(['pruebas.fields'], function ($view) {
            $categoriumItems = Categorium::pluck('cat_nombre','cat_id')->toArray();
            $view->with('categoriumItems', $categoriumItems);
        });
        View::composer(['foreings.fields'], function ($view) {
            $CategoriumItems = Categorium::pluck('cat_nombre','cat_id')->toArray();
            $view->with('CategoriumItems', $CategoriumItems);
        });
        View::composer(['demos.fields'], function ($view) {
            $skl_categoriumItems = SklCategorium::pluck('cat_nombre','cat_id')->toArray();
            $view->with('skl_categoriumItems', $skl_categoriumItems);
        });
        //
    }
}