<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gejala = [

            [
                'kode_gejala' => 'G01',
                'nama_gejala' => 'Batuk terlalu lama',
                'penting' => false,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G02',
                'nama_gejala' => 'Batuk berdahak ',
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G03',
                'nama_gejala' => 'Batuk mengeluarkan darah',
                'penting' => false,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G04',
                'nama_gejala' => 'Sakit pada bagian dada',
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G05',
                'nama_gejala' => 'Badan terasa lemas',
                'penting' => false,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G06',
                'nama_gejala' => 'Sesak nafas',
                'penting' => false,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G07',
                'nama_gejala' => 'Turun berat badan ',
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G08',
                'nama_gejala' => 'Nafsu makan berkurang',
                'penting' => false,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G09',
                'nama_gejala' => 'Berkeringat diwaktu malam tanpa didasari aktivitas berat',
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G10',
                'nama_gejala' => 'Demam',
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G11',
                'nama_gejala' => 'Muncul benjolan pada area leher',
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G12',
                'nama_gejala' => 'Muncul benjolan pada area paha ',
                'penting' => false,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G13',
                'nama_gejala' => 'Muncul benjolan pada area ketiak dan kelenjar',
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G14',
                'nama_gejala' => 'Kesadaran otak menurun',
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G15',
                'nama_gejala' => 'Demam naik turun (>38O)',
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G16',
                'nama_gejala' => 'Pembesaran pada limpa',
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            
           
        ];

        DB::table('gejalas')->insert($gejala);
    }
}
