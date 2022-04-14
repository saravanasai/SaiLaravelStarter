<?php

namespace SaravanaSai\Laravelstarter\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravelstarter:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup the AdminLTE Theme';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $this->info('Installing Saravana sai Laravel Starter Kit');

        $bar = $this->output->createProgressBar(10);


        //section for copying the adminLTE assets
        $this->info('copying assets');
        $bar->start();
        (new Filesystem)->copyDirectory(__DIR__ . '/../../resources/adminLte/', public_path('adminLte'));
        $bar->advance();
        //section for copying the resources for authentication

        (new Filesystem)->copyDirectory(__DIR__ . '/../../resources/views/', base_path('resources/views'));
        $this->info('copying resources');
        $bar->advance();
        //section for copying the controllers
        $this->info('copying controllers');
        (new Filesystem)->copyDirectory(__DIR__ . '/../../resources/Http', app_path('Http'));
        $bar->advance();
        //section for creating the middleware
        shell_exec('php artisan make:middleware IsAuthenticated');
        $bar->advance();
        //section for adding contents to middleware
        $this->info('setting Authentication');
        copy(__DIR__ . '/../../resources/Http/Middleware/IsAuthenticated.php', app_path('Http/Middleware/IsAuthenticated.php'));
        $bar->advance();

        //deleting the existing database files
        (new Filesystem)->delete(__DIR__.'/../../../../database/');
        $bar->advance();
        //section for copying the new migration files
        $this->info('setting up migrations');
        (new Filesystem)->copyDirectory(__DIR__ . '/../../resources/database', base_path('database'));
        $bar->advance();
        //section for copying the Authetication Request files
        (new Filesystem)->copyDirectory(__DIR__ . '/../../resources/Http/Requests/', base_path('Http/Requests'));
        $bar->advance();
        //section for adding Routes files
        $this->info('setting up routes');
        file_put_contents(
            base_path('routes/web.php'),
            file_get_contents(__DIR__ . '/../../resources/routes.stub'),
            FILE_APPEND);

            $bar->advance();
        //migrating the new migration files & seeding
        shell_exec('php artisan migrate:fresh --seed');

        $bar->finish();

        return 0;
    }
}
