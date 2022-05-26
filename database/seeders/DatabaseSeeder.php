<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Section;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(10)->create();
        $sections = ["user", 'admin', ];
        foreach ($sections as $section){
            Section::create(['name' => $section]);
        }
        foreach (Product::all() as $product){
            foreach (Section::all() as $section){
                $product->section()->attach($section->id);
            }
        }
    }
}
