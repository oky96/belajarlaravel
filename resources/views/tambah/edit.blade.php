@extends('layouts.master')

@section('title', 'edit')

@section('container')

          <!-- Page Heading -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Data Service</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tbody>
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-11 col-lg-11">
                                <form action="{{url('service/' . $service->id)}}" method="POST">
                                    @csrf
                                    @method('put')

                                    <div class="form-row" >
                                      <div class="form-group col-md-6">
                                        <label for="text">Nama barang</label>
                                      <input type="text" name="Nama_barang" class="form-control" placeholder="Nama barang" value="{{ $service->Nama_barang }}">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="date">Tanggal masuk</label>
                                        <input type="date" name="Tanggal_masuk" class="form-control"  placeholder="Tanggal masuk" value="{{ $service->Tanggal_masuk }}">
                                      </div>

                                      <div class="form-group col-md-6">
                                        <label for="date">Tanggal keluar</label>
                                        <input type="date" name="tanggal_keluar" class="form-control"  placeholder="Tanggal masuk" value="{{ $service->tanggal_keluar }}">
                                      </div>

                                    <div class="form-group col-md-6">
                                        <label for="text">Kerusakan</label>
                                        <input type="text" name="Kerusakan" class="form-control"  placeholder="kerusakan"value="{{ $service->Kerusakan }}">

                                      </div>

                                    <div class="form-group col-md-6">
                                        <label for="text">Perbaikan</label>
                                        <input type="text" name="Perbaikan" class="form-control"  placeholder="Perbaikan"value="{{ $service->Perbaikan }}">

                                      </div>


                                      <div class="form-group col-md-6">
                                        <label for="number">Unit</label>
                                        <input type="number" name="unit" class="form-control"  placeholder="unit"value="{{ $service->unit }}">

                                      </div>

                                      <div class="form-group col-md-6">
                                        <label for="number">Total</label>
                                        <input type="number" name="Harga" class="form-control"  placeholder="Total harga"value="{{ $service->Harga }}">

                                      </div>

                                    <div class="form-group col-md-6">
                                        <label for="text">Proses</label>
                                        <input type="text" name="Status" class="form-control"  placeholder="status"value="{{ $service->Status }}">
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

