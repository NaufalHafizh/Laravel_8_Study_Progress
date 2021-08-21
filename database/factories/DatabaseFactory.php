<?php

namespace Database\Factories;

use App\Models\Database;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatabaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Database::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'judul' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'isi' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                ->map(function ($p) {

                    return "<p>$p</p>";
                })
                ->implode(''),
            'kategori_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5)
        ];
    }
}
