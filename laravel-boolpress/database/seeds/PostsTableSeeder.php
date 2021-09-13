<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($x = 0; $x < 50; $x++) {
            $postObject = new Post();
            $postObject->title = $faker->sentence(10);
            $postObject->abstract = $faker->paragraphs(20);
            $postObject->author = $faker->words(3);
            $postObject->save();
        }
    }
}
