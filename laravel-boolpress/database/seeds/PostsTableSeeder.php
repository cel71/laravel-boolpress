<?php

use App\Category;
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

        $categoryList = [
            'cucina',
            'sport',
            'salute',
            'hobby',
            'lavoro'
        ];

        $listCategoryId = [];

        foreach ($categoryList as $category) {
            $categoryObject = new Category();
            $categoryObject->name = $category;
            $categoryObject->save();
            $listCategoryId[] = $categoryObject->id;
        };

        for ($x = 0; $x < 50; $x++) {
            $postObject = new Post();
            $randCategoryKey = array_rand($listCategoryId, 1);
            $categoryId = $listCategoryId[$randCategoryKey];
            $postObject->category_id = $categoryId;
            $postObject->title = $faker->sentence(10);
            $postObject->abstract = $faker->paragraph(4);
            $postObject->author = $faker->words(3, true);
            $postObject->save();
        }
    }
}