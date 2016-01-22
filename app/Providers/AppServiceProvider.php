<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;
use App\Tools\Permissions;

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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Permissions tool should only ever return one instance of itself, lets make it a singleton
        $this->app->singleton('Permissions', function($app)
        {
            return new \App\Tools\Permissions;
        });
        //Register blade extensions for checking permissions @allows @denies
        Blade::directive('allows', function($expression) {
            return "<?php if(app('Permissions')->check($expression)): ?>";
        });
        Blade::directive('endallows', function() {
            return "<?php endif; ?>";
        });
        Blade::directive('denies', function($expression) {
            return "<?php if(!app('Permissions')->check($expression)): ?>";
        });
        Blade::directive('enddenies', function() {
            return "<?php endif; ?>";
        });
    }
}
