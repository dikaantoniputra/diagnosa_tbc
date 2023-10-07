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
<<<<<<< HEAD
                'definisi' => 'Tuberkulosis (TB) paru adalah infeksi paru akibat bakteri Mycobacterium tuberculosis (MTB)',
                'solusi' => 'Periksa Ke Dokter Ya Sayang',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
=======
                'definisi' => 'Penyakit TB Paru adalah infeksi bakteri yang menyerang paru-paru dan dapat menyebar ke bagian tubuh lainnya. Penyakit ini disebabkan oleh bakteri Mycobacterium tuberculosis.',
                'solusi' => 'Pengobatan penyakit TB Paru biasanya melibatkan penggunaan antibiotik khusus yang diresepkan oleh dokter. Pengobatan harus dijalani dengan disiplin untuk mencegah resistensi obat.',
>>>>>>> 7a1bb77a2e88a23edea1bd20d862055c392dc4c7
            ],
            [
                'kode' => 'P02',
                'nama_penyakit' => 'Tuberkolosis Ekstra Paru',
<<<<<<< HEAD
                'definisi' => 'Tuberkulosis Ekstra Paru adalah kondisi di mana infeksi bakteri M. tuberculosis telah menyebar ke jaringan dan organ tubuh selain paru-paru. Organ yang dapat terinfeksi bakteri penyebab TBC adalah kelenjar limpa, selaput otak, sendi, ginjal, tulang, kulit, bahkan alat kelamin. Tanda-tanda dan gejala TBC di luar paru umumnya bervariasi',
                'solusi' => 'Periksa Ke Dokter Ya Sayang',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
=======
                'definisi' => 'Penyakit TB Kulit adalah bentuk infeksi TB yang memengaruhi kulit. Biasanya ditandai dengan munculnya lepuhan, bisul, atau luka di kulit yang lambat sembuh.',
                'solusi' => 'Pengobatan penyakit TB Kulit melibatkan penggunaan antibiotik khusus yang diresepkan oleh dokter. Pengobatan harus dijalani dengan disiplin untuk memastikan pemulihan yang efektif.',
            ],
           
>>>>>>> 7a1bb77a2e88a23edea1bd20d862055c392dc4c7
        ];
        
        DB::table('penyakits')->insert($penyakit);
    }
}
