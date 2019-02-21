<?php

namespace Mbiomee\Laracrud;

use Illuminate\Support\ServiceProvider;

use Mbiomee\Laracrud\Console\CrudGenerator;

class LaracrudServiceProvider extends ServiceProvider
{

    protected $commands = [
        CrudGenerator::class,
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
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
}
