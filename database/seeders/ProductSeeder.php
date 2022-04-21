<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            //food
            //fruits and vegetables
            ['category_id' => 1, 'subcategory_id' => 1, 'name'=> 'Coconut', 'slug' => 'coconut', 'description'=> '', 'image'=> 'coconut.webp', 'discount'=> '2', 'price'=> '200', 'amount'=> '1 kg', 'qty'=> '0', 'type'=> 'new'],
            ['category_id' => 1, 'subcategory_id' => 1, 'name'=> 'Orange', 'slug' => 'orange', 'description'=> '', 'image'=> 'orange.webp', 'discount'=> '5', 'price'=> '400', 'amount'=> '1 kg', 'qty'=> '0', 'type'=> 'offer'],
            ['category_id' => 1, 'subcategory_id' => 1, 'name'=> 'Apple', 'slug' => 'apple', 'description'=> '', 'image'=> 'apple.webp', 'discount'=> '3', 'price'=> '100', 'amount'=> '1 kg','qty'=> '0', 'type'=> 'offer'],
            ['category_id' => 1, 'subcategory_id' => 1, 'name'=> 'Banana', 'slug' => 'banana', 'description'=> '', 'image'=> 'banana.webp', 'discount'=> '4', 'price'=> '200', 'amount'=> '2 hali', 'qty'=> '0', 'type'=> 'hot'],
            ['category_id' => 1, 'subcategory_id' => 1, 'name'=> 'Brinjal', 'slug' => 'brinjal', 'description'=> '', 'image'=> 'brinjal.webp', 'discount'=> '3', 'price'=> '30', 'amount'=> '1 kg', 'qty'=> '0', 'type'=> 'sale'],
            ['category_id' => 1, 'subcategory_id' => 1, 'name'=> 'Lemon', 'slug' => 'lemon', 'description'=> '', 'image'=> 'lemon.webp', 'discount'=> '3', 'price'=> '20', 'amount'=> '1 hali', 'qty'=> '0', 'type'=> 'sale'],

            //meat and fish
            ['category_id' => 1, 'subcategory_id' => 2, 'name'=> 'Koi Fish', 'slug' => 'koi-fish', 'description'=> '', 'image'=> 'koi-fish.webp', 'discount'=> '4', 'price'=> '400', 'amount'=> '1 kg', 'qty'=> '0', 'type'=> 'new'],
            ['category_id' => 1, 'subcategory_id' => 2, 'name'=> 'Telapiya Fish', 'slug' => 'telapiya-fish', 'description'=> '', 'image'=> 'telapiye-fish.webp', 'discount'=> '3', 'price'=> '200', 'amount'=> '1 kg', 'qty'=> '0', 'type'=> 'offer'],
            ['category_id' => 1, 'subcategory_id' => 2, 'name'=> 'Mola Fish', 'slug' => 'mola-fish', 'description'=> '', 'image'=> 'mola-fish.webp', 'discount'=> '10', 'price'=> '500', 'amount'=> '1 kg', 'qty'=> '0', 'type'=> 'sale'],
            ['category_id' => 1, 'subcategory_id' => 2, 'name'=> 'Chicken', 'slug' => 'chicken', 'description'=> '', 'image'=> 'chicken.webp', 'discount'=> '5', 'price'=> '200', 'amount'=> '1 kg', 'qty'=> '0', 'type'=> 'hot'],
            ['category_id' => 1, 'subcategory_id' => 2, 'name'=> 'Mutton', 'slug' => 'mutton', 'description'=> '', 'image'=> 'mutton.webp', 'discount'=> '4', 'price'=> '750', 'amount'=> '1 kg', 'qty'=> '0', 'type'=> 'hot'],

            //cooking
            ['category_id' => 1, 'subcategory_id' => 3, 'name'=> 'Rice', 'slug' => 'rice', 'description'=> '', 'image'=> 'rice.webp', 'discount'=> '3', 'price'=> '1700', 'amount'=> '50 kg','qty'=> '0', 'type'=> 'offer'],
            ['category_id' => 1, 'subcategory_id' => 3, 'name'=> 'Oil', 'slug' => 'oil', 'description'=> '', 'image'=> 'oil.webp', 'discount'=> '4', 'price'=> '200', 'amount'=> '2 liter', 'qty'=> '0', 'type'=> 'hot'],
            ['category_id' => 1, 'subcategory_id' => 3, 'name'=> 'Ghee', 'slug' => 'ghee', 'description'=> '', 'image'=> 'ghee.webp', 'discount'=> '3', 'price'=> '150', 'amount'=> '100 gram', 'qty'=> '0', 'type'=> 'sale'],
            ['category_id' => 1, 'subcategory_id' => 3, 'name'=> 'Salt', 'slug' => 'salt', 'description'=> '', 'image'=> 'salt.webp', 'discount'=> '4', 'price'=> '20', 'amount'=> '1 kg', 'qty'=> '0', 'type'=> 'new'],
            ['category_id' => 1, 'subcategory_id' => 3, 'name'=> 'Mosur Dal', 'slug' => 'mosur-dal', 'description'=> '', 'image'=> 'dal.webp', 'discount'=> '3', 'price'=> '50', 'amount'=> '1 kg', 'qty'=> '0', 'type'=> 'offer'],
            ['category_id' => 4, 'subcategory_id' => 1, 'name'=> 'Egg', 'slug' => 'egg', 'description'=> '', 'image'=> 'eggs.webp', 'discount'=> '4', 'price'=> '300', 'amount'=> '1 hali', 'qty'=> '0', 'type'=> 'hot'],

            //baking
            ['category_id' => 1, 'subcategory_id' => 4, 'name'=> 'Cocoa Powder', 'slug' => 'cocoa-powder', 'description'=> '', 'image'=> 'cocoa-powder.webp', 'discount'=> '10', 'price'=> '200', 'amount'=> '500 gram', 'qty'=> '0', 'type'=> 'sale'],
            ['category_id' => 1, 'subcategory_id' => 4, 'name'=> 'Custard Powder', 'slug' => 'custard-powder', 'description'=> '', 'image'=> 'custard-powder.webp', 'discount'=> '5', 'price'=> '100', 'amount'=> '500 gm', 'qty'=> '0', 'type'=> 'hot'],
            ['category_id' => 1, 'subcategory_id' => 4, 'name'=> 'Saffron', 'slug' => 'saffron', 'description'=> '', 'image'=> 'saffron.webp', 'discount'=> '2', 'price'=> '200', 'amount'=> '500 gram', 'qty'=> '0', 'type'=> 'new'],
            ['category_id' => 1, 'subcategory_id' => 4, 'name'=> 'Baking Soda', 'slug' => 'baking-soda', 'description'=> '', 'image'=> 'baking-soda.webp', 'discount'=> '4', 'price'=> '200', 'amount'=> '500 gram', 'qty'=> '0', 'type'=> 'hot'],
            ['category_id' => 1, 'subcategory_id' => 4, 'name'=> 'Condensed Milk', 'slug' => 'condensed-milk', 'description'=> '', 'image'=> 'condensed-milk.webp', 'discount'=> '5', 'price'=> '40', 'amount'=> '250 gram', 'qty'=> '0', 'type'=> 'offer'],

            //beverages
            ['category_id' => 1, 'subcategory_id' => 5, 'name'=> 'Tea', 'slug' => 'tea', 'description'=> '', 'image'=> 'tea.webp', 'discount'=> '3', 'price'=> '400', 'amount'=> '500 gram','qty'=> '0', 'type'=> 'offer'],
            ['category_id' => 1, 'subcategory_id' => 5, 'name'=> 'Coffee', 'slug' => 'coffee', 'description'=> '', 'image'=> 'coffee.webp', 'discount'=> '4', 'price'=> '700', 'amount'=> '500 gram', 'qty'=> '0', 'type'=> 'hot'],
            ['category_id' => 1, 'subcategory_id' => 5, 'name'=> 'Frutica Mango Juice', 'slug' => 'frutica-mango-juice', 'description'=> '', 'image'=> 'frutica-mango-juice.webp', 'discount'=> '3', 'price'=> '60', 'amount'=> '1  liter', 'qty'=> '0', 'type'=> 'sale'],
            ['category_id' => 1, 'subcategory_id' => 5, 'name'=> 'Sprite', 'slug' => 'sprite', 'description'=> '', 'image'=> 'sprite.webp', 'discount'=> '4', 'price'=> '100', 'amount'=> '2 liter', 'qty'=> '0', 'type'=> 'new'],

            //hygiene
            ['category_id' => 2, 'subcategory_id' => null, 'name'=> 'Hexisol', 'slug' => 'hexisol', 'description'=> '', 'image'=> 'hexisol.webp', 'discount'=> '10', 'price'=> '50', 'amount'=> '250 gram', 'qty'=> '0', 'type'=> 'sale'],
            ['category_id' => 2, 'subcategory_id' => null, 'name'=> 'Savlon', 'slug' => 'savlon', 'description'=> '', 'image'=> 'savlon.webp', 'discount'=> '5', 'price'=> '100', 'amount'=> '250 gram', 'qty'=> '0', 'type'=> 'hot'],
            ['category_id' => 2, 'subcategory_id' => null, 'name'=> 'Dettol', 'slug' => 'dettol', 'description'=> '', 'image'=> 'dettol.webp', 'discount'=> '2', 'price'=> '100', 'amount'=> '250 gram', 'qty'=> '0', 'type'=> 'new'],
            ['category_id' => 2, 'subcategory_id' => null, 'name'=> 'Handwash', 'slug' => 'handwash', 'description'=> '', 'image'=> 'handwash.webp', 'discount'=> '4', 'price'=> '100', 'amount'=> '250 gram', 'qty'=> '0', 'type'=> 'hot'],
            ['category_id' => 2, 'subcategory_id' => null, 'name'=> 'Blue Mint', 'slug' => 'blue-mint', 'description'=> '', 'image'=> 'blue-mint.webp', 'discount'=> '5', 'price'=> '100', 'amount'=> '250 gram', 'qty'=> '0', 'type'=> 'offer'],

            //Home and kitchen
            //busket and bucket
            ['category_id' => 3, 'subcategory_id' => 6, 'name'=> 'Black Bucket', 'slug' => 'black-bucket', 'description'=> '', 'image'=> 'black-bucket.webp', 'discount'=> '10', 'price'=> '500', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'sale'],
            ['category_id' => 3, 'subcategory_id' => 6, 'name'=> 'Design Bowl', 'slug' => 'design-bowl', 'description'=> '', 'image'=> 'design-bowl.webp', 'discount'=> '5', 'price'=> '100', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'hot'],

            //box and container
            ['category_id' => 3, 'subcategory_id' => 7, 'name'=> 'Food Box', 'slug' => 'food-box', 'description'=> '', 'image'=> 'food-box.webp', 'discount'=> '2', 'price'=> '300', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'new'],
            ['category_id' => 3, 'subcategory_id' => 7, 'name'=> 'Container', 'slug' => 'container', 'description'=> '', 'image'=> 'container.webp', 'discount'=> '4', 'price'=> '150', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'hot'],
            ['category_id' => 3, 'subcategory_id' => 7, 'name'=> 'Tiffin Box', 'slug' => 'tiffin-box', 'description'=> '', 'image'=> 'tiffin-box.webp', 'discount'=> '5', 'price'=> '200', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'offer'],

            //kitchen accessories
            ['category_id' => 3, 'subcategory_id' => 8, 'name'=> 'Match Box', 'slug' => 'match-box', 'description'=> '', 'image'=> 'match-box.webp', 'discount'=> '2', 'price'=> '25', 'amount'=> '12 pcs', 'qty'=> '0', 'type'=> 'new'],
            ['category_id' => 3, 'subcategory_id' => 8, 'name'=> 'Brush', 'slug' => 'brush', 'description'=> '', 'image'=> 'brush.webp', 'discount'=> '4', 'price'=> '150', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'hot'],
            ['category_id' => 3, 'subcategory_id' => 8, 'name'=> 'Fry Pan', 'slug' => 'fry-pan', 'description'=> '', 'image'=> 'fry-pan.webp', 'discount'=> '5', 'price'=> '1200', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'offer'],
            ['category_id' => 3, 'subcategory_id' => 8, 'name'=> 'Pressure Cooker', 'slug' => 'pressure-cooker', 'description'=> '', 'image'=> 'pressure-cooker.webp', 'discount'=> '4', 'price'=> '1200', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'hot'],

            //baby care
            //newborn essentials
            ['category_id' => 4, 'subcategory_id' => 9, 'name'=> 'Baby Care', 'slug' => 'baby-care', 'description'=> '', 'image'=> 'baby-care.webp', 'discount'=> '3', 'price'=> '190', 'amount'=> '120 pcs','qty'=> '0', 'type'=> 'offer'],
            ['category_id' => 4, 'subcategory_id' => 9, 'name'=> 'Baby Diapers', 'slug' => 'baby-diapers', 'description'=> '', 'image'=> 'baby-diapers.webp', 'discount'=> '4', 'price'=> '1300', 'amount'=> '64 pcs', 'qty'=> '0', 'type'=> 'hot'],

            //feeders
            ['category_id' => 4, 'subcategory_id' => 10, 'name'=> 'Feeding Bottle', 'slug' => 'feeding-bottle', 'description'=> '', 'image'=> 'feeding-bootle.webp', 'discount'=> '3', 'price'=> '300', 'amount'=> '1 pcs', 'qty'=> '0', 'type'=> 'sale'],
            ['category_id' => 4, 'subcategory_id' => 10, 'name'=> 'Nipple', 'slug' => 'nipple', 'description'=> '', 'image'=> 'nipple.webp', 'discount'=> '4', 'price'=> '50', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'new'],

            //feeding
            ['category_id' => 4, 'subcategory_id' => 11, 'name'=> 'Horlicks', 'slug' => 'horlicks', 'description'=> '', 'image'=> 'horlicks.webp', 'discount'=> '3', 'price'=> '350', 'amount'=> '500 gram', 'qty'=> '0', 'type'=> 'offer'],
            ['category_id' => 4, 'subcategory_id' => 11, 'name'=> 'Formula Milk', 'slug' => 'formula-milk', 'description'=> '', 'image'=> 'formula-milk.webp', 'discount'=> '10', 'price'=> '450', 'amount'=> '350 gram', 'qty'=> '0', 'type'=> 'sale'],
            ['category_id' => 4, 'subcategory_id' => 11, 'name'=> 'Ovaltine Powder', 'slug' => 'ovaltine-powder', 'description'=> '', 'image'=> 'ovaltine-powder.webp', 'discount'=> '5', 'price'=> '500', 'amount'=> '400 gm', 'qty'=> '0', 'type'=> 'hot'],

            //bath and skin care
            ['category_id' => 4, 'subcategory_id' => 12, 'name'=> 'Baby Shampoo', 'slug' => 'baby-shampoo', 'description'=> '', 'image'=> 'baby-shampoo.webp', 'discount'=> '2', 'price'=> '230', 'amount'=> '200 ml', 'qty'=> '0', 'type'=> 'new'],
            ['category_id' => 4, 'subcategory_id' => 12, 'name'=> 'Baby Oil', 'slug' => 'baby-oil', 'description'=> '', 'image'=> 'baby-oil.webp', 'discount'=> '4', 'price'=> '180', 'amount'=> '100 ml', 'qty'=> '0', 'type'=> 'hot'],
            ['category_id' => 4, 'subcategory_id' => 12, 'name'=> 'Baby Lotion', 'slug' => 'baby-lotion', 'description'=> '', 'image'=> 'baby-oil.webp', 'discount'=> '5', 'price'=> '230', 'amount'=> '200 ml', 'qty'=> '0', 'type'=> 'offer'],

            //pet care
            //cat
            ['category_id' => 5, 'subcategory_id' => 13, 'name'=> 'Cat Food(chicken)', 'slug' => 'cat-food-chicken', 'description'=> '', 'image'=> 'cat-food-chicken.webp', 'discount'=> '3', 'price'=> '150', 'amount'=> '500 gram','qty'=> '0', 'type'=> 'offer'],
            ['category_id' => 5, 'subcategory_id' => 13, 'name'=> 'Cat Food(tuna)', 'slug' => 'cat-food-tuna', 'description'=> '', 'image'=> 'cat-food-tuna.webp', 'discount'=> '4', 'price'=> '200', 'amount'=> '250 gram', 'qty'=> '0', 'type'=> 'hot'],

            //dog
            ['category_id' => 5, 'subcategory_id' => 14, 'name'=> 'Dog Food(chicken)', 'slug' => 'dog-food-chicken', 'description'=> '', 'image'=> 'dog-food-chicken.webp', 'discount'=> '3', 'price'=> '200', 'amount'=> '1 kg', 'qty'=> '0', 'type'=> 'sale'],
            ['category_id' => 5, 'subcategory_id' => 14, 'name'=> 'Dog Food(tuna)', 'slug' => 'dog-food-tuna', 'description'=> '', 'image'=> 'dog-food-tuna.webp', 'discount'=> '4', 'price'=> '400', 'amount'=> '1 kg', 'qty'=> '0', 'type'=> 'new'],

            //other
            ['category_id' => 5, 'subcategory_id' => 15, 'name'=> 'Rabbit Food', 'slug' => 'rabbit-food', 'description'=> '', 'image'=> 'rabbit-food.webp', 'discount'=> '3', 'price'=> '400', 'amount'=> '1 kg', 'qty'=> '0', 'type'=> 'offer'],
            ['category_id' => 5, 'subcategory_id' => 15, 'name'=> 'Bird Food', 'slug' => 'bird-food', 'description'=> '', 'image'=> 'bird-food.webp', 'discount'=> '10', 'price'=> '300', 'amount'=> '1 kg', 'qty'=> '0', 'type'=> 'sale'],

            //grooming
            ['category_id' => 5, 'subcategory_id' => 16, 'name'=> 'Oral Gel', 'slug' => 'oral-gel', 'description'=> '', 'image'=> 'oral-gel.webp', 'discount'=> '3', 'price'=> '100', 'amount'=> '50 gram', 'qty'=> '0', 'type'=> 'offer'],
            ['category_id' => 5, 'subcategory_id' => 16, 'name'=> 'Shampoo', 'slug' => 'shampoo', 'description'=> '', 'image'=> 'shampoo.webp', 'discount'=> '10', 'price'=> '300', 'amount'=> '500 gram', 'qty'=> '0', 'type'=> 'sale'],


            //sports and fitness
            //cricket
            ['category_id' => 6, 'subcategory_id' => 17, 'name'=> 'Bat', 'slug' => 'bat', 'description'=> '', 'image'=> 'bat.webp', 'discount'=> '5', 'price'=> '1500', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'hot'],
            ['category_id' => 6, 'subcategory_id' => 17, 'name'=> 'Jersy', 'slug' => 'jersy', 'description'=> '', 'image'=> 'jersy.webp', 'discount'=> '2', 'price'=> '400', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'new'],
            ['category_id' => 6, 'subcategory_id' => 17, 'name'=> 'Ball', 'slug' => 'ball', 'description'=> '', 'image'=> 'ball.webp', 'discount'=> '4', 'price'=> '60', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'hot'],

            //badminton
            ['category_id' => 6, 'subcategory_id' => 18, 'name'=> 'Racket', 'slug' => 'racket', 'description'=> '', 'image'=> 'orange.webp', 'discount'=> '5', 'price'=> '500', 'amount'=> '1 kg', 'qty'=> '0', 'type'=> 'offer'],
            ['category_id' => 6, 'subcategory_id' => 18, 'name'=> 'Shuttlecock', 'slug' => 'shuttercock', 'description'=> '', 'image'=> 'apple.webp', 'discount'=> '3', 'price'=> '300', 'amount'=> '1 kg','qty'=> '0', 'type'=> 'offer'],

            //football
            ['category_id' => 6, 'subcategory_id' => 19, 'name'=> 'Foot Ball', 'slug' => 'foot-ball', 'description'=> '', 'image'=> 'foot-ball.webp', 'discount'=> '4', 'price'=> '200', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'hot'],

            //fitness
            ['category_id' => 6, 'subcategory_id' => 20, 'name'=> 'Trademill', 'slug' => 'trademill', 'description'=> '', 'image'=> 'trademill.webp', 'discount'=> '5', 'price'=> '4000', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'offer'],
            ['category_id' => 6, 'subcategory_id' => 20, 'name'=> 'Weight Lifter', 'slug' => 'weight-lifter', 'description'=> '', 'image'=> 'weight-lifter.webp', 'discount'=> '5', 'price'=> '1500', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'offer'],

            //toys and fun
            ['category_id' => 7, 'subcategory_id' => 21, 'name'=> 'Yellow Car', 'slug' => 'yellow-car', 'description'=> '', 'image'=> 'yellow-car.webp', 'discount'=> '3', 'price'=> '400', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'offer'],

            ['category_id' => 7, 'subcategory_id' => 22, 'name'=> 'Angel Girl', 'slug' => 'angel-girl', 'description'=> '', 'image'=> 'angel-girl.webp', 'discount'=> '10', 'price'=> '500', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'sale'],

            ['category_id' => 7, 'subcategory_id' => 23, 'name'=> 'Rubics Cube', 'slug' => 'rubics-cube', 'description'=> '', 'image'=> 'rubics-cube.webp', 'discount'=> '5', 'price'=> '1000', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'hot'],

            ['category_id' => 7, 'subcategory_id' => 24, 'name'=> 'Zoo Book', 'slug' => 'zoo-book', 'description'=> '', 'image'=> 'zoo-book.webp', 'discount'=> '2', 'price'=> '400', 'amount'=> 'each', 'qty'=> '0', 'type'=> 'new'],
        ];
        \DB::table('products')->insert($products);
    }
}