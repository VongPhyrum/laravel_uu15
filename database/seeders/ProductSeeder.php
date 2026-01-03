<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Coca-Cola',
                'quantity' => 50,
                'price' => 1.00,
                'sku' => Str::uuid(),
                'description' => 'Refreshing carbonated soft drink.',
                'stock' => 50,
                'category_id' => 1, // Soft Drinks
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Pepsi',
                'quantity' => 40,
                'price' => 1.00,
                'sku' => Str::uuid(),
                'description' => 'Popular cola-flavored soft drink.',
                'stock' => 40,
                'category_id' => 1, // Soft Drinks
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Red Bull',
                'quantity' => 30,
                'price' => 1.50,
                'sku' => Str::uuid(),
                'description' => 'Energy drink that gives you wings.',
                'stock' => 30,
                'category_id' => 2, // Energy Drinks
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Sprite',
                'quantity' => 45,
                'price' => 1.00,
                'sku' => Str::uuid(),
                'description' => 'Lemon-lime flavored soft drink.',
                'stock' => 45,
                'category_id' => 1, // Soft Drinks
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Fanta Orange',
                'quantity' => 35,
                'price' => 1.00,
                'sku' => Str::uuid(),
                'description' => 'Orange-flavored carbonated soft drink.',
                'stock' => 35,
                'category_id' => 1, // Soft Drinks
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
