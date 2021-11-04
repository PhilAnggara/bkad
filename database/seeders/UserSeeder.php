<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'level' => 'Admin',
            'password' => Hash::make('Admin123')
        ]);
        
        User::create([
            'name' => 'Yonatan Sarese',
            'email' => 'yonatan@gmail.com',
            'level' => 'Admin',
            'password' => Hash::make('Admin123')
        ]);
    }
}
