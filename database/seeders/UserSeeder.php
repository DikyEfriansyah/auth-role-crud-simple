<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
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
        User::truncate();
        User::create([
            'name' => 'user',
            'role' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
            'remember_token' => Str::random(60)
        ]);
        
        User::create([
            'name' => 'gardener',
            'role' => 'gardener',
            'email' => 'gardener@gmail.com',
            'password' => bcrypt('gardener'),
            'remember_token' => Str::random(60)
        ]);
        
        User::create([
            'name' => 'desaigner',
            'role' => 'desaigner',
            'email' => 'desaigner@gmail.com',
            'password' => bcrypt('desaigner'),
            'remember_token' => Str::random(60)
        ]);

    }
}
