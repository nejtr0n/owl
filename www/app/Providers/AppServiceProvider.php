<?php

namespace App\Providers;

use Collective\Html\FormFacade as Form;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Form::component('bsText', 'components.form.text', ['name', 'attributes' => [], 'value']);
        Form::component('bsEmail', 'components.form.email', ['name', 'attributes' => [], 'value']);
        Form::component('bsPassword', 'components.form.password', ['name', 'attributes' => [], 'value']);
        Form::component('bsSubmit', 'components.form.submit', ['value', 'attributes' => []]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

    }
}
