<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
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
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ob_start();
        Paginator::useBootstrap();
        //for make api language make changes in system language
        $languages = ['ar', 'en'];
        App::setLocale('ar');
        Schema::defaultStringLength(255);
        $lang = request()->header('lang');
        if ($lang) {
            if (in_array($lang, $languages)) {
                App::setLocale($lang);
            } else {
                App::setLocale('ar');
            }
        }

        if (!session()->has('lang')) {
            session()->put('lang', 'ar');
        }

        //check users subscription to auto end it
        $ended_users = User::where('subscriber',1)->where('subscription_ended_at','<', Carbon::now())->get();
        if(count($ended_users) > 0){
            foreach ($ended_users as $user){
               User::find($user->id)->update(['subscriber'=>0]);
            }
        }
        View::share('setting_phone', Setting::where('key','phone')->first()->val);
        View::share('setting_email', Setting::where('key','email')->first()->val);

    }

}
