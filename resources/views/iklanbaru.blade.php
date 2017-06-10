@extends('layouts.app1')

@section('gaya')
<style>
    .iklan-baru{

    }
    .laporan {
  margin-top:80px;
}

</style>
@endsection


@section('content')
<div class="laporan container"> 
    <div class="row">
        <div class="col-md-12">
        @if(isset($status) AND $status=="berhasil")
          <div class="alert alert-success page-scroll" role="alert">
          Pembuatan iklan berhasil <span class="glyphicon glyphicon-ok"></span>
          </div>
       @endif
          </div>
        </div>
   </div>
</div>




<div class="container">
    <div class="row iklan-baru">
        <center><h2>Iklan Barumu</h2></center>
        <div class="col-md-3"></div>
            <div class="col-md-6">
            <form action="/simpaniklan" method="post" enctype="multipart/form-data">

            @if(isset(Auth::user()->id))
            <input type="hidden" name="pemilik" value="{{ Auth::user()->id }}"/>
            @else
            <input type="hidden" name="pemilik" value="2"/>
            @endif

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="namabarang" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label>Persediaan Stock</label>
                    <input type="text" name="stock" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label>Ukuran</label>
                    <input type="ukuran" name="ukuran" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control" required>
                        <option value="jaket">Jaket</option>
                        <option value="kaos">Kaos</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Gambar Barang</label>
                    <input type="file" name="gambarbarang" class="form-control-file" required/>
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