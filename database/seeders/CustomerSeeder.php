<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'id' => 1,
                'name' => 'John Doe',
                'address' => '123 Main St',
                'city' => 'New York',
                'country' => 'USA',
                'phone' => '123-456-7890',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'Jane Smith',
                'address' => '456 Elm St',
                'city' => 'Los Angeles',
                'country' => 'USA',
                'phone' => '987-654-3210',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'name' => 'Michael Johnson',
                'address' => '789 Oak St',
                'city' => 'Chicago',
                'country' => 'USA',
                'phone' => '555-123-4567',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'name' => 'Emily Davis',
                'address' => '321 Maple Ave',
                'city' => 'Houston',
                'country' => 'USA',
                'phone' => '444-987-6543',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'name' => 'David Martinez',
                'address' => '654 Pine St',
                'city' => 'San Francisco',
                'country' => 'USA',
                'phone' => '333-555-9999',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
