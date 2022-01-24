<?php

use Faker\Generator as Faker;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $movie = new Movie();
            $movie->title = $faker->sentence();
            $movie->year = $faker->year();
            $movie->cover = $faker->imageUrl(1200, 400, 'Movie');
            $movie->thumb = $faker->imageUrl(300, 200, 'Movie');
            $movie->desc = $faker->paragraphs(10, true);
            $movie->save();
        }
    }
}
