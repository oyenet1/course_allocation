<?php

namespace Database\Seeders;

use App\Models\Role;
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
        $roles = Role::whereIn('id', [1, 2])->get();
        $user = User::create([
            'name' => 'Bowofade Oyerinde',
            'email' => 'admin@adonis.com',
            'phone' => '7065720177',
            'username' => 'networker',
            'password' => Hash::make('password'), //password in lowercase
            'image' => 'https://avatars.githubusercontent.com/u/55518926?s=400&u=08de5bd4f5f93eb6d1c12edd55def90379d3b892&v=4',
        ]); //create firts user which is admin

        $user->roles()->attach($roles, ['user_type' => 'App\Model\User']); //attach roles to user
    }
}