<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

//use App\Contracts/mMailer;

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
        $this->app->bind(
            'App\Contracts\mMailer',
            'App\Services\mPHPMMailer'
        );

        //
        Schema::defaultStringLength(191);

        Blade::component('admin.components.application_dets_component', 'applicationDetails');
        Blade::component('admin.components.decision_modal_component','decisionModal');
        Blade::component('admin.components.edit_email_modal', 'editEmailModal');
    }
}
