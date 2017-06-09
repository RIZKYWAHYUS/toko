@extends('layouts.app1')

@section('gaya')
<style>
    .iklan-baru{
        margin-top:80;
    }
</style>
@endsection


@section('content')
<div class="container">
    <div class="row iklan-baru">
        <center><h2>Iklan Barumu</h2></center>
        <div class="col-md-3"></div>
            <div class="col-md-6">
            <form action="" method="post">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="namabarang" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Persediaan Stock</label>
                    <input type="text" name="stock" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Ukuran</label>
                    <input type="ukuran" name="stock" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control">
                        <option value="jaket">Jaket</option>
                        <option value="kaos">Kaos</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Gambar Barang</label>
                    <input type="file" name="gambarbarang" class="form-control-file"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Publish"/>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endsection