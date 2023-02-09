<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Givetem>
 */
class GivetemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'     => fake()->word(),
            'image_url' => "/storage/images/" . fake()->image('public/storage/images', 640, 480, null, false),
            'caption'   => 'Illum consectetur excepturi dolorem accusamus libero magni quia.',
            'rating'    => 3,
            'available' => [true, false][rand(0, 1)],
            'category_id'  => 2,
            'pickup_location'   => 'Lagos',
            'info'              => 'Illum consectetur excepturi cupiditate dolorem accusamus libero magni quia.',
            'tags'              => "{'kil', 'lop', 'sam'}",
            'user_id'           => 1
        ];
    }
}
