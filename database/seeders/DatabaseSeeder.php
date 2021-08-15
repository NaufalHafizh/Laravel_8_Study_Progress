<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\database;
use App\Models\kategori;
use Database\Factories\DatabaseFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // User::create([

        //     'name' => "Muhammad Naufal Hafizh",
        //     'email' => "muhammadnaufal40@gmail.com",
        //     'password' => bcrypt('12345')
        // ]);

        kategori::create([

            'nama' => "Pemrograman",
            'slug' => "Pemrograman"

        ]);

        kategori::create([

            'nama' => "Sosial",
            'slug' => "Sosial"

        ]);

        Database::factory(20)->create();
    }
}
