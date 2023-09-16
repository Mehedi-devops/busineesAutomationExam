<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Business 1',
                'business_id' => '1',
            ],
            [
                'name' => 'Business 2',
                'business_id' => '1',
            ],
            [
                'name' => 'power 1',
                'business_id' => '2',
            ],
            [
                'name' => 'power 2',
                'business_id' => '2',
            ],
            [
                'name' => 'power 3',
                'business_id' => '2',
            ],
         
        ];

        DB::table('sub_categories')->insert($data);
    }
}
