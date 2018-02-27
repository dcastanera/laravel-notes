<?php

namespace DCastanera\Notes;

use Illuminate\Support\ServiceProvider;

class NoteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Migrations
         * This copies the migrations for the roles and permissions tables to the
         * default database/migrations directory.
         */
        $this->publishes([
            __DIR__.'/migrations' => base_path('database/migrations'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
