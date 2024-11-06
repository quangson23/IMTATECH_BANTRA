<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 3; $i++) {
            DB::table('reviews')->insert([
                'star' => $faker->randomElement(['1', '2', '3', '4', '5']),
                'content' => $faker->text(),
                'user_id' => $faker->numberBetween(1, 2),
                'product_id' => $faker->numberBetween(1, 8),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
