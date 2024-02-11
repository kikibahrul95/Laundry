<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    { 
        $users=[
            [
                'username' =>'Kurohige',
                'email' => 'kurohige@gmail.com',
                'password'=> Hash::make('1234456'),
            ],
            [
                'username' =>'Kuro',
                'email' => 'sihorige@gmail.com',
                'password'=> Hash::make('1234456'),
            ],
            [
                'username' =>'Shirohiga',
                'email' => 'buggy@gmail.com',
                'password'=> Hash::make('1234456'),
            ]
            ];

        foreach ($users as $userItem){
        User::Create($userItem);}
    }
}
