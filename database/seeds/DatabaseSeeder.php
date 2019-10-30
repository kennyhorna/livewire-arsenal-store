<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create();

        $data = [
            [
                'name'  => 'Womens Away Shirt',
                'image' => '/storage/images/producto-01.png',
                'price' => 25800,
            ],
            [
                'name'  => 'Mens Home Shirt',
                'image' => '/storage/images/producto-02.png',
                'price' => 43000,
            ],
            [
                'name'  => 'Kids Contrast Chest Polo',
                'image' => '/storage/images/producto-03.png',
                'price' => 3900,
            ],
            [
                'name'  => '',
                'image' => '/storage/images/producto-04.png',
                'price' => 10700,
            ],
        ];

        foreach ($data as $details)
        {
            factory(\App\Product::class)->create($details);
        }
    }
}
