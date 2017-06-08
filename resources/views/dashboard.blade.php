@extends('layouts.app1')

@section('gaya')
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
@endsection


@section('content')

<!--inner block start here-->
<div class="inner-block">
<!--market updates updates-->
	 <div class="market-updates">
			<div class="col-md-4">
				<div class="market-update-block" style="background-color:#a1887f">
					<div class="col-md-8 market-update-left" style="background-color:#0288d1">
						<h3>{{ $jmluser }}</h3>
						<h4>Pengguna</h4>
						<p>Total Pengguna Aktif</p>
					</div>
					<div class="col-md-4 market-update-right" style="background-color:#ffca28">
					</div>
				  <div class="clearfix" style="background-color:#e91e63"> </div>
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="market-update-block ">
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
				<div class="market-update-block ">
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
				<div class="market-update-block ">
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
				<div class="market-update-block ">
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
				<div class="market-update-block ">
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
		
<!--market updates end here-->
<div class="chit-chat-layer1">
	<div class="col-md-6 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  Paling Gak Payu
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Lorem</th>
                                      <th>Lorem</th>                                   
                                                                        
                                      <th>Lorem</th>
                                      <th>Lorem</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Face book</td>
                                  <td>Malorum</td>                                 
                                                             
                                  <td><span class="label label-danger">in progress</span></td>
                                  <td><span class="badge badge-info">50%</span></td>
                              </tr>
                              
                          </tbody>
                      </table>
                  </div>
             </div>
      </div>
    

<!--market updates end here-->
<div class="chit-chat-layer1">
	<div class="col-md-6 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  Paling Payu
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Lorem</th>
                                      <th>Lorem</th>                                   
                                                                        
                                      <th>Lorem</th>
                                      <th>Lorem</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Face book</td>
                                  <td>Malorum</td>                                 
                                                             
                                  <td><span class="label label-danger">in progress</span></td>
                                  <td><span class="badge badge-info">50%</span></td>
                              </tr>
                              
                          </tbody>
                      </table>
                  </div>
             </div>
      </div>
     <div class="clearfix"> </div>
</div>
<!--main page chit chating end here-->

<!--market updates end here-->
<div class="chit-chat-layer1">
	<div class="col-md-6 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  Paling Gak Payu
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Lorem</th>
                                      <th>Lorem</th>                                   
                                                                        
                                      <th>Lorem</th>
                                      <th>Lorem</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Face book</td>
                                  <td>Malorum</td>                                 
                                                             
                                  <td><span class="label label-danger">in progress</span></td>
                                  <td><span class="badge badge-info">50%</span></td>
                              </tr>
                              
                          </tbody>
                      </table>
                  </div>
             </div>
      </div>
    

<!--market updates end here-->
<div class="chit-chat-layer1">
	<div class="col-md-6 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  Paling Payu
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Lorem</th>
                                      <th>Lorem</th>                                   
                                                                        
                                      <th>Lorem</th>
                                      <th>Lorem</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Face book</td>
                                  <td>Malorum</td>                                 
                                                             
                                  <td><span class="label label-danger">in progress</span></td>
                                  <td><span class="badge badge-info">50%</span></td>
                              </tr>
                              
                          </tbody>
                      </table>
                  </div>
             </div>
      </div>
     <div class="clearfix"> </div>
</div>
<!--main page -->

<div class="container">
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


<div class="container">
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






</div>
</div>
@endsection