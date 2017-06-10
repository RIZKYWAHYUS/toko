@extends('layouts.app1')

@section('gaya')
<style>
    div{
        /*border:1px black solid;*/
    }

    .isi {
        margin-top : 80;
    }

    .poto{
        margin-top : 50;
        margin-left:50;

    }
    .biodata{
         margin-top : 40;
         margin-left: -20;
    }

    .panel {
        min-height : 500;
    }

    #jeneng {
        border : 0;
    }

    .laporan {
  margin-top:60px;
  min-height : 30px;
}


</style>
@endsection

@section('content')
<div class="container isi">
    <div class="row panel panel-default">
        <div class="col-md-3 poto">
             <img src="{{ $foto }}" height="200" width="200" class="img-circle" />
        </div>
        <div class="col-md-8 biodata">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="fotolama" value="../uploads/{{ $foto }}">

                <div class="form-group">
                    <div class="col-md-10">
                        <h2><input type="label" value="{{ $nama }}" name="nama" id="jeneng"/></h2>
                    </div>
               </div>

               <div class="form-group">
                    <label class="col-md-10">
                         Email 
                    </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="email" value="{{ $email }}" class="width-50" required />
                    </div>
               </div>

               <div class="form-group">
                    <label class="col-md-10">
                         Tanggal Lahir
                    </label>
                    <div class="col-md-6">
                        <input type="date" class="form-control" name="tgl" value="{{ $tgl }}" class="width-50" />
                    </div>
               </div>


               <div class="form-group">
                    <label class="col-md-10">
                         No. HP 
                    </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="nohp" value="{{ $nohp }}" class="width-50" />
                    </div>
               </div>
               
               <div class="form-group">
                    <label class="col-md-10">
                         Foto 
                    </label>
                    <div class="col-md-6">
                        <input type="file" class="form-control-file" name="foto" id="foto" class="width-50" />
                    </div>
               </div>

               <div class="form-group">
                    <div class="col-md-10">
                       <input type="submit" class="btn btn-primary" value="Simpan">            
                    </div>
               </div>

            </form>

        </div>
    </div> 
</div>


<div class="container">
    <div class="row">
        <div class="col-md-10">
        </div>
        <div class="col-md-2">
            <a class="btn btn-success" href="/iklanbaru">
                buat iklan
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah Stock</th>
                    <th>Pemilik</th>
                </thead>
                <tbody>
 <?php  
                        use App\Stock;
                        $daftarStock = DB::select("SELECT * FROM stock where PEMILIK = :iduser",['iduser'=>$iduser]);
                        foreach ($daftarStock as $stockan) {
                       echo   "<tr>
                                    <td>$stockan->ID</td>
                                    <td>$stockan->NAMA_BARANG</td>
                                    <td>$stockan->STOCK_BARANG</td>
                                    <td>$stockan->HARGA_BARANG.000</td>
                                    <td>$stockan->PEMILIK</td>
                                    <td>
                                        <a type='submit' class='btn btn-default' href='/hapus/stock/$stockan->ID'>
                                                <span class='glyphicon glyphicon-pencil'></span>
                                        </a>
                                        <a type='submit' class='btn btn-default' href='/hapus/stock/$stockan->ID'>
                                                <span class='glyphicon glyphicon-trash'></span>
                                        </a>
                                    </td>                                    
                                </tr>";
                            
                           }
                       ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection