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
         // User John Doe
        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@email.com',
            'password' => bcrypt('123456'),
        ]);

        // User Matheus Der
        User::create([
            'name' => 'Matheus Der',
            'email' => 'matheusder@email.com',
            'password' => bcrypt('654321'),
        ]);

        // User Thiago Mota
        User::create([
            'name' => 'Thiago Mota',
            'email' => 'thiagomotaita1@gmail.com',
            'password' => bcrypt('qwer1234'),
        ]);

    }
}
