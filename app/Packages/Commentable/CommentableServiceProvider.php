<?php

namespace App\Packages\Commentable;

use Illuminate\Support\ServiceProvider;

class CommentableServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Bootstrap the application events.
     */
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->register('Baum\Providers\BaumServiceProvider');
    }
}