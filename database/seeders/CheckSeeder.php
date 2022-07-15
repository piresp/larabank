<?php

namespace Database\Seeders;

use App\Models\Check;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CheckSeeder extends Seeder
{
    public function run()
    {
        Check::factory(10)->create();   
    }
}