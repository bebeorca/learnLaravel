<?php

use App\Http\Controllers\MenusController;
use App\Models\Category;
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

Route::get('/menu/{menu:slug}', [MenusController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        "title" => "Kategori Menu",
        "categories" => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        "title" => $category->name,
        "menus" => $category->menus,
        "category" => $category->name
    ]);
});
