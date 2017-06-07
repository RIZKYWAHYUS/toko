@extends('layouts/app1')

@section('gaya')
<style>

.laporan {
  margin-top:80px;
}

.about{
  margin-top:10px;
  margin-bottom:200px;
}

#keranjang{
  background-color: grey;
color:white;
}
</style>
@endsection


@section('content')


<div class="laporan container">
    <div class="row">
        <div class="col-md-12">
        @if(isset($status) AND $status=="berhasil")
          <div class="alert alert-success page-scroll" role="alert">
          Pembelian berhasil <span class="glyphicon glyphicon-ok"></span> 
          </div>
       @endif
          <div class="alert alert-danger page-scroll hidden" role="alert">
          Pembelian gagal <span class="glyphicon glyphicon-remove"></span> 
          </div>
        </div>
   </div>
</div>


<div class="about">
  <div class="container">
      
         <div class='col-md-3'>  
            <div class='panel panel-default'>
              <div class='panel-heading'>
                <img class='img-responsive' id='img-kosong' src='{{$gbr}}'   style='height:255' alt='aaa'/>
              </div>
              <div class='panel-body'>
              </div>
           </div>
         </div>

<div class="col-md-5">
     <h2><b>{{$nama}} </b></h2>
     <p> {{$harga}}</p>
     <p>{{ $gbr}}</p>
     <p>Ready  {{$stock}} </p>
    <form action="" method="post">
                   Jumah pembelian :
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          @if(isset(Auth::user()->name))
          <input type="hidden" name="atasnama" value="  {{ Auth::user()->name }} "/>
          @else
          <input type="hidden" name="atasnama" value="unknow"/>
          @endif
          <input type="hidden" name="idbarang" value="{{ $id }}"/>
          <input type='number' class="form-control" name='jumlah' min='1' max='100' step='1' value='1' style="width:100px;"/><br>
          <input type="submit" class="btn btn-success" name="submit" value="Beli Sekarang"/>
          <input type="submit" class="btn btn-primary" name="submit" value="Tambahkan Ke Daftar Belanja"/> 
    </form>
</div>

  </div>
</div>

@endsection

