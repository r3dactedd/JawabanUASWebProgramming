<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => '1',
            'gender_id' => '1',
            'firstname' => 'Sumawira',
            'lastname' => 'Wijanata',
            'email' => 'suma@gmail.com',
            'password' => bcrypt('admin123'),
            'profile_img' => 'storage/images/suma.jpg'
        ]);

        User::create([
            'role_id' => '2',
            'gender_id' => '2',
            'firstname' => 'Milena',
            'lastname' => 'V.',
            'email' => 'milv@gmail.com',
            'password' => bcrypt('member123'),
            'profile_img' => 'storage/images/milv.jpg'

        ]);
    }
}
