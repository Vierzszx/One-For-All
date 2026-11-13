<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AkunDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $waktu = now();

        DB::table('lembaga')->upsert([
            [
                'nama_lembaga' => 'BEM',
                'created_at' => $waktu,
                'updated_at' => $waktu,
            ],
            [
                'nama_lembaga' => 'BCC',
                'created_at' => $waktu,
                'updated_at' => $waktu,
            ],
        ], ['nama_lembaga'], ['updated_at']); 
        
        DB::table('pengguna')->upsert([
            [
                'nama_lengkap' => 'Udin Marudin',
                'nim' => '2501',
                'email' => null,
                'id_lembaga' => null,
                'peran' => 'Mahasiswa',
                'kata_sandi_hash' => Hash::make('udin123'),
                'created_at' => $waktu,
                'updated_at' => $waktu,
            ],
        ], ['nim'], ['updated_at']);

        $idBem = DB::table('lembaga')->where('nama_lembaga', 'BEM')->value('id_lembaga');

        DB::table('pengguna')->upsert([
            [
                'nama_lengkap' => 'Admin BEM',
                'nim' => null,
                'email' => 'bem@gmail.com',
                'id_lembaga' => $idBem,
                'peran' => 'Admin Lembaga',
                'kata_sandi_hash' => Hash::make('BEM123'),
                'created_at' => $waktu,
                'updated_at' => $waktu,
            ],
        ], ['email'], ['id_lembaga', 'updated_at']);

        $idBcc = DB::table('lembaga')->where('nama_lembaga', 'BCC')->value('id_lembaga');

        DB::table('pengguna')->upsert([
            [
                'nama_lengkap' => 'Admin BCC',
                'nim' => null,
                'email' => 'bcc@gmail.com',
                'id_lembaga' => $idBcc,
                'peran' => 'Admin Lembaga',
                'kata_sandi_hash' => Hash::make('BCC123'),
                'created_at' => $waktu,
                'updated_at' => $waktu,
            ],
        ], ['email'], ['id_lembaga', 'updated_at']);
    }
}
