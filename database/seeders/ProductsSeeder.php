<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            for ($i = 1; $i <= 2; $i++) {
                DB::table('products')->insert([
                    'name' => "Product {$i} of {$category->name}",
                    'description' => "Description for product {$i} in category {$category->name}",
                    'price' => rand(10, 100),
                    'category_id' => $category->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
