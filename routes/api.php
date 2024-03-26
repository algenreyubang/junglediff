<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

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

// Route::get('/Get', function () {
//     return 'get';
// });

// Route::post('/Post', function () {
//     return 'post';
// });

// Route::put('/Put', function () {
//     return 'put';
// });

// Route::patch('/Patch', function () {
//     return 'patch';
// });

// Route::delete('/Delete', function () {
//     return 'delete';
// });

// Route::match(['get', 'post'], '/algen', function () {
//     return 'arte mo';
// });

// Route::any('/any', function () {
//     return 'kahit ano';
// });

// Route::get('/home', function (Request $request){
// return  $request;
// });

// Route::get('user/{id}', function (string $id){
//     return '$id';
// });

// Route::get('posts/{post}/comments/{comment}', function (string $postId, string $commentId){
//     return 'id: $postId, $commentId';
// });

// Route::get('user/{id}', function (string $id){
//     return 'User' .$id;
// });

// Route::get('/user/{name?}', function (?string $name = null) {
//     return $name;
// });
 
// Route::get('/user/{name?}', function (?string $name = 'John') {
//     return $name;
// });

// Route::get('/user/{name}', function (string $name) {
//      return 'dia 1';
// })->where('name', '[A-Za-z]+');

// Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile');
// route('profile');

// Route::get('user/logout ', function(){
//     return redirect()->route('profile');
// });

// Route::get('/user/{id}/profile', function (string $id) {
//     return $id;
// })->name('profile');
 
// $url = route('profile', ['id' => 1]);

// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });
 
//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });


 
// Route::controller(OrderController::class)->group(function () {
//     Route::get('/orders/{id}', 'show');
//     Route::post('/orders', 'store');
// });


// activity 2
// Route::get('/user', function(){
// return 'users';
// });

Route::middleware('extract.token')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::patch('/users/{user}',[UserController::class, 'update']);

    Route::post('/posts', [PostController::class, 'store']) ;
    Route::put('/posts/{post}', [PostController::class, 'update']);
    Route::delete('/posts/{post}', [PostController::class, 'destroy']);
        
});
        
