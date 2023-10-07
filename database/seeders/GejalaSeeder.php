<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G03',
                'nama_gejala' => 'Batuk mengeluarkan darah',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G04',
                'nama_gejala' => 'Sakit pada bagian dada',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G05',
                'nama_gejala' => 'Badan terasa lemas',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G06',
                'nama_gejala' => 'Sesak nafas',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G07',
                'nama_gejala' => 'Turun berat badan',
                'nilai_densitas' => 0.9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G08',
                'nama_gejala' => 'Nafsu makan berkurang',
                'nilai_densitas' => 0.9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G09',
                'nama_gejala' => 'Berkeringat diwaktu malam tanpa didasari aktivitas berat',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G10',
                'nama_gejala' => 'Demam',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G11',
                'nama_gejala' => 'Muncul benjolan pada area leher',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G12',
                'nama_gejala' => 'Muncul benjolan pada area paha ',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G13',
                'nama_gejala' => 'Muncul benjolan pada area ketiak dan kelenjar',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G14',
                'nama_gejala' => 'Kesadaran otak menurun',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G15',
                'nama_gejala' => 'Demam naik turun (>38O)',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G16',
                'nama_gejala' => 'Pembesaran pada limpa',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('gejalas')->insert($gejala);
    }
}
