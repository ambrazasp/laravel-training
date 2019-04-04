<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::include('components.form.input', 'input');
        Blade::include('components.form.textarea', 'textarea');
        Blade::include('components.form.delete', 'delete');
        Blade::include('components.form.submit', 'submit');

//        compact([
//            'input' => 'components.form.input',
//            'textarea' => 'components.form.textarea',
//            'delete' => 'components.form.delete',
//            'submit' => 'components.form.submit',
//        ]).each(function(alias, path) {
//            Blade::include(path, alias);
//        });

    }
}
