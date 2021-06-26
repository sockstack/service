<?php


namespace Sockstack\Service;

use Illuminate\Support\ServiceProvider;

class ServiceGeneratorProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ServiceGeneratorCommand::class
            ]);
        }
    }

    /**
     * 启动所有的应用服务。
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * 获取由提供者提供的服务。
     *
     * @return array
     */
    public function provides()
    {
        return [ServiceGeneratorCommand::class];
    }
}