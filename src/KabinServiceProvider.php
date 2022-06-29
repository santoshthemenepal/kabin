<?php

namespace Kabinsir\Necrud;

use App\View\Components\Header;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Module\Admin\Middleware\AdminMiddleware;
use Module\Admin\Middleware\AuthMiddleware;
use Module\Admin\Middleware\GueshAuthMiddleware;
use Module\Admin\Middleware\SuperAdminMiddleware;
use Module\Admin\Observers\ChatObaserver;
use Module\Admin\View\Components\DashboardDiv;
use Module\Common\Models\Chat;

class KabinServiceProvider extends ServiceProvider
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
        $this->loadRoutesFrom(__DIR__.'/route.php');
    }
}
