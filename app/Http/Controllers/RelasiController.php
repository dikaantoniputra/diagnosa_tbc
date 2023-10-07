<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TKModel;
use App\Models\Gejala;
use App\Models\Relasi;

class RelasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relasi = Relasi::all();
        $data = [];
        foreach ($relasi as $r) {
            $penyakit = TKModel::where('kode', $r->kode_penyakit)->first();
            $gejala = Gejala::where('kode_gejala', $r->kode_gejala)->first();
            if (!isset($hasil[$penyakit->kode])) {
                $hasil[$penyakit->kode] = [
                    'id' => $penyakit->id,
                    'kode' => $penyakit->kode,
                    'nama_penyakit' => $penyakit->nama_penyakit,
                    'gejala' => [],
                ];   
            }
            $hasil[$penyakit->kode]['gejala'][] = $gejala->nama_gejala;
        }

        $used_ids = Relasi::pluck('kode_penyakit')->toArray();
        $penyakits = TKModel::whereNotIn('id', $used_ids)->get();

        if (empty($hasil)) {
            $hasil = [];
        }

        $data = [
            'title' => 'Basis Pengetahuan',
            'subtitle' => 'Halaman berisikan pengetahuan hubungan antara Kategori Penyakit dan gejala',
            'data' => array_values($hasil),
            'penyakit' => TKModel::all(),
            'gejala' => Gejala::all(),
            'daftar' => $penyakits,
        ];
        // dd($data);
        return view('relasi.index', $data);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'relasi_penyakit' => 'required',
            'relasi_gejala' => 'required',
        ]);
        
    
        $countGejala = count($request->relasi_gejala);

        for ($i = 0; $i < $countGejala; $i++) {
            $relasi = new Relasi();
            $relasi->kode_gejala = $request->relasi_gejala[$i];
            $relasi->kode_penyakit = $request->relasi_penyakit;
            $relasi->save();
        }


        if ($relasi) {
            //redirect dengan pesan sukses
            return redirect()->route('relasi.index')->with('success', 'Data Berhasil Disimpan!');
        } else {
            //redirect dengan pesan error
            return redirect()->route('relasi.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        dd(Relasi::where('kode_penyakit', $id)->get());
        // mengambil data relasi berdasarkan penyakit_id
        $relasi = Relasi::where('id', $id)->get();
        $gejalaIDs = $relasi->pluck('gejala_id')->toArray(); // Mengambil semua gejala_id yang terkait

        $penyakit = TKModel::all();
        $penyakitID = TKModel::find($id);

        $gejala = Gejala::all();


        $data = [
            'title' => 'Edit Basis Pengetahuan',
            'subtitle' => 'Data Basis Pengetahuan',
            'penyakit' => $penyakit,
            'penyakitId' => $penyakitID->id,
            'gejala' => $gejala,
            'relasi' => $relasi,
            'gejalaIDs' => $gejalaIDs,
        ];

        // dd($data);
        return view('relasi.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'relasi_penyakit' => 'required',
            'relasi_gejala' => 'required|array',
        ]);

        $penyakit_id = $request->relasi_penyakit;
        $gejala_ids = $request->relasi_gejala;

        $relasi = Relasi::findOrFail($id); // Fetch the existing relationship by ID

        // Update the relationship's penyakit_id
        $relasi->penyakit_id = $penyakit_id;
        $relasi->save();

        // Get the current gejala_ids associated with the relationship
        $current_gejala_ids = Relasi::where('kode_penyakit', $id)->pluck('kode_gejala')->toArray();
        dd($current_gejala_ids);

        // Loop through provided gejala_ids and update the relationship
        foreach ($gejala_ids as $gejala_id) {
            // If the current gejala_id is already associated, skip
            if (in_array($gejala_id, $current_gejala_ids)) {
                continue;
            }

            // If the gejala_id is not associated, create a new Relasi row
            $newRelasi = new Relasi();
            $newRelasi->kode_gejala = $gejala_id;
            $newRelasi->kode_penyakit = $penyakit_id;
            $newRelasi->save();
        }

        // Remove gejala_ids that are no longer selected
        foreach ($current_gejala_ids as $current_gejala_id) {
            if (!in_array($current_gejala_id, $gejala_ids)) {
                // Delete the corresponding Relasi row
                Relasi::where('kode_gejala', $current_gejala_id)->where('kode_penyakit', $penyakit_id)->delete();
            }
        }

        return redirect()->route('relasi.index')->with('success', 'Data Berhasil Disimpan!');
    }






    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $relasi = Relasi::all()->where('penyakit_id', $id);
        foreach ($relasi as $r) {
            # code...
            $r->delete();
        }


        return redirect()->route('relasi.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
