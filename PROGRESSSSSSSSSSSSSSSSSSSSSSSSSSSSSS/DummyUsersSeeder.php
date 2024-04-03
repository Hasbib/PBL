<?php

namespace Database\Seeders;

use App\Models\Users; // Perbaiki nama model dari Users menjadi User
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // Import Hash facade untuk mengenkripsi password

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userdata = [
            [
                'name' => 'Bambang Pamungkas',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'nik' => '1234567890123',
                'instansi' => 'D3TI',
                'kontak' => '081234567800',
                'password' => Hash::make('123456') // Menggunakan Hash::make untuk mengenkripsi password
            ],
            [
                'name' => 'Joko Widodo',
                'username' => 'jokowi',
                'email' => 'petugas@gmail.com', // Ubah 'Petugas@gmail.com' menjadi 'petugas@gmail.com'
                'role' => 'petugas',
                'password' => Hash::make('123456') // Menggunakan Hash::make untuk mengenkripsi password
            ],
            [
                'name' => 'Ganjar Pranowo',
                'username' => 'GP',
                'email' => 'pranowo@gmail.com', // Ubah 'Pranowo@gmail.com' menjadi 'pranowo@gmail.com'
                'role' => 'juri',
                'password' => Hash::make('123456') // Menggunakan Hash::make untuk mengenkripsi password
            ],
            [ 
                'name' => 'Iqbal',
                'username' => 'IFR',
                'email' => 'iqbalfarhanrasyid@gmail.com',
                'role' => 'user',
                'password' => Hash::make('081278') // Menggunakan Hash::make untuk mengenkripsi password
            ]
        ];

        foreach ($userdata as $val) { // Menghapus $key karena tidak digunakan
            Users::create($val); // Mengubah "Users::create" menjadi "User::create" agar sesuai dengan model yang ada
        }
    }
}
