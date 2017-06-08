@extends('layouts/app1')


@section('gaya')
	<style>
		.kotakan:hover {
				background-color : black;
                color : white;
		}
		.gbr {
			height:255;
		}

		.jumbotron {
			background-image:url('img/bg4.jpg');
			 position: relative;  width: 100%;
			height: 100%;
			background-size: cover;
			overflow: hidden;
			border-radius : 0;
			color : white;
		}
		.cari{
			height : 100;
		}
		.tambah-iklan{
			margin-top : -30;
			height : 400;
			padding-top : 112;
		}
.barang{
	margin-top : 100px;
}
	</style>
@endsection

@section('content')
<div class="container-fluid" style="padding:0;">
	<div class="row">
		<div class="jumbotron">
			<div class="container" style="#000" >
				<h1>Thumbas.com</h1>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
			</div>
		</div>
	</div>
</div>


<div class="container-fluid cari">
	<div class="row">

		<form action="" method="get">
			<div class="col-md-2">
					</div>
			<div class="col-md-4">
				<input type="text" name="carinama" class="form-control" placeholder="Search">
			</div>
			<div class="col-md-4">
				<select name="carikategori" class="form-control" >
					<option value="baju" class="form-control">Baju</option>
					<option value="jaket" class="form-control">Jaket</option>
				</select>
			</div>
			<div class="col-md-1">
				<input type="submit" name="submit" value="Cari" class="btn btn-primary"/>
			</div>

		</form>

	</div>
</div>


<div class="container-fluid tambah-iklan bg-primary">
	<center>
	<h2>Bikin iklan? </h2>
	<form action="/iklanbaru" method="get">
		<input type="submit" name ="bikiniklan" value="bikin" class="btn btn-success"/>
	</form>
	</center>

</div>


	<div class="barang">
		<div class="container">
			<div class="about-top grid-1">
			   <?php use App\Stock;
				$daftarStock = App\Stock::all();
				foreach ($daftarStock as $stockan) {
						$gbr = 'img/'.$stockan->FOTO;
						$nama = $stockan->NAMA_BARANG;
						$pjg = strlen($nama);
						if($pjg > 19){
							$nama = substr($nama, 0, 15).'...';
						}
						$pemilik = DB::select("SELECT * FROM USERS WHERE ID = :IDNE",['IDNE'=>$stockan->PEMILIK]);
						$h = $pemilik[0]->id;
						$fotopemilik = $pemilik[0]->foto;
						$status="";
						if($stockan->STOCK_BARANG > 0){
							$status = "<span class='label label-success'>Ready Stock</span>";
						}else{
							$status = "<span class='label label-danger'>Kosong</span>";
						}

				echo "<a href='/detail/$stockan->ID_BARANG'>
						<div class='col-md-3 col-sm-6 col-xs-12'>
							<div class='panel panel-default kotakan'>
								<div class='panel-heading'>
									<img class='img-responsive gbr' src=$gbr alt='aaa'/>
								</div>
								<div class='panel-body'>
									<figcaption>
									<img src=$fotopemilik alt='' class='img-circle' height='50' width='50' />
										$status
										<h4>$nama </h4>
										<p>$h</p>
										<p>$stockan->STOCK_BARANG</p>
										<p>$stockan->HARGA_BARANG</p>
										<p>$gbr</p>
									</figcaption>
								</div>
							</div>
						</div>
					</a>";
                        }
                ?>



			</div>
		</div>
	</div>
@endsection
