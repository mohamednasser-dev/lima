<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HelperController;
use App\Http\Controllers\Api\CouponController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\FavoriteController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\SubscriptionController;
use App\Http\Controllers\Api\PostController;

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
        Route::get('/links/{key}', [HelperController::class, 'links']);
        Route::get('/links', [HelperController::class, 'all_links']);
        Route::get('/subscription/types', [SubscriptionController::class, 'subscription_types']);
        //home
        Route::get('/home/categories/{id}', [HomeController::class, 'home']);
        //posts
        Route::get('/category/sub_categories/{id}', [PostController::class, 'sub_categories']);
        Route::get('/category/posts/{id}', [PostController::class, 'posts']);
        Route::get('/post/details/{id}', [PostController::class, 'post_details']);

    });

    Route::group(['prefix' => 'auth'], function () {
        Route::post('/register', [UserController::class, 'register']);
        Route::post('/verify_phone', [UserController::class, 'verify_phone']);
        Route::post('/login', [UserController::class, 'login']);
        Route::post('/forget-password', [UserController::class, 'ForgetPassword']);
        Route::post('/verify', [UserController::class, 'Verify']);
        Route::post('/change-password', [UserController::class, 'changePassword']);
    });
    Route::post('/user/favorite/store', [FavoriteController::class, 'store']);
    Route::post('/user/post/like/store', [PostController::class, 'like_store']);

    Route::group(['middleware' => ['auth:api'], 'prefix' => "user"], function () {

        Route::post('/coupon/apply', [CouponController::class, 'apply_coupon']);

        Route::post('/update_fcm_token', [UserController::class, 'update_fcm_token']);

        //user profile
        Route::get('/profile', [UserController::class, 'profile']);
        Route::post('/profile/update', [UserController::class, 'update_profile']);
        Route::post('/profile/update_password', [UserController::class, 'update_password']);
        Route::post('/logout', [UserController::class, 'logout']);

        Route::post('/subscription/store', [SubscriptionController::class, 'store_subscription']);

        //favorites
        Route::get('/favorites', [FavoriteController::class, 'index']);

        Route::get('/subscription/payment_step_one', [SubscriptionController::class, 'payment_step_one']);
        Route::get('/subscription/payment_step_two', [SubscriptionController::class, 'payment_step_two']);


    });

    Route::post('/subscriber/buy/webhook_json', [SubscriptionController::class, 'excute_pay']);
    Route::get('/pay/success', [SubscriptionController::class, 'pay_sucess']);
    Route::get('/pay/error', [SubscriptionController::class, 'pay_error']);
});

