<?php

namespace SaravanaSai\Laravelstarter\Providers;

use Illuminate\Support\ServiceProvider;
use SaravanaSai\Laravelstarter\Console\InstallCommand;

class LaravelstarterServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }


          /**
     * Register the Install Artisan commands.
     *
     * @return void
     */
    protected function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }
}
