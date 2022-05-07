<?php

namespace App\Providers;

use App\Models\DespesaRecorrente;
use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\DespesaRecorrenteObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Contracts\UserRepositoryInterface',
            'App\Repositories\Eloquent\UserRepository',
        );

        $this->app->bind(
            'App\Repositories\Contracts\DespesaRecorrenteRepositoryInterface',
            'App\Repositories\Eloquent\DespesaRecorrenteRepository',
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        DespesaRecorrente::observe(DespesaRecorrenteObserver::class);
        User::observe(UserObserver::class);
    }
}
