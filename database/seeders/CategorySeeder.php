<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $category = ['Phone', 'Laptop', 'Shoe', 'Shirt', 'Toy'];
        $category_mm = ['ဖုန်း', 'လက်တော့ပ်', 'ဖိနပ်', 'အင်္ကျီ', 'အရုပ်'];
        $images = ['phone.webp', 'laptop.webp', 'shoe.avif', 'shirt.webp', 'toy.jpg'];

        foreach ($category as $key => $c) {
            Category::create([
                'name_mm' => $category_mm[$key], // Use corresponding Myanmar name
                'name_en' => $c,
                'image' => $images[$key],
            ]);
        }
    }
}
