<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('categories', [
            "title" => "Kategori Menu",
            "categories" => Category::all()
        ]);
    }

    public function show(Category $category){
        return view('category', [
            "title" => $category->name,
            "menus" => $category->menus,
            "category" => $category->name
        ]);
    }
}
