<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;

class HomeController extends Controller
{

    public function index()
    {

        //        // function for each position created
        //        factory(ArticleModel::class, 5)->create()->each(function ($faker) {
        //            return [
        //                'title'       => $faker->text,
        //                'user_id'     => $faker->numberBetween(1, 100000),
        //                'slug'        => $faker->slug,
        //                'keywords'    => $faker->text,
        //                'description' => $faker->text,
        //                'content'     => $faker->paragraph,
        //                'cover'       => $faker->imageUrl(),
        //                'comment_id'  => $faker->numberBetween(1, 100000),
        //                'view_count'  => $faker->numberBetween(1, 100000),
        //                'come_from'   => $faker->text,
        //                'tag_id'      => $faker->numberBetween(1, 100000),
        //                'tag_ids'     => $faker->text,
        //                'status'      => $faker->numberBetween(0, 1),
        //                'created_at'  => $faker->dateTime,
        //                'updated_at'  => $faker->dateTime,
        //            ];
        //        });

        return view('article');
    }

    public function factory()
    {
        $faker = Faker\Factory::create();
        foreach (range(1, 500) as $index) {

        }
    }

}
