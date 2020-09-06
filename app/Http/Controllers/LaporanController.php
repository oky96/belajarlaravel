<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Dompdf\Adapter\PDFLib;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
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
        //
        $data['laporan'] = DB::table('services')
        ->join('pelanggans', 'services.pelanggan_id', '=' ,'pelanggans.id')->get();

        return view('tampilantabel.tabellaporan', $data);

    }

    public function show_pdf()
    {
        $laporan =DB::table('services')
        ->join('pelanggans', 'services.pelanggan_id', '=' ,'pelanggans.id')->get();

        $pdf =PDF::loadview('tampilantabel.laporan_pdf', ['laporan'=> $laporan])->setPaper('a4', 'landscape');
        // return $pdf->download('laporan-pegawai-pdf');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }
}
