<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ThanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Khulna',
                'district_id' => '1',
            ],
            [
                'name' => 'Satkhira',
                'district_id' => '1',
            ],
            [
                'name' => 'Ashashuni',
                'district_id' => '1',
            ],
            [
                'name' => 'Sorupkathi',
                'district_id' => '2',
            ],
            [
                'name' => 'Bagachra',
                'district_id' => '2',
            ],
         
        ];

        DB::table('thanas')->insert($data);
    }
}
