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
            'nidn' => '0025077310',
            'nama' => 'ANDI FARMADI S.Si., M.T.',
            'tempat_lahir' => 'Banjarbaru',
            'tanggal_lahir' => date('Y-m-d'),
            'alamat' => 'Test',
            'agama' => 'Islam',
            'telp' => '',
            'email' => 'dosen@gmail.com',
            'jenis_kelamin' => 'L',
            'id_fakultas' => 1,
            'photo' => "",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ],);
        DB::table('dosens')->insert([
            'id' => 2,
            'nidn' => '0020127604',
            'nama' => 'MOHAMMAD REZA FAISAL S.T., M.T. Ph.D',
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
            'nidn' => '0025037708',
            'nama' => 'IRWAN BUDIMAN S.T., M.Kom.',
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
        DB::table('dosens')->insert([
            'id' => 4,
            'nidn' => '0122047801',
            'nama' => 'MULIADI S.Kom., M.Sc.',
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
        DB::table('dosens')->insert([
            'id' => 5,
            'nidn' => '0012118009',
            'nama' => 'DODON TURIANTO NUGRAHADI S.Kom., M.Eng.',
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
        DB::table('dosens')->insert([
            'id' => 6,
            'nidn' => '0004128204',
            'nama' => 'RADITYO ADI NUGROHO S.T, M.Kom',
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
        DB::table('dosens')->insert([
            'id' => 7,
            'nidn' => '0121048703',
            'nama' => 'DWI KARTINI S.Kom., M.Kom.',
            'tempat_lahir' => 'Banjarbaru',
            'tanggal_lahir' => date('Y-m-d'),
            'alamat' => 'Test',
            'agama' => 'Islam',
            'telp' => '089655774466',
            'email' => 'dosen2@gmail.com',
            'jenis_kelamin' => 'P',
            'id_fakultas' => 1,
            'photo' => "",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ],);
        DB::table('dosens')->insert([
            'id' => 8,
            'nidn' => '0013098807',
            'nama' => 'FRISKA ABADI S.Kom., M.Kom',
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
        DB::table('dosens')->insert([
            'id' => 9,
            'nidn' => '0025098806',
            'nama' => 'RUDY HERTENO S.Kom,. M.Kom',
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
        DB::table('dosens')->insert([
            'id' => 10,
            'nidn' => '0012069006',
            'nama' => 'MUHAMMAD ITQAN MAZDADI M. Kom.',
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
        DB::table('dosens')->insert([
            'id' => 11,
            'nidn' => '0030039204',
            'nama' => 'RAHMAT RAMADHANI',
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
        DB::table('dosens')->insert([
            'id' => 12,
            'nidn' => '0024089301',
            'nama' => 'TRIANDO HAMONANGAN SARAGIH',
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
