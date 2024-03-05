<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Food', 'Travel', 'Financial', 'Fashion'];
        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }
}
