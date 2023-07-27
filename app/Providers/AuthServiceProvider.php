<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function ($user, $client) {
            return $user->access_level === 1;

            /* Declarando e registrando um "gate" para autorização/permissão: */
            /* update-client: Nome do gate/
            /* $user: Variável que receberá do láravel uma instância do usuário logado */
            /* $client: Variável que receberá do láravel uma instância do model "cliente" */
            /* Se for igual, retorna true e o usuário tem permissão */
        //Gate::define('update-client', function($user, $client) {
        //return $user->id == $client->user_id;
        });
    }
}
