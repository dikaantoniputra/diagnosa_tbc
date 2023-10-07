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
<<<<<<< HEAD
                'nilai_densitas' => 0.9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
=======
                'penting' => false,
                'created_at' => new \DateTime,
                'updated_at' => null,
>>>>>>> 7a1bb77a2e88a23edea1bd20d862055c392dc4c7
            ],
            [
                'kode_gejala' => 'G02',
                'nama_gejala' => 'Batuk berdahak ',
<<<<<<< HEAD
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
=======
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
>>>>>>> 7a1bb77a2e88a23edea1bd20d862055c392dc4c7
            ],
            [
                'kode_gejala' => 'G03',
                'nama_gejala' => 'Batuk mengeluarkan darah',
<<<<<<< HEAD
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
=======
                'penting' => false,
                'created_at' => new \DateTime,
                'updated_at' => null,
>>>>>>> 7a1bb77a2e88a23edea1bd20d862055c392dc4c7
            ],
            [
                'kode_gejala' => 'G04',
                'nama_gejala' => 'Sakit pada bagian dada',
<<<<<<< HEAD
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
=======
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
>>>>>>> 7a1bb77a2e88a23edea1bd20d862055c392dc4c7
            ],
            [
                'kode_gejala' => 'G05',
                'nama_gejala' => 'Badan terasa lemas',
<<<<<<< HEAD
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
=======
                'penting' => false,
                'created_at' => new \DateTime,
                'updated_at' => null,
>>>>>>> 7a1bb77a2e88a23edea1bd20d862055c392dc4c7
            ],
            [
                'kode_gejala' => 'G06',
                'nama_gejala' => 'Sesak nafas',
<<<<<<< HEAD
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
=======
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
>>>>>>> 7a1bb77a2e88a23edea1bd20d862055c392dc4c7
            ],
            [
                'kode_gejala' => 'G08',
                'nama_gejala' => 'Nafsu makan berkurang',
<<<<<<< HEAD
                'nilai_densitas' => 0.9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
=======
                'penting' => false,
                'created_at' => new \DateTime,
                'updated_at' => null,
>>>>>>> 7a1bb77a2e88a23edea1bd20d862055c392dc4c7
            ],
            [
                'kode_gejala' => 'G09',
                'nama_gejala' => 'Berkeringat diwaktu malam tanpa didasari aktivitas berat',
<<<<<<< HEAD
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
=======
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
>>>>>>> 7a1bb77a2e88a23edea1bd20d862055c392dc4c7
            ],
            [
                'kode_gejala' => 'G10',
                'nama_gejala' => 'Demam',
<<<<<<< HEAD
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
=======
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
>>>>>>> 7a1bb77a2e88a23edea1bd20d862055c392dc4c7
            ],
            [
                'kode_gejala' => 'G11',
                'nama_gejala' => 'Muncul benjolan pada area leher',
<<<<<<< HEAD
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
=======
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
>>>>>>> 7a1bb77a2e88a23edea1bd20d862055c392dc4c7
            ],
            [
                'kode_gejala' => 'G12',
                'nama_gejala' => 'Muncul benjolan pada area paha ',
<<<<<<< HEAD
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
=======
                'penting' => false,
                'created_at' => new \DateTime,
                'updated_at' => null,
>>>>>>> 7a1bb77a2e88a23edea1bd20d862055c392dc4c7
            ],
            [
                'kode_gejala' => 'G13',
                'nama_gejala' => 'Muncul benjolan pada area ketiak dan kelenjar',
<<<<<<< HEAD
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
=======
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
>>>>>>> 7a1bb77a2e88a23edea1bd20d862055c392dc4c7
            ],
            [
                'kode_gejala' => 'G14',
                'nama_gejala' => 'Kesadaran otak menurun',
<<<<<<< HEAD
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
=======
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
>>>>>>> 7a1bb77a2e88a23edea1bd20d862055c392dc4c7
            ],
            [
                'kode_gejala' => 'G15',
                'nama_gejala' => 'Demam naik turun (>38O)',
<<<<<<< HEAD
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
=======
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
>>>>>>> 7a1bb77a2e88a23edea1bd20d862055c392dc4c7
            ],
            [
                'kode_gejala' => 'G16',
                'nama_gejala' => 'Pembesaran pada limpa',
<<<<<<< HEAD
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
=======
                'penting' => true,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            
           
>>>>>>> 7a1bb77a2e88a23edea1bd20d862055c392dc4c7
        ];

        DB::table('gejalas')->insert($gejala);
    }
}
