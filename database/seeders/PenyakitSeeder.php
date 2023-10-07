<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penyakit = [
            [
                'kode' => 'P01',
                'nama_penyakit' => 'Tuberkolosis Paru',
                'definisi' => 'Tuberkulosis (TB) paru adalah infeksi paru akibat bakteri Mycobacterium tuberculosis (MTB)',
                'solusi' => 'Periksa Ke Dokter Ya Sayang',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode' => 'P02',
                'nama_penyakit' => 'Tuberkolosis Ekstra Paru',
                'definisi' => 'Tuberkulosis Ekstra Paru adalah kondisi di mana infeksi bakteri M. tuberculosis telah menyebar ke jaringan dan organ tubuh selain paru-paru. Organ yang dapat terinfeksi bakteri penyebab TBC adalah kelenjar limpa, selaput otak, sendi, ginjal, tulang, kulit, bahkan alat kelamin. Tanda-tanda dan gejala TBC di luar paru umumnya bervariasi',
                'solusi' => 'Periksa Ke Dokter Ya Sayang',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        DB::table('penyakits')->insert($penyakit);
    }
}
