@extends('layouts.app1')

@section('gaya')
<style>
    .isi{
        margin-top : 120    ;
    }
</style>
@endsection

@section('content')
<div class="container isi">
    <div class="row">
        <div class="col-md-12">
            <center><h2>Edit Iklan dulu</h2></center>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <img src="{{ $gbr }}" height="200" />
        </div>
        <div class="col-md-6">
            <form action="" method="post" enctype="multipart/form-data" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="fotolama" value="{{ $gbr }}" />
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="namabarang" value="{{ $nama }}" placeholder="namaiklan" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Harga Barang</label>
                    <input type="text" name="hargabarang" value="{{ $harga }}" placeholder="namaiklan" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Stock Barang</label>
                    <input type="text" name="stockbarang" value=" {{ $stock }} " placeholder="namaiklan" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Ukuran</label>
                    <input type="text" name="ukuran" value="{{ $ukuran }}" placeholder="namaiklan" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control">
                        <option value="jaket">Jaket</option>
                        <option value="kaos">Kaos</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Ubah Foto</label>
                    <input type="file" name="fotobaru" class="form-control-file"/>
                </div>
                <div class="form-group">
                    <input type="submit" value="simpan" name="simpan" class="btn btn-primary"/>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection