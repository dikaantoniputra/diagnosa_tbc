<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Models\Gejala;
use App\Models\Relasi;
use App\Models\TKModel;
use App\Models\DetailKonsul;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SplStack;



class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Diagnosa',
            'subtitle' => 'Halaman yang berisikan input data diagnosa',
            'isi' => Gejala::all(),
            'comment' => 'Silahkan centang gejala yang anda alami dibawah ini',
        ];
        return view('diagnosa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    // DFS function to find diseases based on symptoms
    private function dfsDiagnosis($gejala_id, $visited, &$result, &$gejala_importance)
    {
        $visited[$gejala_id] = true;

        // Find the diseases associated with the current symptom
        $relasi = Relasi::where('kode_gejala', $gejala_id)->get();

        foreach ($relasi as $r) {
            $penyakit_id = $r->penyakit_id;
            if (!isset($result[$penyakit_id])) {
                $result[$penyakit_id] = [
                    'penyakit' => TKModel::find($penyakit_id)->toArray(),
                    'count' => 0,
                    'penting' => 0,
                ];
            }
            $result[$penyakit_id]['count']++;
            $result[$penyakit_id]['penting'] += $gejala_importance[$gejala_id];
        }

        // Recursively visit all connected symptoms
        foreach ($relasi as $r) {
            $next_gejala_id = $r->gejala_id;
            if (!$visited[$next_gejala_id]) {
                $this->dfsDiagnosis($next_gejala_id, $visited, $result, $gejala_importance);
            }
        }
    }

    public function hasil(Request $request)
    {
        $validateReq = $request->validate([
            'nama_pasien' => 'required|string',
            'tLahir' => 'required',
            'alamat' => 'required|string',
            'telp' => 'required|numeric',
        ]);

        $arrHasilUser = $request->input('gejala');

        if ($arrHasilUser == null) {
            return back()->withInput()->with('error', 'Anda belum memilih gejala');
        } else {
            if (count($arrHasilUser) < TkModel::count() + 1) {
                return back()->withInput()->with('error', 'Minimal gejala yang dipilih adalah ' . (TkModel::count() + 1) . ' gejala');
            } else {
                foreach ($arrHasilUser as $key => $value) {
                    $dataPenyakit[$key] = Relasi::where('kode_gejala', $value)
                        ->select('kode_penyakit')
                        ->get()
                        ->toArray();
                    foreach ($dataPenyakit[$key] as $a => $b) {
                        $resultData[$key]['daftar_penyakit'][$a] = $b['kode_penyakit'];
                    }
                    $dataNilaiDensitas[$key] = Gejala::where('kode_gejala', $value)
                        ->select('nilai_densitas', 'nama_gejala')
                        ->get()
                        ->toArray();
                    $dataGejala[$key] = $dataNilaiDensitas[$key][0]['nama_gejala'];
                    $resultData[$key]['belief'] = $dataNilaiDensitas[$key][0]['nilai_densitas'];
                    $resultData[$key]['plausibility'] = 1 - $dataNilaiDensitas[$key][0]['nilai_densitas'];
                }

                $variabelTampilan = $this->mulaiPerhitungan($resultData);

                foreach ($dataGejala as $key => $value) {
                    $variabelTampilan['Gejala_Penyakit'][$key]['kode_gejala'] = $arrHasilUser[$key];
                    $variabelTampilan['Gejala_Penyakit'][$key]['nama_gejala'] = $value;
                }

                
                $diagnosaSavedData = [
                    'kode' => $variabelTampilan['kode'],
                    'nama_penyakit' => $variabelTampilan['Nama_Penyakit']['nama_penyakit'],
                    'nilai_belief' => $variabelTampilan['Nilai_Belief_Penyakit'],
                    'persentase_penyakit' => $variabelTampilan['Persentase_Penyakit'],
                    'gejala_penyakit' => $variabelTampilan['Gejala_Penyakit']
                ];

                $hasildata = [];
                $hasildata = $diagnosaSavedData;
                
                $data = [
                    'title' => 'Hasil Diagnosa',
                    'pasien' => $request->input('nama_pasien'),
                    'telp' => $request->input('telp'),
                    'tLahir' => $request->input('tLahir'),
                    'alamat' => $request->input('alamat'),
                    'gejala' => $request->input('gejala'),
                    'hasil' => $hasildata,
                ];
                //iki dik 
                dd($data);
        
                return view('diagnosa/hasil', $data)->with('success', 'Penyakit berhasil ditemukan!');
            }
        }

        // // Ambil semua data relasi gejala dan penyakit
        // $gejala_input = $request->input('gejala');

        // $gejala_ids = Gejala::whereIn('kode_gejala', $gejala_input)->pluck('kode_gejala')->toArray();
        // $penyakit = TKModel::all();

        // // Calculate the importance count of each symptom
        // $gejala_importance = array_fill_keys($gejala_ids, 0);
        // foreach ($gejala_ids as $gejala_id) {
            
        //     // Here, you can define the method to calculate the importance count
        //     // For example, you might have a table to store the importance score of each symptom
        //     // Replace 'importance' with the correct field name in your setup
        //     $gejala_importance[$gejala_id] = Gejala::find($gejala_id)->penting;
        // }

        // // Perform DFS to find diseases based on symptoms
        // $visited = array_fill_keys($gejala_ids, false);
        // $hasil = [];
        // foreach ($gejala_ids as $gejala_id) {
        //     $this->dfsDiagnosis($gejala_id, $visited, $hasil, $gejala_importance);
        // }

        // // Sort the diseases based on both symptom count and symptom importance
        // usort($hasil, function ($a, $b) {
        //     if ($a['penting'] !== $b['penting']) {
        //         return $b['penting'] - $a['penting'];
        //     }
        //     return $b['count'] - $a['count'];
        // });

        // $penyakit_hasil = array_column($hasil, 'penyakit');

        // $data = [
        //     'title' => 'Hasil Diagnosa',
        //     'pasien' => $request->input('nama_pasien'),
        //     'telp' => $request->input('telp'),
        //     'tLahir' => $request->input('tLahir'),
        //     'alamat' => $request->input('alamat'),
        //     'gejala' => $request->input('gejala'),
        //     'hasil' => $penyakit_hasil,
        // ];

        // return view('diagnosa/hasil', $data)->with('success', 'Penyakit berhasil ditemukan!');
        
    }

    //Menyimpan Nilai Densitas (Belief)
    public function mulaiPerhitungan($dataAcuan)
    {
        $x = 0;
        for ($i = 0; $i < count($dataAcuan); $i++) {
            $hasilKonversi[$i]['data'][0]['array'] = $dataAcuan[$i]['daftar_penyakit'];
            $hasilKonversi[$i]['data'][0]['value'] = $dataAcuan[$i]['belief'];
            $hasilKonversi[$i]['data'][1]['array'] = [];
            $hasilKonversi[$i]['data'][1]['value'] = $dataAcuan[$i]['plausibility'];

            $x++;
        }

        //dd($hasilKonversi);

        $result = $this->startingPoint(count($hasilKonversi) - 2, $hasilKonversi);


        $arrResult = [];
        foreach ($result['data'] as $key => $value) {
            $arrResult[$key] = $value['value'];
        }


        $indexMaxValue = array_search(max($arrResult), $arrResult);
        $nilaiBelief = round($result['data'][$indexMaxValue]['value'], 2);
        $persentase = (round($result['data'][$indexMaxValue]['value'], 2) * 100) . " %";

        $kodePenyakit = $result['data'][$indexMaxValue]['array'][0];
        $dataPenyakit = TKModel::where('kode', $kodePenyakit)
            ->select('nama_penyakit')
            ->get()
            ->toArray()[0];
        $dataSolusi = TKModel::where('kode', $kodePenyakit)
            ->select('solusi')
            ->get()
            ->toArray()[0];

        $jsonData = [
            'kode' => $kodePenyakit,
            'Nama_Penyakit' => $dataPenyakit,
            'Nilai_Belief_Penyakit' => $nilaiBelief,
            'Persentase_Penyakit' => $persentase,
            'Solusi_Penyakit' => $dataSolusi,
        ];

        return $jsonData;
    }

    //Untuk Mendapatkan Perhitungan 1
    public function startingPoint(int $jumlah, array $myData, $data = [], int $indeks = 0)
    {
        if (count($data) == 0) {
            $hasilAkhir = $this->kalkulatorPerhitungan($myData[$indeks], $myData[$indeks + 1]);
        } else {
            $hasilAkhir = $this->kalkulatorPerhitungan($data, $myData[$indeks + 1]);
        }

        // dd($jumlah);
        if ($indeks < $jumlah) {
            return $this->startingPoint($jumlah, $myData, $hasilAkhir, $indeks + 1);
        } else {
            return $hasilAkhir;
        }

        
    }

    //Untuk Mendapatkan Perhitungan 2
    public function kalkulatorPerhitungan($array1, $array2)
    {
        $hasilAkhir['data'] = [];

        $hasilSementara = [];
        $z = 0;
        for ($x = 0; $x < count($array1['data']); $x++) {
            for ($y = 0; $y < count($array2['data']); $y++) {
                if (count($array1['data'][$x]['array']) != 0 && count($array2['data'][$y]['array']) != 0) {
                    $hasilSementara[$z]['array'] = json_encode(array_values(array_intersect($array1['data'][$x]['array'], $array2['data'][$y]['array'])));
                    if (count(json_decode($hasilSementara[$z]['array'])) == 0) {
                        $hasilSementara[$z]['status'] = "Himpunan Kosong";
                    }
                } else {
                    $hasilSementara[$z]['array'] = json_encode(array_merge($array1['data'][$x]['array'], $array2['data'][$y]['array']));
                }
                $hasilSementara[$z]['value'] = $array1['data'][$x]['value'] * $array2['data'][$y]['value'];
                $z++;
            }
        }

        // dd($hasilSementara);

        $pushArray = [];
        foreach ($hasilSementara as $hasil) {
            array_push($pushArray, $hasil['array']);
        }

        $pushArrayCat = [];
        foreach (array_count_values($pushArray) as $key => $value) {
            array_push($pushArrayCat, $key);
        }

        $tetapan = 0;
        foreach ($hasilSementara as $datahasil) {
            if (isset($datahasil['status']) && $datahasil['status'] == "Himpunan Kosong") {
                $tetapan += $datahasil['value'];
            }
        }

        $tetapan = 1 - $tetapan;

        // dd($tetapan);

        $finalResult = [];
        for ($y = 0; $y < count($pushArrayCat); $y++) {
            $decode[$y] = json_decode($pushArrayCat[$y]);
            $finalResult[$y]['array'] = $decode[$y];
            $finalResult[$y]['value'] = 0;
            for ($x = 0; $x < count($hasilSementara); $x++) {
                $array[$x] = json_decode($hasilSementara[$x]['array']);
                if ($decode[$y] == $array[$x]) {
                    if (!isset($hasilSementara[$x]['status'])) {
                        $finalResult[$y]['value'] += $hasilSementara[$x]['value'];
                    }
                }
            }
            $finalResult[$y]['value'] = $finalResult[$y]['value'] / $tetapan;
        }

        // dd($finalResult);
        for ($i = 0; $i < count($finalResult); $i++) {
            $hasilAkhir['data'][$i] = $finalResult[$i];
        }
        // dd($hasilAkhir);
        return $hasilAkhir;
    }






    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        $id = implode(',', $request->penyakit_id);
        // dd($id);
        $diagnosa = Diagnosa::create([
            'nama_pasien' => $request->nama_pasien,
            'tLahir' => $request->tLahir,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'penyakit_id' => $id,
            'username' => Auth::user()->username,
        ]);

        $gejala_id = $request->input('gejala_id');

        foreach ($gejala_id as $itemId) {
            $detailKonsul = DetailKonsul::create([
                'gejala_id' => $itemId,
                'konsul_id' => $diagnosa->id,
            ]);
        }
        // dd($detailKonsul);

        if ($diagnosa) {
            //redirect dengan pesan sukses
            return redirect()->route('diagnosa.showDiagnosa')->with('success', 'Data Berhasil Disimpan!');
        } else {
            //redirect dengan pesan error
            return redirect()->route('diagnosa.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
        // dd($hasil);
    }

    public function showDiagnosa()
    {
        $used_ids = Relasi::pluck('penyakit_id')->toArray();
        $penyakits = TKModel::whereIn('id', $used_ids)->get();

        $username = Auth::user()->username;
        if (Auth()->user()->role == 0) {
            $diagnosa = Diagnosa::where('username', $username)->get();
        } else {
            $diagnosa = Diagnosa::get();
        }

        if (empty($diagnosa)) {
            $diagnosa = [];
        }

        $penyakitData = null;
        foreach ($diagnosa as $key => $d) {
            $penyakitData = TKModel::where('id', $d->penyakit_id)->get();
        }



        if (Auth()->user()->role == 1) {
            $data = [
                'title' => 'History Diagnosa',
                'subtitle' => 'Daftar Diagnosa',
                'diagnosa' => $diagnosa,
                // 'penyakitData' => TKModel::all(),
            ];
        } elseif (Auth()->user()->role == 0) {
            $data = [
                'title' => 'History Diagnosa',
                'subtitle' => 'Daftar Diagnosa',
                'diagnosa' => $diagnosa,
                // 'penyakitData' => $penyakitData,
            ];
        }


        // dd($data);
        return view('diagnosa.showDiagnosa', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diagnosa = Diagnosa::find($id);
        $detail = DetailKonsul::where('konsul_id', $id)->with('dataGejala')->get();

        $penyakits = $diagnosa->penyakit_id;
        //    dd($penyakits);
        $penyakit_array = [];
        $penyakit = str_replace('[', '', $diagnosa->penyakit_id);
        $penyakit_array = array_merge($penyakit_array, explode(',', $penyakit));
        $penyakit_data = [];
        foreach ($penyakit_array as $key => $value) {
            $penyakit = TKModel::where('id', $value)->first();
            $penyakit_data[] = $penyakit;
        }

        $tLahir = Carbon::parse($diagnosa->tLahir);
        $age = $tLahir->diffForHumans(null, true, false, 2);


        $data = [
            'title' => 'Hasil',
            'subtitle' => 'Laporan Hasil Diagnosa',
            'isi' => $diagnosa,
            'usia' => $age,
            'detail' => $detail,
            'penyakit' => $penyakit_data,
            'tanggal_cetak' => Carbon::now()->format('Y-m-d H:i'),
        ];

        // dd($data);

        return view('diagnosa.laporan', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function edit(Diagnosa $diagnosa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diagnosa $diagnosa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diagnosa = Diagnosa::find($id);
        $diagnosa->delete();
        $detail = DetailKonsul::where('konsul_id', $id)->get();
        foreach ($detail as $key => $value) {
            $value->delete();
        }
        return redirect()->route('diagnosa.showDiagnosa')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
}
