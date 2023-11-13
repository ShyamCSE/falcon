<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $create = User::insert([
        'name' => "Admin",
        'email' => "admin@blogblum.com",
        'password' => Hash::make('Password@123')
       ]);

    }
}
