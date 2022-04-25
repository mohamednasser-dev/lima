<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\CityController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\RoleController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('cache', function () {
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return 'success';
});


Route::get('/', [\App\Http\Controllers\Front\HomeController::class, 'Home'])->name('front.home');
Route::get('/home', [\App\Http\Controllers\Front\HomeController::class, 'Home'])->name('front.home');
Route::get('/category/{id}', [\App\Http\Controllers\Front\HomeController::class, 'CategoryDetails']);


Route::get('lang/{lang}', function ($lang) {


    if (session()->has('lang')) {
        session()->forget('lang');
    }
    if ($lang == 'en') {
        session()->put('lang', 'en');
        App::setLocale('en');
    } else {
        session()->put('lang', 'ar');
        App::setLocale('ar');
    }


    return back();
});
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [HomeController::class, 'index'])->name('admin');

Route::group(['middleware' => 'auth'], function () {
// admins Route
    Route::group(['prefix' => 'admins'], function () {
        $permission = 'admins';
        Route::get('/', [AdminController::class, 'index'])->name('admins')->middleware('permission:read-' . $permission);
        Route::get('create', [AdminController::class, 'create'])->name('admins.create')->middleware('permission:create-' . $permission);
        Route::post('store', [AdminController::class, 'store'])->name('admins.store')->middleware('permission:create-' . $permission);
        Route::get('edit/{id}', [AdminController::class, 'edit'])->name('admins.edit')->middleware('permission:update-' . $permission);
        Route::post('update/{id}', [AdminController::class, 'update'])->name('admins.update')->middleware('permission:update-' . $permission);
        Route::get('delete/{id}', [AdminController::class, 'delete'])->name('admins.delete')->middleware('permission:delete-' . $permission);
        Route::post('deletes', [AdminController::class, 'deletes'])->name('admins.deletes')->middleware('permission:delete-' . $permission);

    });
// roles Route
    Route::group(['prefix' => 'roles'], function () {
        $permission = 'roles';
        Route::get('/', [RoleController::class, 'index'])->name('roles')->middleware('permission:read-' . $permission);
        Route::get('create', [RoleController::class, 'create'])->name('roles.create')->middleware('permission:create-' . $permission);
        Route::post('store', [RoleController::class, 'store'])->name('roles.store')->middleware('permission:create-' . $permission);
        Route::get('edit/{id}', [RoleController::class, 'edit'])->name('roles.edit')->middleware('permission:update-' . $permission);
        Route::post('update/{id}', [RoleController::class, 'update'])->name('roles.update')->middleware('permission:update-' . $permission);
        Route::post('deletes', [RoleController::class, 'deletes'])->name('roles.deletes')->middleware('permission:delete-' . $permission);
        Route::get('delete/{id}', [RoleController::class, 'delete'])->name('roles.delete')->middleware('permission:delete-' . $permission);
    });

// users Route
    Route::group(['prefix' => 'users'], function () {
        $permission = 'users';
        Route::get('/', [UserController::class, 'index'])->name('users')->middleware('permission:read-' . $permission);
        Route::get('show/{id}', [UserController::class, 'show'])->name('users.show')->middleware('permission:create-' . $permission);
        Route::post('change_status', [UserController::class, 'change_status'])->name('users.change_status');
        Route::get('create', [UserController::class, 'create'])->name('users.create')->middleware('permission:create-' . $permission);
        Route::post('store', [UserController::class, 'store'])->name('users.store')->middleware('permission:create-' . $permission);
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('users.edit')->middleware('permission:update-' . $permission);
        Route::post('update/{id}', [UserController::class, 'update'])->name('users.update')->middleware('permission:update-' . $permission);
        Route::post('deletes', [UserController::class, 'deletes'])->name('users.deletes')->middleware('permission:delete-' . $permission);
        Route::get('delete/{id}', [UserController::class, 'delete'])->name('users.delete')->middleware('permission:delete-' . $permission);

        //userAddress
        Route::get('address/{id}', [UserController::class, 'indexAddress'])->name('users.address')->middleware('permission:read-' . $permission);

    });

//sliders
    Route::group(['prefix' => 'sliders'], function () {
        $permission = 'sliders';
        Route::get('/', [SliderController::class, 'index'])->name('sliders')->middleware('permission:read-' . $permission);
        Route::get('create', [SliderController::class, 'create'])->name('sliders.create')->middleware('permission:create-' . $permission);
        Route::post('store', [SliderController::class, 'store'])->name('sliders.store')->middleware('permission:create-' . $permission);
        Route::get('edit/{id}', [SliderController::class, 'edit'])->name('sliders.edit')->middleware('permission:update-' . $permission);
        Route::post('update/{id}', [SliderController::class, 'update'])->name('sliders.update')->middleware('permission:update-' . $permission);
        Route::post('deletes', [SliderController::class, 'deletes'])->name('sliders.deletes')->middleware('permission:delete-' . $permission);
        Route::get('delete/{id}', [SliderController::class, 'delete'])->name('sliders.delete')->middleware('permission:delete-' . $permission);
    });


// cities Route
    Route::group(['prefix' => 'city'], function () {
        $permission = 'cities';
        Route::get('/', [CityController::class, 'index'])->name('cities')->middleware('permission:read-' . $permission);
        Route::get('create', [CityController::class, 'create'])->name('cities.create')->middleware('permission:create-' . $permission);
        Route::post('store', [CityController::class, 'store'])->name('cities.store')->middleware('permission:create-' . $permission);
        Route::get('edit/{id}', [CityController::class, 'edit'])->name('cities.edit')->middleware('permission:update-' . $permission);
        Route::post('update/{id}', [CityController::class, 'update'])->name('cities.update')->middleware('permission:update-' . $permission);
        Route::post('deletes', [CityController::class, 'deletes'])->name('cities.deletes')->middleware('permission:delete-' . $permission);
        Route::get('delete/{id}', [CityController::class, 'delete'])->name('cities.delete')->middleware('permission:delete-' . $permission);
    });


//settings
    Route::group(['prefix' => 'settings'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('settings');
        Route::post('/update', [SettingController::class, 'update'])->name('settings.update');
    });

    //profile
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile');
        Route::post('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    });
});



