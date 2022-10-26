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

Route::get('countries', [HomepageController::class, 'countries']);

Route::post('register', [HomepageController::class, 'register']);
Route::post('otp', [HomepageController::class, 'otp']);
Route::post('check-email', [HomepageController::class, 'mock']);
Route::post('reset-password', [HomepageController::class, 'mock']);
Route::post('login', [HomepageController::class, 'register']);
Route::patch('firebase-token', [HomepageController::class, 'mock']);
Route::post('change-password', [HomepageController::class, 'mock']);
Route::get('logout', [HomepageController::class, 'mock']);

Route::post('subscription', [HomepageController::class, 'mock']);
Route::get('subscription', [HomepageController::class, 'subscription']);
Route::post('contact-us', [HomepageController::class, 'mock']);
Route::delete('delete-account', [HomepageController::class, 'mock']);
Route::get('profile', [HomepageController::class, 'profile']);
Route::patch('profile', [HomepageController::class, 'mock']);

Route::get('workouts', [HomepageController::class, 'workouts']);
Route::get('periods/{period}/workouts/{workout}', [HomepageController::class, 'workoutsDetail']);
Route::get('videos', [HomepageController::class, 'videos']);
Route::get('videos/{video}', [HomepageController::class, 'videosDetail']);
Route::get('live', [HomepageController::class, 'live']);
Route::get('blogs', [HomepageController::class, 'blogs']);
Route::get('blogs/{blog}', [HomepageController::class, 'blogsDetail']);
Route::get('favorites', [HomepageController::class, 'favorites']);
Route::patch('favorites/{video}', [HomepageController::class, 'mock']);
