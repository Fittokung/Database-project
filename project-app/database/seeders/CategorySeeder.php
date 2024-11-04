<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert category data with timestamps
        DB::table('categories')->insert([
            [
                'name' => 'Coffee',
                'id' => 1

            ],
            [
                'name' => 'Tea',
                'id' => 2

            ],
            [
                'name' => 'Juice',
                'id' => 3

            ],
            [
                'name' => 'Coffee beans',
                'id' => 4

            ],

        ]);
    }
}