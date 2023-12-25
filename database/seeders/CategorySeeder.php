<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Technology'
        ]);
        Category::create([
            'name' => 'Politics'
        ]);
        Category::create([
            'name' => 'Spiritual'
        ]);
        Category::create([
            'name' => 'Work'
        ]);
    }
}
