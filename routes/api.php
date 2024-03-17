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

Route::get('/', function () {
    return 'get';
});

Route::post('/', function () {
    return 'post';
});

Route::put('/', function () {
    return 'put';
});

Route::patch('/', function () {
    return 'patch';
});

Route::delete('/', function () {
    return 'delete';
});

Route::match(['get', 'post'], '/algen', function () {
    return 'arte mo';
});

Route::any('/any', function () {
    return 'kahit ano';
});

