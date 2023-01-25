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
Route::get('categories', [HomepageController::class, 'categories']);
Route::get('carousels', [HomepageController::class, 'carousels']);
Route::get('popular-products', [HomepageController::class, 'popular_products']);
