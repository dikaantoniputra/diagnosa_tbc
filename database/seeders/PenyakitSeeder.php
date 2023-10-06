<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'definisi' => 'Penyakit TB Paru adalah infeksi bakteri yang menyerang paru-paru dan dapat menyebar ke bagian tubuh lainnya. Penyakit ini disebabkan oleh bakteri Mycobacterium tuberculosis.',
                'solusi' => 'Pengobatan penyakit TB Paru biasanya melibatkan penggunaan antibiotik khusus yang diresepkan oleh dokter. Pengobatan harus dijalani dengan disiplin untuk mencegah resistensi obat.',
            ],
            [
                'kode' => 'P02',
                'nama_penyakit' => 'Tuberkolosis Ekstra Paru',
                'definisi' => 'Penyakit TB Kulit adalah bentuk infeksi TB yang memengaruhi kulit. Biasanya ditandai dengan munculnya lepuhan, bisul, atau luka di kulit yang lambat sembuh.',
                'solusi' => 'Pengobatan penyakit TB Kulit melibatkan penggunaan antibiotik khusus yang diresepkan oleh dokter. Pengobatan harus dijalani dengan disiplin untuk memastikan pemulihan yang efektif.',
            ],
           
        ];
        
        DB::table('penyakits')->insert($penyakit);
    }
}
