<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HelperController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//, 'AccessKey'
Route::group(['middleware' => ['api'], 'prefix' => "v1", 'namespace' => 'v1'], function () {

    Route::group(['prefix' => "app"], function () {
        //main screens
        Route::get('/cities', [HelperController::class, 'cities']);
        Route::get('/teams', [HelperController::class, 'teams']);
        Route::get('/screens', [HelperController::class, 'screens']);
        Route::get('/settings', [HelperController::class, 'settings']);
        Route::post('/contact_us', [HelperController::class, 'contact_us']);
        Route::get('/pages/{type}', [HelperController::class, 'pages']);
        Route::get('/home/categories/{id}', [HomeController::class, 'home']);
    });

    Route::group(['prefix' => 'auth'], function () {
        Route::post('/register', [UserController::class, 'register']);
        Route::post('/verify_phone', [UserController::class, 'verify_phone']);
        Route::post('/login', [UserController::class, 'login']);
        Route::post('/forget/password', [UserController::class, 'forget_password_code']);
    });

    Route::group(['middleware' => ['auth:api'], 'prefix' => "user"], function () {
        //user profile
        Route::get('/profile', [UserController::class, 'profile']);
        Route::post('/profile/update', [UserController::class, 'update_profile']);
        Route::post('/profile/update_password', [UserController::class, 'update_password']);
        //
        Route::post('/logout', [UserController::class, 'logout']);

    });
});

