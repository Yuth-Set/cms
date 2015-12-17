<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;

class RouteServiceProvider extends ServiceProvider {
    protected $namespace = 'App\Http\Controllers';

    public function boot(Router $router) {
        parent::boot($router);
        $router->model('page', 'App\Page');
        $router->model('post', 'App\Post');
        $router->model('comment', 'App\Comment');
        $router->model('user', 'App\User');
        $router->model('post', 'App\Post');
    }

    public function map(Router $router) {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
