<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Givetem;
use Faker\Generator as Faker;

$factory->define(Givetem::class, function (Faker $faker) {
    return [
        'title'     => $faker->word(),
        'image_url' => "/storage/images/" . $faker->image('public/storage/images', 640, 480, null, false),
        'caption'   => 'Illum consectetur excepturi dolorem accusamus libero magni quia.',
        'rating'    => 3,
        'available' => [true, false][rand(0, 1)],
        'category_id'  => 2,
        'pickup_location'   => 'Lagos',
        'info'              => 'Illum consectetur excepturi cupiditate dolorem accusamus libero magni quia.',
        'tags'              => "{'kil', 'lop', 'sam'}",
        'user_id'           => 1
    ];
});
