<?php

namespace App\Providers;


use App\Usuarios;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        //$thisviea->registerPolicies();
        $this->app['auth']->viaRequest('api',function ($request){
           if ($request->input('api_token')){
               return Usuarios::where('api_token',$request->input('api_token'))->first();
           }
        });
   
    }
}
