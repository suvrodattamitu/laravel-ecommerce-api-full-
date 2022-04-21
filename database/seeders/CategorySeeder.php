<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name'=> 'Food', 'slug'=> 'food', 'image'=> 'food.webp'],
            ['name'=> 'Hygiene', 'slug'=> 'hygiene', 'image'=> 'hygiene.webp'],
            ['name'=> 'Home & Kitchen', 'slug'=> 'home-kitchen', 'image'=> 'home-kitchen.webp'],
            ['name'=> 'Baby Care', 'slug'=> 'baby-care', 'image'=> 'baby-care.webp'],
            ['name'=> 'Pet Care', 'slug'=> 'pet-care', 'image'=> 'pet-care.webp'],
            ['name'=> 'Sports & Fitness', 'slug'=> 'sports-fitness', 'image'=> 'sports-fitness.webp'],
            ['name'=> 'Toys & Fun', 'slug'=> 'toys-fun', 'image'=> 'toys-fun.webp']
        ];

        \DB::table('categories')->insert($categories);
    }
}