<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{

    public function run() : void
    {
       Product::insert([
            [
                'name' => 'Mobile Phone',
                'price' => 15000,
                'stock' => 50,
                'category_id' => 1,  // Electronics
            ],
            [
                'name' => 'T-Shirt',
                'price' => 500,
                'stock' => 100,
                'category_id' => 2,  // Fashion
            ],
        ]);
    }
}
