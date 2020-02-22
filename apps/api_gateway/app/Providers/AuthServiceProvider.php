<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Dusterio\LumenPassport\LumenPassport;
use Laravel\Passport\Passport;
use Carbon\Carbon;
use Auth;

class AuthServiceProvider extends ServiceProvider
{


    protected $policies = [
       //
    ];
    /**
     * Register any application services.
     *
     * @return void
     */

    public function register()
    {
        //
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        LumenPassport::routes($this->app);
        Passport::tokensExpireIn(Carbon::now()->addMinutes(15));
        Passport::refreshTokensExpireIn(Carbon::now()->addDays(1));
        Passport::personalAccessTokensExpireIn(Carbon::now()->addMonths(6));

        Gate::after(function ($user, $ability) {
           return $user->hasRole('administrador'); // note this returns boolean
        });
    }

    public function registerPolicies()
    {
        foreach ($this->policies as $key => $value) {
            Gate::policy($key, $value);
        }
    }

    public function policies()
    {
        return $this->policies;
    }
}
