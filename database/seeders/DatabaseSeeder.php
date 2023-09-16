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
        $this->call([
            BankSeeder::class,
            BranchSeeder::class,
            CountrySeeder::class,
            BusinessSeeder::class,
            DistrictSeeder::class,
            SubCategorySeeder::class,
            ThanaSeeder::class,
        ]);
    }
}
