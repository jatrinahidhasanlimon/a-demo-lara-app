<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/redis-pattern-set', ['App\Http\Controllers\RedisExplorerController','set_pattern']);
Route::get('/redis-get-by-pattern', ['App\Http\Controllers\RedisExplorerController','get_by_pattern']);

Route::get('/dispatch-a-job', ['App\Http\Controllers\JobExploreController','dispatch_a_job']);
