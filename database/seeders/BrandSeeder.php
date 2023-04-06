<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'brand_name' => 'Freedom',
        ]);
        Brand::create([
            'brand_name' => 'Kissan',
        ]);
        Brand::create([
            'brand_name' => 'Surf Excel',
        ]);
        Brand::create([
            'brand_name' => 'Yipee',
        ]);
        Brand::create([
            'brand_name' => 'Aashirvad',
        ]);
        Brand::create([
            'brand_name' => 'ponds',
        ]);
        Brand::create([
            'brand_name' => 'Madhur',
        ]);
        Brand::create([
            'brand_name' => 'LAKME',
        ]);
        Brand::create([
            'brand_name' => 'Cadbury',
        ]);
        Brand::create([
            'brand_name' => 'CocaCola',
        ]);
        Brand::create([
            'brand_name' => 'Lays',
        ]);
        Brand::create([
            'brand_name' => 'Bingo',
        ]);
        Brand::create([
            'brand_name' => 'tata',
        ]);
        Brand::create([
            'brand_name' => 'Gujarat Dry Fruit',
        ]);
    }
}
