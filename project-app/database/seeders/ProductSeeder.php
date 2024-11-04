<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_id' => 1,
                'name' => 'Espresso',
                'price' => 60,
                'stock_quantity' => 50,
                'category_id' => 1,
            ],
            [
                'product_id' => 2,
                'name' => 'Latte',
                'price' => 80,
                'stock_quantity' => 40,
                'category_id' => 1,
            ],
            [
                'product_id' => 3,
                'name' => 'Cappuccino',
                'price' => 80,
                'stock_quantity' => 45,
                'category_id' => 1,
            ],
            [
                'product_id' => 4,
                'name' => 'Americano',
                'price' => 50,
                'stock_quantity' => 45,
                'category_id' => 1,
            ],
            [
                'product_id' => 5,
                'name' => 'Mocha',
                'price' => 80,
                'stock_quantity' => 45,
                'category_id' => 1,
            ],
            [
                'product_id' => 6,
                'name' => 'Macchiato',
                'price' => 50,
                'stock_quantity' => 45,
                'category_id' => 1,
            ],
            [
                'product_id' => 7,
                'name' => 'Dirty',
                'price' => 80,
                'stock_quantity' => 30,
                'category_id' => 1,
            ],
            [
                'product_id' => 8,
                'name' => 'Vietnamese',
                'price' => 75,
                'stock_quantity' => 35,
                'category_id' => 1,
            ],
            [
                'product_id' => 9,
                'name' => 'Egg Coffee',
                'price' => 65,
                'stock_quantity' => 25,
                'category_id' => 1,
            ],
            [
                'product_id' => 10,
                'name' => 'Flat white',
                'price' => 65,
                'stock_quantity' => 25,
                'category_id' => 1,
            ],
            [
                'product_id' => 11,
                'name' => 'Affogato',
                'price' => 65,
                'stock_quantity' => 25,
                'category_id' => 1,
            ],
            [
                'product_id' => 12,
                'name' => 'Cafe au Lait',
                'price' => 65,
                'stock_quantity' => 25,
                'category_id' => 1,
            ],
            [
                'product_id' => 13,
                'name' => 'Bubble Tea',
                'price' => 45,
                'stock_quantity' => 25,
                'category_id' => 2,
            ],
            [
                'product_id' => 14,
                'name' => 'Thai Tea',
                'price' => 45,
                'stock_quantity' => 25,
                'category_id' => 2,
            ],
            [
                'product_id' => 15,
                'name' => 'Green Tea',
                'price' => 45,
                'stock_quantity' => 25,
                'category_id' => 2,
            ],
            [
                'product_id' => 16,
                'name' => 'Matcha',
                'price' => 45,
                'stock_quantity' => 25,
                'category_id' => 2,
            ],
            [
                'product_id' => 17,
                'name' => 'Black Tea',
                'price' => 25,
                'stock_quantity' => 25,
                'category_id' => 2,
            ],
            [
                'product_id' => 18,
                'name' => 'Strawberry Tea',
                'price' => 35,
                'stock_quantity' => 25,
                'category_id' => 2,
            ],
            [
                'product_id' => 19,
                'name' => 'Lemonade Tea',
                'price' => 20,
                'stock_quantity' => 25,
                'category_id' => 2,
            ],
            [
                'product_id' => 20,
                'name' => 'Lipton Tea',
                'price' => 35,
                'stock_quantity' => 25,
                'category_id' => 2,
            ],
            [
                'product_id' => 21,
                'name' => 'Cherry Tea',
                'price' => 50,
                'stock_quantity' => 25,
                'category_id' => 2,
            ],
            [
                'product_id' => 22,
                'name' => 'Mixed Berry Tea',
                'price' => 40,
                'stock_quantity' => 25,
                'category_id' => 2,
            ],
            [
                'product_id' => 23,
                'name' => 'Watermelon Tea',
                'price' => 40,
                'stock_quantity' => 25,
                'category_id' => 2,
            ],
            [
                'product_id' => 24,
                'name' => 'Rose Tea',
                'price' => 50,
                'stock_quantity' => 25,
                'category_id' => 2,
            ],

            //Fruit
            [
                'product_id' => 25,
                'name' => 'Watermelon',
                'price' => 30,
                'stock_quantity' => 25,
                'category_id' => 3,
            ],
            [
                'product_id' => 26,
                'name' => 'Orange',
                'price' => 30,
                'stock_quantity' => 25,
                'category_id' => 3,
            ],
            [
                'product_id' => 27,
                'name' => 'Carrot',
                'price' => 30,
                'stock_quantity' => 25,
                'category_id' => 3,
            ],
            [
                'product_id' => 28,
                'name' => 'Coconut',
                'price' => 30,
                'stock_quantity' => 25,
                'category_id' => 3,
            ],
            [
                'product_id' => 29,
                'name' => 'Guava',
                'price' => 30,
                'stock_quantity' => 25,
                'category_id' => 3,
            ],
            [
                'product_id' => 30,
                'name' => 'Kiwi',
                'price' => 35,
                'stock_quantity' => 25,
                'category_id' => 3,
            ],
            [
                'product_id' => 31,
                'name' => 'Lemon juice',
                'price' => 25,
                'stock_quantity' => 25,
                'category_id' => 3,
            ],
            [
                'product_id' => 32,
                'name' => 'Mango',
                'price' => 30,
                'stock_quantity' => 25,
                'category_id' => 3,
            ],
            [
                'product_id' => 33,
                'name' => 'Papaya',
                'price' => 30,
                'stock_quantity' => 25,
                'category_id' => 3,
            ],
            [
                'product_id' => 34,
                'name' => 'Pineapple',
                'price' => 30,
                'stock_quantity' => 25,
                'category_id' => 3,
            ],
            [
                'product_id' => 35,
                'name' => 'Strawberry',
                'price' => 30,
                'stock_quantity' => 25,
                'category_id' => 3,
            ],
            [
                'product_id' => 36,
                'name' => 'Passion fruit',
                'price' => 30,
                'stock_quantity' => 25,
                'category_id' => 3,
            ],

            //Coffe bean
            [
                'product_id' => 37,
                'name' => 'Arabica',
                'price' => 199,
                'stock_quantity' => 25,
                'category_id' => 4,
            ],
            [
                'product_id' => 38,
                'name' => 'Robusta',
                'price' => 199,
                'stock_quantity' => 25,
                'category_id' => 4,
            ],
            [
                'product_id' => 39,
                'name' => 'Liberica',
                'price' => 250,
                'stock_quantity' => 25,
                'category_id' => 4,
            ],
            [
                'product_id' => 40,
                'name' => 'Excelsa',
                'price' => 250,
                'stock_quantity' => 25,
                'category_id' => 4,
            ],
            [
                'product_id' => 41,
                'name' => 'Sumatra Mandheling',
                'price' => 299,
                'stock_quantity' => 25,
                'category_id' => 4,
            ],
            [
                'product_id' => 42,
                'name' => 'Colombian Supremo',
                'price' => 350,
                'stock_quantity' => 25,
                'category_id' => 4,
            ],
            [
                'product_id' => 43,
                'name' => 'Ethiopian Yirgacheffe',
                'price' => 350,
                'stock_quantity' => 25,
                'category_id' => 4,
            ],
            [
                'product_id' => 44,
                'name' => 'Guatemalan Antigua',
                'price' => 350,
                'stock_quantity' => 25,
                'category_id' => 4,
            ],
            [
                'product_id' => 45,
                'name' => 'Brazilian Santos',
                'price' => 400,
                'stock_quantity' => 25,
                'category_id' => 4,
            ],
            [
                'product_id' => 46,
                'name' => 'Costa Rican Tarrazú',
                'price' => 400,
                'stock_quantity' => 25,
                'category_id' => 4,
            ],
            [
                'product_id' => 47,
                'name' => 'Panama Geisha',
                'price' => 400,
                'stock_quantity' => 25,
                'category_id' => 4,
            ],
            [
                'product_id' => 48,
                'name' => 'Hawaiian Kona',
                'price' => 400,
                'stock_quantity' => 25,
                'category_id' => 4,
            ],
        ]);
    }
}