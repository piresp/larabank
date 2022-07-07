<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Gabriel',
            'phone_number' => '11986165606',
            'address' => 'Rua dos bobos, 0',
            'is_active' => 1,
            'password' => bcrypt('5151'),
            'email' => 'gabriel@email.com'
        ]);
    }
}
