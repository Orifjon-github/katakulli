<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HomepageController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('settings', [HomepageController::class, 'settings']);
//Route::get('test', [HomepageController::class, 'test']);
Route::get('homepage', [HomepageController::class, 'homepage']);
Route::get('categories', [HomepageController::class, 'categories']);
Route::get('products', [HomepageController::class, 'products']);
Route::get('category/{id}', [HomepageController::class, 'showCategory']);
Route::get('gallery', [HomepageController::class, 'gallery']);
Route::get('popular-recipes', [HomepageController::class, 'popularRecipes']);
Route::get('testimonials', [HomepageController::class, 'testimonials']);
