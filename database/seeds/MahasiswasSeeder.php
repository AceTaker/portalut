<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MahasiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'id' => 1,
            'nim' => 1911016310022,
            'nama' => 'Melky Hermansyah',
            'tempat_lahir' => 'Barito Kuala',
            'tanggal_lahir' => date('Y-m-d'),
            'alamat' => 'TPO',
            'id_prodi' => 1,
            'id_kelas' => 1,
            'agama' => 'Islam',
            'telp' => '0895701151217',
            'email' => 'melkyherman29@gmail.com',
            'jenis_kelamin' => 'L',
            'photo' => "",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
