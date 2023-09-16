<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Khulna',
                'country_id' => '1',
            ],
            [
                'name' => 'Jeshore',
                'country_id' => '1',
            ],
            [
                'name' => 'Dhaka',
                'country_id' => '1',
            ],
            [
                'name' => 'Sylhet',
                'country_id' => '1',
            ],
            [
                'name' => 'Kolkata',
                'country_id' => '2',
            ],
            [
                'name' => 'Mumbai',
                'country_id' => '2',
            ],
         
        ];

        DB::table('districts')->insert($data);
    }
}
