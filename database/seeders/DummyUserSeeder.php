<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
        [
            'name'=>'mas Admin',
            'username'=>'Admin123',
            'role'=>'admin',
            'password'=> bcrypt('12345678')
        ],
        [
            'name'=>'mas Petugas',
            'username'=>'Petugas123',
            'role'=>'petugas',
            'password'=> bcrypt('12345678')
        ],
        [
            'name'=>'mas Juri',
            'username'=>'Juri123',
            'role'=>'juri',
            'password'=> bcrypt('12345678')
        ],

    ];

    foreach($userData as $key=> $val) {
        Users::create($val);
    }

    }
}
