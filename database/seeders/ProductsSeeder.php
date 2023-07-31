<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::create([
            'name' => 'Headphones',
            'price' => 50,
            'description' => 'High-quality over-ear headphones with noise-cancellation feature'
        ]);
        Products::create([
            'name' => 'Smartphone',
            'price' => 1000,
            'description' => 'Brand new smartphone with a powerful processor and high-resolution display.'
        ]);
        Products::create([
            'name' => 'Laptop',
            'price' => '20000',
            'description' => 'Sleek and lightweight laptop for both work and entertainment purposes.'
        ]);
        Products::create([
            'name' => 'Bluetooth Speaker',
            'price' => 80,
            'description' => 'Portable speaker with wireless Bluetooth connectivity and rich sound quality.'
        ]);
        Products::create([
            'name' => 'Fitness Tracker',
            'price' => 200,
            'description' => 'Advanced fitness tracker with heart rate monitoring and GPS tracking.'
        ]);
    }
}
