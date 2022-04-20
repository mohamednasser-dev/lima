<?php

use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AppController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\BrandController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => 'api','prefix' => "v1", 'namespace' => 'v1'], function () {

    Route::group(['prefix' => "app"], function () {
        //main screens
        Route::get('/screens', [AppController::class, 'screens']);
        Route::get('/settings', [AppController::class, 'settings']);
        Route::post('/contact_us', [AppController::class, 'contact_us']);
        Route::get('/pages/{key}', [AppController::class, 'pages']);
    });

    Route::group(['prefix' => 'auth'], function () {
        Route::post('/register', [UserController::class, 'register']);
        Route::post('/login', [UserController::class, 'login']);
        Route::post('/forget/password', [UserController::class, 'forget_password_code']);
    });

    Route::group(['prefix' => 'user'], function () {

        //home page
        Route::get('/home', [HomeController::class, 'home']);

        //brands data products
        Route::get('/brand/products/{id}', [ProductController::class, 'products']);
        Route::get('/products/details/{id}', [ProductController::class, 'product_details']);
    });


    Route::group(['middleware' => ['auth:api'], 'prefix' => "user"], function () {
        //user profile
        Route::get('/profile', [UserController::class, 'profile']);
        Route::post('/profile/update', [UserController::class, 'update_profile']);
        //
        Route::post('/logout', [UserController::class, 'logout']);

        //Address
        Route::post('addAddress', [AddressController::class, 'store']);
        Route::post('editAddress', [AddressController::class, 'edit'])->name('edit.address');
        Route::get('allAddress', [AddressController::class, 'index']);
        Route::post('deleteAddress', [AddressController::class, 'delete']);

        //cart
        Route::post('/cart/submit', [CartController::class, 'submitOrder']);
        Route::post('cart/{type}', [CartController::class, 'cart'])->name('add.cart');
        Route::get('selectCart', [CartController::class, 'myCart']);
        Route::get('checkout', [CartController::class, 'checkout']);
        Route::post('updateQuantity', [CartController::class, 'updateQuantity']);
        Route::get('card_count', [CartController::class, 'count']);
        Route::post('cart/product/remove', [CartController::class, 'remove']);

    });
});
