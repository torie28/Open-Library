<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Religion;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Religion::insert([
            ['name' => 'Christianity'],
            ['name' => 'Islam'],
            ['name' => 'Hinduism'],
            ['name' => 'Buddhism'],
            ['name' => 'Other'],
        ]);
    }
}
