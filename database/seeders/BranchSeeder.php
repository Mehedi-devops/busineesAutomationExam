<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Khulna',
                'bank_id' => 1,
                'code' => '0011'
            ],
            [
                'name' => 'Dhaka',
                'bank_id' => 1,
                'code' => '0022'
            ],
            [
                'name' => 'Rajshahi',
                'bank_id' => 1,
                'code' => '0033'
            ],
            [
                'name' => 'Rajshahi',
                'bank_id' => 2,
                'code' => '1111'
            ],
            [
                'name' => 'Satkhira',
                'bank_id' => 2,
                'code' => '1122'
            ],
            [
                'name' => 'Banani',
                'bank_id' => 2,
                'code' => '1133'
            ],
            [
                'name' => 'Khulna',
                'bank_id' => 3,
                'code' => '2200'
            ],
            [
                'name' => 'Dhaka',
                'bank_id' => 3,
                'code' => '2211'
            ],
            
        ];

        DB::table('branches')->insert($data);
    }
}
