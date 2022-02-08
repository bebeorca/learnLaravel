<?php

namespace App\Http\Controllers;

use App\Models\Menus;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    public function index(){
        return view('menus',[
            "title" => "Menus",
            "menus" => Menus::all()
        ]);
    }

    public function show(Menus $menu){
        return view('menu',[
            "title" => $menu->menu,
            "menu" => $menu
        ]);
    }
}
