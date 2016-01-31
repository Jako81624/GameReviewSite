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
        \Symfony\Component\HttpFoundation\Request::setTrustedProxies(array(
            '103.21.244.0/22',
            '103.22.200.0/22',
            '103.31.4.0/22',
            '104.16.0.0/12',
            '108.162.192.0/18',
            '141.101.64.0/18',
            '162.158.0.0/15',
            '172.64.0.0/13',
            '173.245.48.0/20',
            '188.114.96.0/20',
            '190.93.240.0/20',
            '197.234.240.0/22',
            '198.41.128.0/17',
            '199.27.128.0/21',
            '2400:cb00::/32',
            '2405:8100::/32',
            '2405:b500::/32',
            '2606:4700::/32',
            '2803:f800::/32'
        ));
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
