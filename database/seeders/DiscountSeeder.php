<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Discount::create([
            'name' => 'Welcome Selera Rasa Kitchen',
            'description' => 'Member Selera Rasa Kitchen',
            'type' => 'percentage',
            'value' => 20,
            'status' => 'active',
            'expired_date' => '2025-03-31'
        ]);

        \App\Models\Discount::create([
            'name' => 'Ramadhan',
            'description' => 'Discount Ramadhan',
            'type' => 'percentage',
            'value' => 10,
            'status' => 'active',
            'expired_date' => '2025-03-07'
        ]);


    }
}
