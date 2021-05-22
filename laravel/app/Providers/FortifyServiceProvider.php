<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;

use App\Policies\AuthPolicy;
use Gate;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Carbon\Carbon;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
//        User::class => AuthPolicy::class,
    ];

    public function register()
    {
        Gate::define('isModerator', [AuthPolicy::class, 'isModerator']);
        Gate::define('isVerified', [AuthPolicy::class, 'isVerified']);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);


            Fortify::registerView(function (){
            return view('auth.register');
        });

        Fortify::loginView(function (){
            return view('auth.login');
        });

        Fortify::requestPasswordResetLinkView(function (){
            return view('auth.forgot_password');
        });

        Fortify::resetPasswordView(function (Request $request){
            return view('auth.reset_password', ["request"=>$request]);
        });

        Fortify::verifyEmailView(function (Request $request){
            $isModerator =   Gate::check('isModerator');
            $isVerified = Gate::check('isVerified');
            if ($isModerator || $isVerified){
                if ($isModerator)
                {
                    $request->user()->email_verified_at = Carbon::now();
                    $request->user()->save();
                }
                return redirect(route('board.board'));
            }
            return view('auth.verify_email');
        });


        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
