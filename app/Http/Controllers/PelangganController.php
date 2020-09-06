<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['pelanggans'] = Pelanggan::all();
        return view('tampilantabel.tabel2',$data);
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
        $valid = $request->validate([
            'Nama_pelanggan'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
        ]);
        // dd($valid);
        Pelanggan::create($valid);
        return redirect()->back()->with('status','<div class="alert alert-success" role="alert">
            Data Berhasil Di tambahkan
      </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggan $pelanggan, $id)
    {
        $data['pelanggan'] = Pelanggan::find($id)->first();


        return view('tambah.edit_pelanggan', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggan $pelanggan, $id)
    {
        $valid = $request->validate([
            'Nama_pelanggan'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
        ]);

        Pelanggan::where('id', $id)->update($valid);
        return redirect('pelanggan')->with('status','<div class="alert alert-success" role="alert">
            Data Berhasil Di ubah
      </div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pelanggan::destroy($id);
        return redirect()->back()->with('status','<div class="alert alert-danger" role="alert">
        Data Berhasil Di Hapus
    </div>');
    }
}
