<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ComputersTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('computers')->insert([
                'computer_name' => $faker->word() . ' PC',
                'model' => $faker->regexify('[A-Za-z0-9]{5,10}'), 
                'operating_system' => $faker->randomElement(['Windows 10', 'Windows 11', 'macOS Monterey', 'Ubuntu 20.04']), // Hệ điều hành
                'processor' => $faker->randomElement(['Intel i5', 'Intel i7', 'AMD Ryzen 5', 'AMD Ryzen 7']), // Bộ xử lý
                'memory' => $faker->numberBetween(4, 64), 
                'available'=>$faker->boolean(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
