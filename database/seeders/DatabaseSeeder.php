<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Menus;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            "name" => "Kantin Qta",
            "email" => "dimasrdyo@gmail.com",
            "password" => bcrypt('12345')
        ]);

        User::create([
            "name" => "Kantin Luwh",
            "email" => "dimasrdyo2@gmail.com",
            "password" => bcrypt('123456')
        ]);

        Category::create([
            "name" => "Makanan",
            "slug" => "makanan"
        ]);

        Category::create([
            "name" => "Minuman",
            "slug" => "minuman"
        ]);

        Category::create([
            "name" => "Snack",
            "slug" => "snack"
        ]);

        Menus::create([
            "menu" => "Ayam Geprek",
            "slug" => "ayam-geprek",
            "harga" => "15.000",
            "deskripsi" => "Ayam geprek pedas nyot nyot",
            "category_id" => 1,
            "kantin_id" => 1
        ]);

        Menus::create([
            "menu" => "Mi Goreng",
            "slug" => "mi-goreng",
            "harga" => "12.000",
            "deskripsi" => "Mi goreng kecap enak nan bergiji",
            "category_id" => 1,
            "kantin_id" => 1
        ]);

        Menus::create([
            "menu" => "Nasi Campur",
            "slug" => "nasi-campur",
            "harga" => "10.000",
            "deskripsi" => "Nasi campur khusus sobat misqueen",
            "category_id" => 1,
            "kantin_id" => 1
        ]);

        Menus::create([
            "menu" => "Thai Tea",
            "slug" => "thai-tea",
            "harga" => "15.000",
            "deskripsi" => "Thai tea biasaji cuman mahal ki",
            "category_id" => 2,
            "kantin_id" => 2
        ]);

        Menus::create([
            "menu" => "Muka Chino",
            "slug" => "muka-chino",
            "harga" => "15.000",
            "deskripsi" => "Kopi rasis",
            "category_id" => 2,
            "kantin_id" => 1
        ]);

        Menus::create([
            "menu" => "Green Tea",
            "slug" => "green-tea",
            "harga" => "15.000",
            "deskripsi" => "Minuman nippon cahaya asia",
            "category_id" => 2,
            "kantin_id" => 1
        ]);

        Menus::create([
            "menu" => "Tahu Isi",
            "slug" => "tahu-isi",
            "harga" => "2.000",
            "deskripsi" => "Tahu isi ta 500an ji, cuma krn telkom yang jual jadi mahal ki",
            "category_id" => 3,
            "kantin_id" => 2
        ]);

    }
}
