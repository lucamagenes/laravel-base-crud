<?php

use Faker\Generator as Faker;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $post = new Post();
            $post->title = $faker->sentence();
            $post->poster = $faker->imageUrl(600, 400, 'poster');
            $post->body = $faker->paragraphs(10, true);
            $post->save();
        }
    }
}
