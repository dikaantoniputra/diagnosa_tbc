<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;



class UserControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $model = 'user';
            // $data = User::select('*');
            return DataTables::of(User::select('*'))
                // ->addIndexColumn()
                ->addColumn('action', function ($object) use ($model) {
                    $text = "";
                    $text .= '<a href="' . route($model . '.show', [$model => $object]) . '" class="btn btn-sm btn-success"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                        <path d="M16 5l3 3"></path>
                     </svg> Show</a>';
                    $text .= "<form class='form-horizontal' style='display: inline;' method='POST' action='" . route($model . '.destroy', [$model => $object]) . "'><input type='hidden' name='_token' value='" . csrf_token() . "'> <input type='hidden' name='_method' value='DELETE'><button class='btn btn-sm btn-danger' type='submit'><i class='fas fa-trash'></i> Hapus</button></form><form>";
                    return $text;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.page.user.view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $pendidikan = Pendidikan::all();
    //     return view('page.user.create', compact('pendidikan'));
    // }

    // public function getKelas(Request $request)
    // {
    //     $kelas = Kelase::where('pendidikan_id', $request->id)->get();
    //     // dd($request);
    //     return response()->json(array('kelas' => $kelas), 200);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'c_fname' => 'required',
            'c_lname' => 'required',
            'c_email' => 'required|email',
            'c_subject' => 'nullable',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $validatedData['c_fname'],
            'nama_panggilan' => $validatedData['c_lname'],
            'email' => $validatedData['c_email'],
            'phone' => $validatedData['c_subject'],
            'status' => 1,
            'password' => bcrypt($validatedData['password']),
            'slug' => Str::slug($validatedData['c_fname']),
        ]);

        // Lakukan proses lain yang Anda inginkan, seperti pengiriman email verifikasi, dll.

        return redirect()->back()->with('success', 'User berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::select('*')->findOrFail($id);
        return view('admin.page.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the kurir based on $id
        $user = User::findOrFail($id);
    
    
        // Delete the kurir
        $user->delete();
    
        // Redirect to the appropriate page or provide a success response
        return redirect()->route('user.index')->with('success', 'User berhasil dihapus.');
    }
}
