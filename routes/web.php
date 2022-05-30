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
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\PageController;
use App\Http\Controllers\Dashboard\ScreenController;
use App\Http\Controllers\Dashboard\TeamController;
use App\Http\Controllers\Dashboard\SocialLinkController;
use App\Http\Controllers\Dashboard\SubscriptionController;
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
Route::get('/category-details/{id}', [\App\Http\Controllers\Front\HomeController::class, 'CategoryDetails']);
Route::get('/post-details/{id}', [\App\Http\Controllers\Front\HomeController::class, 'PostDetails']);

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
    });

    // subscriptions Route
    Route::group(['prefix' => 'subscriptions'], function () {
        $permission = 'subscriptions';
        Route::get('/', [SubscriptionController::class, 'index'])->name('subscriptions')->middleware('permission:read-' . $permission);
        Route::get('show/{id}', [SubscriptionController::class, 'show'])->name('subscriptions.show')->middleware('permission:create-' . $permission);
        Route::get('change_status/{status}/{id}', [SubscriptionController::class, 'change_status'])->name('subscriptions.change_status')->middleware('permission:update-' . $permission);
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

    //pages
    Route::group(['prefix' => 'pages'], function () {
        $permission = 'pages';
        Route::get('/', [PageController::class, 'index'])->name('pages')->middleware('permission:read-' . $permission);
        Route::get('create', [PageController::class, 'create'])->name('pages.create')->middleware('permission:create-' . $permission);
        Route::post('store', [PageController::class, 'store'])->name('pages.store')->middleware('permission:create-' . $permission);
        Route::get('edit/{id}', [PageController::class, 'edit'])->name('pages.edit')->middleware('permission:update-' . $permission);
        Route::post('update/{id}', [PageController::class, 'update'])->name('pages.update')->middleware('permission:update-' . $permission);
        Route::post('deletes', [PageController::class, 'deletes'])->name('pages.deletes')->middleware('permission:delete-' . $permission);
        Route::get('delete/{id}', [PageController::class, 'delete'])->name('pages.delete')->middleware('permission:delete-' . $permission);
    });

    //screens
    Route::group(['prefix' => 'screens'], function () {
        $permission = 'screens';
        Route::get('/', [ScreenController::class, 'index'])->name('screens')->middleware('permission:read-' . $permission);
        Route::get('create', [ScreenController::class, 'create'])->name('screens.create')->middleware('permission:create-' . $permission);
        Route::post('store', [ScreenController::class, 'store'])->name('screens.store')->middleware('permission:create-' . $permission);
        Route::get('edit/{id}', [ScreenController::class, 'edit'])->name('screens.edit')->middleware('permission:update-' . $permission);
        Route::post('update/{id}', [ScreenController::class, 'update'])->name('screens.update')->middleware('permission:update-' . $permission);
        Route::post('deletes', [ScreenController::class, 'deletes'])->name('screens.deletes')->middleware('permission:delete-' . $permission);
        Route::get('delete/{id}', [ScreenController::class, 'delete'])->name('screens.delete')->middleware('permission:delete-' . $permission);
    });

    //links
    Route::group(['prefix' => 'links'], function () {
        $permission = 'links';
        Route::get('/', [SocialLinkController::class, 'index'])->name('links')->middleware('permission:read-' . $permission);
        Route::get('create', [SocialLinkController::class, 'create'])->name('links.create')->middleware('permission:create-' . $permission);
        Route::post('store', [SocialLinkController::class, 'store'])->name('links.store')->middleware('permission:create-' . $permission);
        Route::get('edit/{id}', [SocialLinkController::class, 'edit'])->name('links.edit')->middleware('permission:update-' . $permission);
        Route::post('update/{id}', [SocialLinkController::class, 'update'])->name('links.update')->middleware('permission:update-' . $permission);
        Route::post('deletes', [SocialLinkController::class, 'deletes'])->name('links.deletes')->middleware('permission:delete-' . $permission);
        Route::get('delete/{id}', [SocialLinkController::class, 'delete'])->name('links.delete')->middleware('permission:delete-' . $permission);
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
        Route::post('change_active', [CityController::class, 'change_active'])->name('cities.change_active')->middleware('permission:delete-' . $permission);
    });

    // teams Route
    Route::group(['prefix' => 'teams'], function () {
        $permission = 'teams';
        Route::get('/', [TeamController::class, 'index'])->name('teams')->middleware('permission:read-' . $permission);
        Route::get('create', [TeamController::class, 'create'])->name('teams.create')->middleware('permission:create-' . $permission);
        Route::post('store', [TeamController::class, 'store'])->name('teams.store')->middleware('permission:create-' . $permission);
        Route::get('edit/{id}', [TeamController::class, 'edit'])->name('teams.edit')->middleware('permission:update-' . $permission);
        Route::post('update/{id}', [TeamController::class, 'update'])->name('teams.update')->middleware('permission:update-' . $permission);
        Route::post('deletes', [TeamController::class, 'deletes'])->name('teams.deletes')->middleware('permission:delete-' . $permission);
        Route::get('delete/{id}', [TeamController::class, 'delete'])->name('teams.delete')->middleware('permission:delete-' . $permission);
        Route::post('change_active', [TeamController::class, 'change_active'])->name('teams.change_active')->middleware('permission:delete-' . $permission);
    });

    Route::group(['prefix' => 'categories','as'=>'categories'], function () {
        $permission = 'categories';
        Route::get('/', [CategoryController::class, 'index'])->middleware('permission:read-' . $permission);
        Route::get('create/{parent_id}', [CategoryController::class, 'create'])->name('.create')->middleware('permission:create-' . $permission);
        Route::post('store', [CategoryController::class, 'store'])->name('.store')->middleware('permission:create-' . $permission);
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('.edit')->middleware('permission:update-' . $permission);
        Route::get('show/{parent_id}', [CategoryController::class, 'show'])->name('.show')->middleware('permission:update-' . $permission);
        Route::post('update/{id}', [CategoryController::class, 'update'])->name('.update')->middleware('permission:update-' . $permission);
        Route::post('deletes', [CategoryController::class, 'deletes'])->name('.deletes')->middleware('permission:delete-' . $permission);
        Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('.delete')->middleware('permission:delete-' . $permission);
    });

    Route::group(['prefix' => 'posts','as'=>'posts'], function () {
        $permission = 'posts';
        Route::get('/{type}/create', [PostController::class, 'create'])->name('.create')->middleware('permission:create-' . $permission);
        Route::get('/{type}', [PostController::class, 'index'])->name('.index')->middleware('permission:read-' . $permission);
        Route::get('/get_subcategory/{id}/{type}', [PostController::class, 'get_subcategory'])->name('.get_subcategory');
        Route::post('store', [PostController::class, 'store'])->name('.store')->middleware('permission:create-' . $permission);
        Route::get('edit/{id}', [PostController::class, 'edit'])->name('.edit')->middleware('permission:update-' . $permission);
        Route::get('show/{parent_id}', [PostController::class, 'show'])->name('.show')->middleware('permission:update-' . $permission);
        Route::post('update/{id}', [PostController::class, 'update'])->name('.update')->middleware('permission:update-' . $permission);
        Route::post('deletes', [PostController::class, 'deletes'])->name('.deletes')->middleware('permission:delete-' . $permission);
        Route::post('change_free', [PostController::class, 'change_free'])->name('.change_free')->middleware('permission:update-' . $permission);
        Route::get('delete/{id}', [PostController::class, 'delete'])->name('.delete')->middleware('permission:delete-' . $permission);
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



