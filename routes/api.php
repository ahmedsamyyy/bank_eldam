<?php

use App\Http\Controllers\apiAuth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Models\Category;
use App\Http\Resources\categoryResource;
use App\Http\Resources\cityResourceCollection;
use App\Http\Resources\governorateResourceCollection;
use App\Models\City;
use App\Models\Governorate;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
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



Route::prefix("v1")->group(function(){
Route::get("/governorates" , [MainController::class , "governorates"]);
Route::get("/cities" , [MainController::class , "cities"]);
Route::get("/bloodTypes" , [MainController::class , "bloodTypes"]);

Route::post("/register" , [AuthController::class , "register"]);
Route::post("/login" , [AuthController::class , "login"]);

// Route::prefix("v1")->group(function(){
//     Route::get("/governorates" , [apiController::class , "governorates"]);
//     Route::get("/cities" , [apiController::class , "cities"]);
//     Route::get("/bloodTypes" , [apiController::class , "bloodTypes"]);
    Route::get("/Categories" , [MainController::class , "Categories"]);
    Route::get("/clients" , [MainController::class , "clients"]);
    Route::get("/contacts" , [MainController::class , "contacts"]);
    Route::get("/donation_requests" , [MainController::class , "donation_requests"]);
    Route::get("/notifications" , [MainController::class , "notifications"]);
    Route::get("/settings" , [MainController::class , "settings"]);
    });
    Route::middleware(['auth:api'])->group(function () {
        Route::get("/posts" , [MainController::class , "posts"]);
    });




