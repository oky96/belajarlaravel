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
            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-plus-square"></i>
              </button> --}}
            <br><br>
            {!!Session::get('status')!!}
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal keluar</th>
                    <th>Kerusakan</th>
                    <th>Perbaikan</th>
                    <th>unit</th>
                    <th>Total</th>
                    <th>Status</th>

                    <th>aksi</th>

                </tr>
          </thead>

          <tbody>
            @foreach ($services as $service)
            <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{$service->Nama_barang}}</td>
                     <td>{{$service->Tanggal_masuk}}</td>
                     <td>{{$service->Tanggal_keluar}}</td>
                     <td>{{$service->Kerusakan}}</td>
                     <td>{{$service->Perbaikan}}</td>
                     <td>{{$service->unit}}</td>
                     <td>{{$service->Harga}}</td>
                     <td>{{$service->Status}}</td>

                     <td>
                     <form action="{{url('service/'.$service->id)}}" method="post" onsubmit="return confirm('Apakah Yakin Mau di Hapus ?')">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-primary"><span><i class="fas fa-trash"></i></span></button>
                        <a href="{{ url('service/' . $service->id) }}" class="btn btn-sm btn-warning"><span><i class="fas fa-edit"></i></span></a>
                            <a href="{{ url('service/pdf/' . $service->id) }}" class="btn btn-sm btn-danger">
                                <i class="far fa-file-pdf"></i>
                    </form>



                     </td>
             </tr>

             @endforeach
         </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{url('service/')}}" method="POST">
                @csrf

                <div class="form-row" >
                  <div class="form-group col-md-6">
                    <label for="text">Nama barang</label>
                  <input type="text" name="Nama_barang" class="form-control" placeholder="Nama barang">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="date">Tanggal masuk</label>
                    <input type="date" name="Tanggal_masuk" class="form-control"  placeholder="Tanggal masuk">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="date">Tanggal keluar</label>
                    <input type="date" name="tanggal_keluar" class="form-control"  placeholder="Tanggal keluar">
                  </div>

                <div class="form-group col-md-6">
                    <label for="text">Kerusakan</label>
                    <input type="text" name="Kerusakan" class="form-control"  placeholder="kerusakan">

                  </div>

                <div class="form-group col-md-6">
                    <label for="text">Perbaikan</label>
                    <input type="text" name="Perbaikan" class="form-control"  placeholder="Perbaikan">

                  </div>

                  <div class="form-group col-md-6">
                    <label for="number">unit</label>
                    <input type="number" name="unit" class="form-control"  placeholder="unit">

                  </div>


                  <div class="form-group col-md-6">
                    <label for="number">Total</label>
                    <input type="number" name="Harga" class="form-control"  placeholder="Total harga">

                  </div>

                <div class="form-group col-md-6">
                    <label for="text">Proses</label>
                    <input type="text" name="Status" class="form-control"  placeholder="status">
                  </div>
                </div>
                <button class="btn btn-primary mr-1" type="submit" >Submit</button>
                <button class="btn btn-secondary" type="reset" >Cencel</button>
         </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection
