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
            'name' =>"Saravana Sai",
            'phonenumber' => '123456789',
            'password' => Hash::make('password'),
        ]);


        User::factory()->count(5)->create();
    }
}
