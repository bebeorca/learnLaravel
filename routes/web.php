<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenusController;
use App\Models\Category;
use App\Models\User;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/menus', [MenusController::class, 'index']);

Route::get('/menus/{menu:slug}', [MenusController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

Route::get('/kantin/{user}', function (User $user){
    return view('menus', [
        "title" => "Kantin Menus",
        "menus" => $user->menus
    ]);
});