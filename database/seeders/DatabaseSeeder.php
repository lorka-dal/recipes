<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\Recipe::create([
             'name' => 'Небесные облака из безе',
             'image' => '',
             'ingredients' => '',
             'recipe' => '',
             'created_at' => now(),
             'updated_at' => now()
         ]);
        \App\Models\Recipe::create([
            'name' => 'Шоколадный взрыв с карамельным центром',
            'image' => '',
            'ingredients' => '',
            'recipe' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \App\Models\Recipe::create([
            'name' => 'Ягодный соблазн в хрустящем тесте',
            'image' => '',
            'ingredients' => '',
            'recipe' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
