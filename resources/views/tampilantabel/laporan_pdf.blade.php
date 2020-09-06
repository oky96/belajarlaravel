
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center" class="thead-dark">
            <br><br>

            <thead class="thead-dark" >
                <tr>
                    <th>No</th>
                    <th>Nama pelanggan</th>
                    <th>Alamat</th>
                    <th>No.hp</th>
                    <th>Nama Barang</th>
                    <th>Tanggal Masuk</th>
                    <th>Kerusakan</th>
                    <th>Perbaikan</th>
                    <th>unit</th>
                    <th>Status</th>
                    <th>Total</th>


                </tr>
          </thead>

          <tbody>

            @foreach ($laporan as $l)
            <tr align="center">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $l->Nama_pelanggan }}</td>
                <td>{{ $l->alamat }}</td>
                <td>{{ $l->no_hp }}</td>
                <td>{{ $l->Nama_barang }}</td>
                <td>{{ $l->Tanggal_masuk }}</td>
                <td>{{ $l->Kerusakan }}</td>
                <td>{{ $l->Perbaikan }}</td>
                <td>{{ $l->unit }}</td>
                <td>{{ $l->Status }}</td>
                <td>{{ $l->Harga }}</td>

            </tr>
            @endforeach

         </tbody>
        </table>
