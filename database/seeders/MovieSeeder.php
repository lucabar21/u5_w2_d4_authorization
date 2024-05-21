<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Movie::create([
                'title' => fake()->words(rand(3, 5), true),
                'description' => Str::random(50),
                'published_year' => fake()->date(),
            ]);
        }
        // DB::table('movies')->insert([
        //     'title' => fake()->words(rand(3, 5), true),
        //     'description' => Str::random(50),
        //     'published_year' => rand(1980, 2024),
        // ]);
    }
}
