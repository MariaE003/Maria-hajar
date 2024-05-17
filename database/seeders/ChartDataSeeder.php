<?php

namespace Database\Seeders;

use App\Models\ChartData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChartDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ChartData::create(['label' => 'Category A', 'value' => 10]);
        ChartData::create(['label' => 'Category B', 'value' => 20]);
        ChartData::create(['label' => 'Category C', 'value' => 30]);
    }
}
