<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Category::create([
            'brand_name' => '14',
            'category_name' => 'Nuts',
        ]);

        Category::create([
            'category_name' => 'OIL',
        ]);

        Category::create([
            'category_name' => 'Noodles',
        ]);
        Category::create([
            'category_name' => 'Sugar',
        ]);
        Category::create([
            'category_name' => 'Chocolate',
        ]);
        Category::create([
            'category_name' => 'Cold Drink',
        ]);
        Category::create([
            'category_name' => 'KetchUp',
        ]);
        Category::create([
            'category_name' => 'Beautic',
        ]);
        Category::create([
            'category_name' => 'Chips',
        ]);
        Category::create([
            'category_name' => 'Salt',
        ]);
        Category::create([
            'category_name' => 'Wheat',
        ]);
        Category::create([
            'category_name' => 'Vegetable',
        ]);
    }
}
