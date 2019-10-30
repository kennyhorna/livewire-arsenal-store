<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'        => $faker->colorName,
        'description' => 'Esta es la descripción del producto. Solo necesitas saber que es de buena calidad y que deberías de comprarlo.',
        'image'       => 'https://picsum.photos/200/300',
        'price'       => $faker->numerify('#00'),
    ];
});
