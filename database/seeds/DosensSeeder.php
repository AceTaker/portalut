<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DosensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosens')->insert([
            'id' => 1,
            'nidn' => 1102110,
            'nama' => 'Aditya Najmi, M.Kom',
            'tempat_lahir' => 'Banjarbaru',
            'tanggal_lahir' => date('Y-m-d'),
            'alamat' => 'Test',
            'agama' => 'Islam',
            'telp' => '082354235243',
            'email' => 'dosen@gmail.com',
            'jenis_kelamin' => 'L',
            'id_fakultas' => 1,
            'photo' => "",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ],);
        DB::table('dosens')->insert([
            'id' => 2,
            'nidn' => 1102111,
            'nama' => 'Selamat, M.Kom',
            'tempat_lahir' => 'Banjarbaru',
            'tanggal_lahir' => date('Y-m-d'),
            'alamat' => 'Test',
            'agama' => 'Islam',
            'telp' => '089766554433',
            'email' => 'dosen2@gmail.com',
            'jenis_kelamin' => 'L',
            'id_fakultas' => 1,
            'photo' => "",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ],);
        DB::table('dosens')->insert([
            'id' => 3,
            'nidn' => 1102112,
            'nama' => 'Ipan, M.Kom',
            'tempat_lahir' => 'Banjarbaru',
            'tanggal_lahir' => date('Y-m-d'),
            'alamat' => 'Test',
            'agama' => 'Islam',
            'telp' => '089655774466',
            'email' => 'dosen2@gmail.com',
            'jenis_kelamin' => 'L',
            'id_fakultas' => 1,
            'photo' => "",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ],);
    }
}
