<?php

namespace App\Http\Controllers;

use App\service;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Dompdf\Adapter\PDFLib;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
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
        $data['services'] = Service::all();
        return view('tampilantabel.tabelservice', $data);
    }

    public function invoice_pdf($id)
    {
        $laporan = DB::table('services')
            ->join('pelanggans', 'services.pelanggan_id', '=', 'pelanggans.id')->where('services.id', $id)->first();

        $pdf = PDF::loadview('tampilantabel.invoice_pdf', ['laporan' => $laporan]);
        return $pdf->stream();
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'Nama_barang' => 'required',
            'Tanggal_masuk' => 'required',
            'tanggal_keluar' => 'required',
            'Kerusakan' => 'required',
            'Perbaikan' => 'required',
            'unit' => 'required',
            'Harga' => 'required',
            'Status' => 'required',
            'pelanggan_id' => 'required',



        ]);
        //   dd($valid);
        service::create($valid);
        return redirect()->back()->with('status', '<div class="alert alert-success" role="alert">
            Data Berhasil Di tambahkan
      </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service, $id)
    {


        $data['service'] = Service::findOrFail($id);


        return view('tambah.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service, $id)
    {


        $valid = $request->validate([
            'Nama_barang' => 'required',
            'Tanggal_masuk' => 'required',
            'Kerusakan' => 'required',
            'Perbaikan' => 'required',
            'unit' => 'required',
            'tanggal_keluar' => 'required',
            'Harga' => 'required',
            'Status' => 'required',
        ]);

        Service::where('id', $id)->update($valid);
        return redirect('service')->with('status', '<div class="alert alert-success" role="alert">
            Data Berhasil Di ubah
      </div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        service::destroy($id);
        return redirect()->back()->with('status', '<div class="alert alert-danger" role="alert">
        Data Berhasil Di Hapus
    </div>');
    }
}
