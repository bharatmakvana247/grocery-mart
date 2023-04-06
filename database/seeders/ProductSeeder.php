<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Product::create([
            'product_name' => 'Almonds 100g',
            'product_details' => 'Best for Biryani and Pulao.
            After cooking, Zeeba Basmati rice grains attain an extra ordinary length of upto 2.4 cm/~1 inch.
            Zeeba Basmati rice adheres to the highest food afety standards as your health is paramount to us.
            Contains only the best and purest grade of basmati rice grain of Export quality.',
            'category_name' => '1',
            'brand_id' => '14',
            'product_price' => '249',
            'product_qty' => '1',
            'product_image' => 'almonds.jpg',
        ]);
    }
}
