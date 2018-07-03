<?php

namespace App\Providers;

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
        $navs = \App\Category::all();   //头部导航
        foreach ($navs as $nav){
            if($nav->type=="wiki"){
                $nav->url = "/wiki/{$nav->queryid}";
            }else{
                $nav->url = "/category/{$nav->queryid}";
            }
        }
        //分配模板公共数据
        view()->share(["navs"=>$navs]);
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
