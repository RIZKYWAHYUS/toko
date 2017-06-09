@extends('layouts.app1')

@section('gaya')
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<style>
  .tabel{
    margin-top:100;
  }
</style>
@endsection


@section('content')

<!--inner block start here-->
<div class="inner-block">
<!--market updates updates-->
	 <div class="market-updates">
			<div class="col-md-4">
				<div class="market-update-block" style="background-color:#9e9d24">
					<div class="col-md-8 market-update-left" >
						<h3>{{ $jmluser }}</h3>
						<h4>Pengguna</h4>
						<p>Total Pengguna Aktif</p>
					</div>
					<div class="col-md-4 market-update-right"  >
					</div>
				  <div class="clearfix" > </div>
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="market-update-block" style="background-color: #7986cb">
				 <div class="col-md-8 market-update-left">
					<h3>{{ $jmlstock }}</h3>
					<h4>Unit</h4>
					<p>Total Stock Terdaftar</p>
				  </div>
					<div class="col-md-4 market-update-right">
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="market-update-block" style="background-color: #ffc107">
					<div class="col-md-8 market-update-left">
						<h3>{{ $hargatertinggi }}</h3>
						<h4>Rupiah Indonesia</h4>
						<p>Harga Barang Tertinggi</p>
					</div>
					<div class="col-md-4 market-update-right">
						
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
<!--market updates end here-->
<br>
<!--market updates updates-->
	 <div class="market-updates">
			<div class="col-md-4">
				<div class="market-update-block" style="background-color:#ff5722">
					<div class="col-md-8 market-update-left">
						<h3>{{ $hargaterendah }}</h3>
						<h4>Indonesia Rupiah</h4>
						<p>Harga Barang Termurah</p>
					</div>
					<div class="col-md-4 market-update-right">
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="market-update-block" style="background-color:#ef6c00">
				 <div class="col-md-8 market-update-left">
					<h3>{{ $jmlorder }}</h3>
					<h4>Orderan</h4>
					<p>Total Seluruh Orderan</p>
				  </div>
					<div class="col-md-4 market-update-right">
					
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="market-update-block" style="background-color:#ec407a">
					<div class="col-md-8 market-update-left">
						<h3>{{ $barangpalinglaku }}</h3>
						<h4>total laku {{ $jmlpalinglaku }} unit</h4>
						<p>Barang yang paling laku</p>
					</div>
					<div class="col-md-4 market-update-right">
						
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
		

<div class="container tabel">
    <h2 class="sub-header">Daftar Orderan</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Order</th>
                  <th>Atas Nama</th>
                  <th>ID Barang</th>
                  <th>Banyak Order</th>
                </tr>
              </thead>
              <tbody>
                 <?php use App\Order; 
                        $daftarOrder = App\Order::all();
                        // $daftarOrder = $daftarOrder->orderNamaBar();
                        foreach ($daftarOrder as $orderan) {
                        echo   "<tr>
                                    <td>$orderan->ID_ORDER</td>
                                    <td>$orderan->ATAS_NAMA</td>
                                    <td>$orderan->ID_BARANG</td>
                                    <td>$orderan->BANYAK_ORDER</td>
                                    <td>
                                        <a type='submit' class='btn btn-default' href='/hapus/order/$orderan->NO'>
                                                <span class='glyphicon glyphicon-ok'></span>
                                        </a>
                                        <a type='submit' class='btn btn-default' href='/hapus/order/$orderan->NO'>
                                                <span class='glyphicon glyphicon-remove'></span>
                                        </a>
                                    </td>
                                </tr>";
                            }
                        ?>
              </tbody>
            </table>
          </div>
</div>


<div class="container tabel">
    <h2 class="sub-header">Daftar Stock</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID Barang</th>
                  <th>Nama Barang</th>
                  <th>Stock Barang</th>
                  <th>Harga Barang</th>
                </tr>
              </thead>
              <tbody>
                 <?php  
                        $daftarStock = App\Stock::all();
                        foreach ($daftarStock as $stockan) {
                       echo   "<tr>
                                    <td>$stockan->ID_BARANG</td>
                                    <td>$stockan->NAMA_BARANG</td>
                                    <td>$stockan->STOCK_BARANG</td>
                                    <td>$stockan->HARGA_BARANG.000</td>
                                    <td>
                                        <a type='submit' class='btn btn-default' href='/hapus/stock/$stockan->ID_BARANG'>
                                                <span class='glyphicon glyphicon-remove'></span>
                                        </a>
                                    </td>                                    
                                </tr>";
                            
                           }
                       ?>
              </tbody>
            </table>
          </div>
</div>

<div class="container tabel">
    <h2 class="sub-header">Daftar User</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID </th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Gabung</th>
                </tr>
              </thead>
              <tbody>
                 <?php 
                        $results = DB::select( DB::raw("SELECT * FROM users") );
                        $pjg = count($results);
                        for($i=0; $i<$pjg ; $i++){
                            $a = $results[$i];
                            echo "<tr>
                                    <td>$a->id</td>
                                    <td>$a->name</td>
                                    <td>$a->email</td>
                                    <td>$a->created_at</td>
                                    <td>
                                        <a type='submit' class='btn btn-default' href='/hapus/users/$a->id'>
                                                <span class='glyphicon glyphicon-remove'></span>
                                        </a>
                                    </td>                                  
                                  </tr>";
                        }
                        ?>
              </tbody>
            </table>
          </div>
</div>





@endsection