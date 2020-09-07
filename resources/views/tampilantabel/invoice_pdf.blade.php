<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice Service</title>

    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    .row{
        width: 100%;
    }
    .left{
        width: 30%;
        margin-top:15%;
        border-bottom: 1px solid black;
        text-align: center;
    }
    .right{
        width: 30%;
        margin-left:70%;
        margin-top: -30px;
        border-bottom: 1px solid black;
        text-align: center;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                {{-- <img src="#" style="width:100%; max-width:300px;"> --}}
                            </td>

                            <td>
                                Surat Jalan<br>
                                {{ $laporan->Tanggal_masuk  }}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                DHETA PRIMA<br>
                                JL.Ahmad Yani Tanjungpinang<br>
                                sales@dhetaprima.com
                            </td>

                            <td>
                                {{ $laporan->Nama_pelanggan }}<br>
                                {{$laporan->alamat}}<br>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>
                   Nama Barang
                </td>

                <td>
                        unit
                </td>
            </tr>

            <tr class="details">
                <td>
                    {{$laporan->Nama_barang}}
                </td>

                <td>
                    {{$laporan->unit}}
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Kerusakan
                </td>

                <td>
                    {{-- unit --}}
                </td>
            </tr>

            <tr class="item">
                <td>
                    {{$laporan->Kerusakan}}
                </td>

                <td>
                    {{-- {{$laporan->unit}} --}}
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Perbaikan
                </td>

                <td>
                    {{-- unit --}}
                </td>
            </tr>

            <tr class="item">
                <td>
                    {{$laporan->Perbaikan}}
                </td>

                <td>
                    {{$laporan->unit}}
                </td>
            </tr>


            <tr class="heading">
                <td>
                    Tanggal masuk
                </td>

                <td>

                </td>
            </tr>

            <tr class="item">
                <td>
                    {{$laporan->Tanggal_masuk}}
                </td>

                <td>
                    {{-- 100 --}}
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Tanggal keluar
                </td>

                <td>

                </td>
            </tr>

            <tr class="item">
                <td>
                    {{$laporan->Tanggal_keluar}}
                </td>

                <td>
                    {{-- 100 --}}
                </td>
            </tr>


            <tr class="heading">
                <td>
                    keterangan
                </td>

                <td>

                </td>
            </tr>

            <tr class="item">
                <td>
                    {{$laporan->Status}}
                </td>

                <td>
                    {{-- 100 --}}
                </td>
            </tr>

            <tr class="item last">
                <td>
                   {{--  --}}
                </td>

                <td>
                    {{-- $10.00 --}}
                </td>
            </tr>

            <tr class="total">
                <td></td>

                <td>
                   Total: {{$laporan->Harga}}
                </td>
            </tr>
        </table>

        <div class="row">
            <div class="left">

                INTEK
            </div>
            <div class="right">

                PENERIMA
            </div>
        </div>
    </div>


</body>
</html>
