<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PromoController;
use App\Http\Controllers\Api\ShopController;
use App\Http\Controllers\Api\LaundryController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/promo',[PromoController::class,'readAll']);
Route::get('/shop',[ShopController::class,'readAll']);
Route::get('/user',[UserController::class,'readAll']);
Route::get('/laundry',[LaundryController::class,'readAll']);

Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);

Route::middleware('auth:sacntum')->group(
    function()
    {
        Route::get('/laundry/user/{id}',[LaundryController::class,'whereUserId']);
        Route::get('/laundry/claim',[LaundryController::class,'claim']);

        Route::get('/promo/limit',[PromoController::class,'readLimit']);
           //promo

        Route::get('/shop/recomendation/limit',[ShopController::class,'readRecomendationLimit']);
           //shops

           Route::get('/shop/search/city/{name}',[ShopController::class,'searchByCity']);
           //Pencarian
    }
);