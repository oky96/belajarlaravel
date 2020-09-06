@extends('layouts.master')

@section('title', 'Service')

@section('container')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Table Barang</h6>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <a href="{{ url('laporan/pdf') }}" class="btn btn-primary">
                <i class="fas fa-print"></i>
        </a>
            <br><br>
            {!!Session::get('status')!!}
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama pelanggan</th>
                    <th>Alamat</th>
                    <th>No.hp</th>
                    <th>Nama Barang</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal keluar</th>
                    <th>Kerusakan</th>
                    <th>Perbaikan</th>
                    <th>unit</th>
                    <th>Total</th>
                    <th>Status</th>

                </tr>
          </thead>

          <tbody>

            @foreach ($laporan as $l)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $l->Nama_pelanggan }}</td>
                <td>{{ $l->alamat }}</td>
                <td>{{ $l->no_hp }}</td>
                <td>{{ $l->Nama_barang }}</td>
                <td>{{ $l->Tanggal_masuk }}</td>
                <td>{{ $l->tanggal_keluar }}</td>
                <td>{{ $l->Kerusakan }}</td>
                <td>{{ $l->Perbaikan }}</td>
                <td>{{ $l->unit }}</td>
                <td>{{ $l->Harga }}</td>
                <td>{{ $l->Status }}</td>
            </tr>
            @endforeach

         </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
