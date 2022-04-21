<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            //1.category = food
            [ 'category_id'=> 1, 'name'=> 'Fruits & Vegetables', 'image'=> 'fruits-vegetables.webp', 'slug'=> 'fruits-vegetables' ],
            [ 'category_id'=> 1, 'name'=> 'Meat & Fish', 'image'=> 'meat-fish.webp', 'slug'=> 'meat-fish' ],
            [ 'category_id'=> 1, 'name'=> 'Cooking', 'image'=> 'cooking.webp', 'slug'=> 'cooking' ],
            [ 'category_id'=> 1, 'name'=> 'Baking', 'image'=> 'baking.webp', 'slug'=> 'baking' ],
            [ 'category_id'=> 1, 'name'=> 'Beverages', 'image'=> 'beverages.webp', 'slug'=> 'beverages' ],

            //2.category = Hygiene

            //3. category = Home & Kitchen
            [ 'category_id'=> 3, 'name'=> 'Busket & Bucket', 'image'=> 'busket-bucket.webp', 'slug'=> 'busket-bucket' ],
            [ 'category_id'=> 3, 'name'=> 'Box & Container', 'image'=> 'box-container.webp', 'slug'=> 'box-container' ],
            [ 'category_id'=> 3, 'name'=> 'Kitchen Accessories', 'image'=> 'kitchen-accessories.webp', 'slug'=> 'kitchen-accessories' ],

            //4.category = Baby Care
            [ 'category_id'=> 4, 'name'=> 'Newborn Essentials', 'image'=> 'newborn-essentials.webp', 'slug'=> 'newborn-essentials' ],
            [ 'category_id'=> 4, 'name'=> 'Feeders', 'image'=> 'feeders.webp', 'slug'=> 'feeders' ],
            [ 'category_id'=> 4, 'name'=> 'Fooding', 'image'=> 'fooding.webp', 'slug'=> 'fooding' ],
            [ 'category_id'=> 4, 'name'=> 'Bath and Skin Care', 'image'=> 'bath-skincare.webp', 'slug'=> 'bath-skin-care' ],

            //5.category = Pet care
            [ 'category_id'=> 5, 'name'=> 'Cat Food', 'image'=> 'cat-food.webp', 'slug'=> 'cat-food' ],
            [ 'category_id'=> 5, 'name'=> 'Dog Food', 'image'=> 'dog-food.webp', 'slug'=> 'dog-food' ],
            [ 'category_id'=> 5, 'name'=> 'Other Pet Foods', 'image'=> 'other-pet-foods.webp', 'slug'=> 'other-pet-foods' ],
            [ 'category_id'=> 5, 'name'=> 'Grooming and Cleaning', 'image'=> 'grooming-cleaning.webp', 'slug'=> 'grooming-cleaning' ],

            //6.category = Sports & Fitness
            [ 'category_id'=> 6, 'name'=> 'Cricket', 'image'=> 'cricket.webp', 'slug'=> 'cricket' ],
            [ 'category_id'=> 6, 'name'=> 'Badminton', 'image'=> 'badminton.webp', 'slug'=> 'badminton' ],
            [ 'category_id'=> 6, 'name'=> 'Football', 'image'=> 'football.webp', 'slug'=> 'football' ],
            [ 'category_id'=> 6, 'name'=> 'Exercise & Fitness', 'image'=> 'exercise-fitness.webp', 'slug'=> 'exercise-fitness' ],

            //7.category = Toys & Fun
            [ 'category_id'=> 7, 'name'=> 'Cars & Toys Vehicles', 'image'=> 'cars-toy-vehicles.webp', 'slug'=> 'cars-toys-vehicles' ],
            [ 'category_id'=> 7, 'name'=> 'Dolls', 'image'=> 'dolls.webp', 'slug'=> 'dolls' ],
            [ 'category_id'=> 7, 'name'=> 'Learning Toys', 'image'=> 'learning-toys.webp', 'slug'=> 'learning-toys' ],
            [ 'category_id'=> 7, 'name'=> 'Kid Books', 'image'=> 'kid-books.webp', 'slug'=> 'kid-books' ],
        ];

        \DB::table('subcategories')->insert($subcategories);
    }
}