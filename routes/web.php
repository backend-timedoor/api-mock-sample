<?php

use App\Http\Controllers\Web\ApiDocController;
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

Route::get('/', function () {
    return redirect(route('api-doc'));
});

Route::get('api-doc/{version?}', [ApiDocController::class, 'view'])
    ->name('api-doc')
    ->where('version', implode(config('api.versions')));
