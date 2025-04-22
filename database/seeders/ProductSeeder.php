<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Product::create(['name' => 'Produk A', 'price' => 10000]);
        Product::create(['name' => 'Produk B', 'price' => 20000]);
    }

}
