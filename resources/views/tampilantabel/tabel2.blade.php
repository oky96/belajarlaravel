@extends('layouts.master')

@section('title', 'Pelanggan')

@section('container')


<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables service</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-plus-square"></i>
              </button>
            <br><br>
            {!!Session::get('status')!!}
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>aksi</th>
                </tr>
          </thead>

          <tbody>
            @foreach ($pelanggans as $pelanggan)
             <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{$pelanggan->Nama_pelanggan}}</td>
                     <td>{{$pelanggan->alamat}}</td>
                     <td>{{$pelanggan->no_hp}}</td>
                     <td>
                     <form action="{{url('pelanggan/'.$pelanggan->id)}}" method="post" onsubmit="return confirm('Apakah Yakin Mau di Hapus ?')">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger"><span><i class="fas fa-user-minus"></i></span></button>
                        <a href="{{ url('pelanggan/' . $pelanggan->id) }}" class="btn btn-sm btn-warning"><span><i class="fas fa-edit"></i></span></a>
                        <a href="service" class="btn btn-sm btn-secondary  active" role="button" aria-pressed="true"><i class="fas fa-info-circle"></i></a>
                     <button type="button" class="btn btn-sm btn-primary btnTriggerServiceModal" data-pelanggan_id="{{$pelanggan->id}}">
                            <i class="fas fa-plus-square"></i>
                          </button>
                    </form>
                    <br/>

                  </td>
              </tr>
             @endforeach
         </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{url('pelanggan/')}}" method="POST">
                @csrf

                <div class="form-row" >
                  <div class="form-group col-md-6">
                    <label for="text">Nama pelanggan</label>
                  <input type="text" name="Nama_pelanggan" class="form-control" placeholder="Nama barang">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="text">Alamat</label>
                    <input type="text" name="alamat" class="form-control"  placeholder="Alamat">
                  </div>

                <div class="form-group col-md-6">
                    <label for="number">No.hp</label>
                    <input type="number" name="no_hp" class="form-control"  placeholder="No.hp">

                  </div>

                </div>

                <div class="modal-footer">
                <button class="btn btn-primary mr-1" type="submit" >Submit</button>
                <button class="btn btn-secondary" type="reset" >Cencel</button>
            </div>
         </form>
        </div>
      </div>
    </div>
  </div>

  {{-- modal tambah service --}}
  <div class="modal fade" id="exampleModalservice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{url('service/')}}" method="POST">
                @csrf

                <input type="hidden" name="pelanggan_id" id="pelanggan_id_input" class="form-control" >
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
                    <label for="number">Total</label>
                    <input type="number" name="Harga" class="form-control"  placeholder="Total harga">

                  </div>

                  <div class="form-group col-md-6">
                    <label for="number">unit</label>
                    <input type="number" name="unit" class="form-control"  placeholder="unit">

                  </div>


                <div class="form-group col-md-6">
                    <label for="text">Proses</label>
                    <input type="text" name="Status" class="form-control"  placeholder="status">
                  </div>
                </div>


                <div class="modal-footer">
                <button class="btn btn-primary mr-1" type="submit" >Submit</button>
                <button class="btn btn-secondary" type="reset" >Cencel</button>
            </div>
         </form>
        </div>
      </div>
    </div>
  </div>


  <script>
      $(document).ready(function() {
           $('#dataTable').on('click', '.btnTriggerServiceModal', function() {

               $('#exampleModalservice').modal('show')

                let pelangganId = $(this).data('pelanggan_id')

                $('#pelanggan_id_input').val(pelangganId)
          })
      })


  </script>
@endsection
