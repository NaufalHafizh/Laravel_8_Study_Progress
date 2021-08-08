<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\database;
use App\Models\kategori;

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

            'name' => "Muhammad Naufal Hafizh",
            'email' => "muhammadnaufal40@gmail.com",
            'password' => bcrypt('12345')
        ]);

        kategori::create([

            'nama' => "Pemrograman",
            'slug' => "Pemrograman"

        ]);

        kategori::create([

            'nama' => "Sosial",
            'slug' => "Sosial"

        ]);

        database::create([

            'kategori_id' => 1,
            'user_id' => 1,
            'judul' => "Pemrograman",
            'slug' => "Pemrograman",
            'excerpt' => "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, consectetur quae consequatur doloribus ut id odio ab molestiae ullam amet vel tempore minus cum ducimus nemo provident hic reprehenderit error beatae numquam cumque architecto nihil. Tempora reiciendis consequuntur ad, incidunt voluptatibus odit error? Ad temporibus placeat beatae corporis quibusdam officia.</p>",
            'isi' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, nulla! Voluptates delectus at animi rerum aspernatur ab tenetur accusamus autem, ipsa distinctio. Alias inventore, rem qui consequatur adipisci ab recusandae. Rem molestiae similique accusantium est earum impedit debitis neque, provident vel. Fugit minima blanditiis id totam incidunt reiciendis exercitationem, quia illum excepturi ipsam doloribus magni? Quisquam placeat totam corrupti consequuntur neque reiciendis nemo, beatae temporibus ea in non tempore commodi facere reprehenderit laudantium numquam natus dolorum voluptates animi incidunt enim cupiditate. Labore non nihil delectus, molestiae perferendis omnis nemo quod quisquam neque asperiores ad nam commodi nulla explicabo molestias sint? Cum, similique eius? Possimus, quas maxime, doloribus culpa sed cupiditate ut necessitatibus magnam obcaecati et nulla ullam voluptates numquam officiis eius dolore alias eveniet cum accusamus officia incidunt voluptatum totam. Minima, illum aut, et ut consectetur quibusdam suscipit odio at quisquam ducimus, eos exercitationem aperiam molestiae veniam minus fugiat modi?</p>"

        ]);

        database::create([

            'kategori_id' => 2,
            'user_id' => 1,
            'judul' => "Sosial Budaya",
            'slug' => "Sosial",
            'excerpt' => "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, consectetur quae consequatur doloribus ut id odio ab molestiae ullam amet vel tempore minus cum ducimus nemo provident hic reprehenderit error beatae numquam cumque architecto nihil. Tempora reiciendis consequuntur ad, incidunt voluptatibus odit error? Ad temporibus placeat beatae corporis quibusdam officia.</p>",
            'isi' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, nulla! Voluptates delectus at animi rerum aspernatur ab tenetur accusamus autem, ipsa distinctio. Alias inventore, rem qui consequatur adipisci ab recusandae. Rem molestiae similique accusantium est earum impedit debitis neque, provident vel. Fugit minima blanditiis id totam incidunt reiciendis exercitationem, quia illum excepturi ipsam doloribus magni? Quisquam placeat totam corrupti consequuntur neque reiciendis nemo, beatae temporibus ea in non tempore commodi facere reprehenderit laudantium numquam natus dolorum voluptates animi incidunt enim cupiditate. Labore non nihil delectus, molestiae perferendis omnis nemo quod quisquam neque asperiores ad nam commodi nulla explicabo molestias sint? Cum, similique eius? Possimus, quas maxime, doloribus culpa sed cupiditate ut necessitatibus magnam obcaecati et nulla ullam voluptates numquam officiis eius dolore alias eveniet cum accusamus officia incidunt voluptatum totam. Minima, illum aut, et ut consectetur quibusdam suscipit odio at quisquam ducimus, eos exercitationem aperiam molestiae veniam minus fugiat modi?</p>"

        ]);

        database::create([

            'kategori_id' => 1,
            'user_id' => 1,
            'judul' => "Pemrograman Berbasis Web",
            'slug' => "Pemrograman",
            'excerpt' => "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, consectetur quae consequatur doloribus ut id odio ab molestiae ullam amet vel tempore minus cum ducimus nemo provident hic reprehenderit error beatae numquam cumque architecto nihil. Tempora reiciendis consequuntur ad, incidunt voluptatibus odit error? Ad temporibus placeat beatae corporis quibusdam officia.</p>",
            'isi' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, nulla! Voluptates delectus at animi rerum aspernatur ab tenetur accusamus autem, ipsa distinctio. Alias inventore, rem qui consequatur adipisci ab recusandae. Rem molestiae similique accusantium est earum impedit debitis neque, provident vel. Fugit minima blanditiis id totam incidunt reiciendis exercitationem, quia illum excepturi ipsam doloribus magni? Quisquam placeat totam corrupti consequuntur neque reiciendis nemo, beatae temporibus ea in non tempore commodi facere reprehenderit laudantium numquam natus dolorum voluptates animi incidunt enim cupiditate. Labore non nihil delectus, molestiae perferendis omnis nemo quod quisquam neque asperiores ad nam commodi nulla explicabo molestias sint? Cum, similique eius? Possimus, quas maxime, doloribus culpa sed cupiditate ut necessitatibus magnam obcaecati et nulla ullam voluptates numquam officiis eius dolore alias eveniet cum accusamus officia incidunt voluptatum totam. Minima, illum aut, et ut consectetur quibusdam suscipit odio at quisquam ducimus, eos exercitationem aperiam molestiae veniam minus fugiat modi?</p>"

        ]);
    }
}
