<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create(['nombre' => 'Galaxy S21', 'precio' => 800, 'marca_id' => 1]);
        Producto::create(['nombre' => 'iPhone 13', 'precio' => 1000, 'marca_id' => 2]);
        Producto::create(['nombre' => 'P30 Pro', 'precio' => 700, 'marca_id' => 3]);
    }
}
