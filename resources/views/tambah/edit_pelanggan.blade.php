@extends('layouts.master')

@section('title', 'edit')

@section('container')

          <!-- Page Heading -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Data Pelanggan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tbody>
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-11 col-lg-11">
                                <form action="{{url('pelanggan/' . $pelanggan->id)}}" method="POST">
                                    @csrf
                                    @method('put')

                                    <div class="form-row" >
                                      <div class="form-group col-md-6">
                                        <label for="text">Nama Pelanggan</label>
                                      <input type="text" name="Nama_pelanggan" class="form-control" placeholder="Nama barang" value="{{ $pelanggan->Nama_pelanggan }}">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="text">Alamat</label>
                                        <input type="text" name="alamat" class="form-control"  placeholder="Tanggal masuk" value="{{ $pelanggan->alamat }}">
                                      </div>

                                    <div class="form-group col-md-6">
                                        <label for="number">No.hp</label>
                                        <input type="number" name="no_hp" class="form-control"  placeholder="kerusakan"value="{{ $pelanggan->no_hp }}">

                                      </div>

                                    </div>
                                    <button class="btn btn-primary mr-1" type="submit" >Submit</button>
                                    <button class="btn btn-secondary" type="reset" >Cencel</button>
                             </form>
                        </div>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>




  @endsection

