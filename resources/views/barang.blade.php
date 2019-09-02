@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
            <center><h1>Tabel Barang</h1></center>
                <div class="card">
                    <table class="table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Harga Jual</th>
                            <th>Harga Beli</th>
                            <th>Aksi</th>
                        </tr>
                        <tr>
                            @foreach($barang as $data)
                            <td></td>
                        </tr>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
    
@endsection