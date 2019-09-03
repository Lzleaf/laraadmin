<?php
/**
 * Created by PhpStorm.
 * User: leaf
 * Date: 2019/9/3
 * Time: 2:54 PM
 */
namespace Leaf\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{

    public function boot()
    {

    }

    public function register()
    {
        $this->app->singleton('admin', function () {
            return new Admin;
        });
    }
}