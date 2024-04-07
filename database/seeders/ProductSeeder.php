<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate products for each category
        foreach (Category::all() as $category) {
            $products = Product::factory()
                ->count(10)
                ->create([
                    'category_id' => $category->id,
                ]);

            $stores = Store::all();
            foreach ($products as $product) {
                $store = $stores->random();
                $status = $category->name === 'Deleted' ? 'deleted' : 'available';
                $notes = rand(0, 1) ? null : 'fake';

                $product->stores()->attach($store->id, [
                    'stock' => rand(0, 100),
                    'status' => $status,
                    'notes' => $notes,
                ]);
            }
        }
    }
}
