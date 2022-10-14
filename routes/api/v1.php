<?php

use App\Http\Controllers\Api\V1\HomepageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API V1 Routes
|--------------------------------------------------------------------------
|
| Here is where you can register version 1 of API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group, prefixed with "api/v1" url and "api.v1." route name. 
| Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('user', function (Request $request) {
    return $request->user();
});

Route::get('countries', [HomepageController::class, 'mock']);

Route::post('register', [HomepageController::class, 'mock']);
Route::post('otp', [HomepageController::class, 'mock']);
Route::post('check-email', [HomepageController::class, 'mock']);
Route::post('reset-password', [HomepageController::class, 'mock']);
Route::post('login', [HomepageController::class, 'mock']);
Route::patch('firebase-token', [HomepageController::class, 'mock']);
Route::post('change-password', [HomepageController::class, 'mock']);
Route::get('logout', [HomepageController::class, 'mock']);

Route::post('subcription', [HomepageController::class, 'mock']);
Route::get('subcription', [HomepageController::class, 'mock']);
Route::post('contact-us', [HomepageController::class, 'mock']);
Route::delete('delete-account', [HomepageController::class, 'mock']);
Route::get('profile', [HomepageController::class, 'mock']);
Route::patch('profile', [HomepageController::class, 'mock']);

Route::get('workouts', [HomepageController::class, 'mock']);
Route::get('periods/{period}/workouts/{workout}', [HomepageController::class, 'mock']);
Route::get('videos', [HomepageController::class, 'mock']);
Route::get('videos/{video}', [HomepageController::class, 'mock']);
Route::get('live', [HomepageController::class, 'mock']);
Route::get('blogs', [HomepageController::class, 'mock']);
Route::get('blogs/{blog}', [HomepageController::class, 'mock']);
Route::get('favorites', [HomepageController::class, 'mock']);
Route::patch('favorites/{video}', [HomepageController::class, 'mock']);
