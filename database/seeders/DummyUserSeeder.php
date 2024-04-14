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
            'email'=>'olimpiadeitnas2024@gmail.com',
            'role'=>'admin',
            'password'=> bcrypt('$22@TV7GTnXbqtYf'),
            'instansi'=>'Universitas Sebelas Maret',
            'kontak'=>'081278458353',
            'nik'=>'1234567890001'
        ],
        [
            'name'=>'mas Petugas',
            'username'=>'Petugas123',
            'email'=>'PetugasOlinas@gmail.com',
            'role'=>'petugas',
            'password'=> bcrypt('crF$#hURtqcv'),
            'instansi'=>'Universitas Sebelas Maret',
            'kontak'=>'081278458354',
            'nik'=>'1234567890002'
        ],
        [
            'name'=>'mas Juri',
            'username'=>'Juri123',
            'email'=>'JuriOlinas@gmail.com',
            'role'=>'juri',
            'password'=> bcrypt('cvtusnTY#$dq'),
            'instansi'=>'Universitas Sebelas Maret',
            'kontak'=>'081278458355',
            'nik'=>'1234567890003'
        ],

    ];

    foreach($userData as $key=> $val) {
        Users::create($val);
    }

    }
}
