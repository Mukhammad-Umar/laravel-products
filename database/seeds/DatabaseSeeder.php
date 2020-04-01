<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
//use App\Models\Cart;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [
                'name' => 'Костюм "Лора"',
                'price' => '19.99',
                'image' => 'product_1.jpg',
                'top9' => 1,
            ]
        ); 
        Product::create(
            [
                'name' => 'Костюм "Кимоно"',
                'price' => '22.99',
                'image' => 'product_2.jpg',
                'top9' => 1,
            ]
        );  
        Product::create(
            [
                'name' => 'Блуза "Бриз"',
                'price' => '7.99',
                'image' => 'product_3.jpg',
                'top9' => 1,
            ]
        );                
    }
}
