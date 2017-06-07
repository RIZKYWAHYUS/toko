@extends('layouts.app1')

@section('gaya')
<style>

.bagian {
    margin-top:80;
}

</style>
@endsection

@section('content')
  <div class="container bagian">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #4A89DC; color: white;"><h3>Tambah</h3></div>
                <div class="panel-body">
      
             <form method="post" action="" class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label class="col-md-4">
                         ID Order <span class="error"><?php echo $errors->first('id_order') ?></span>
                    </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="id_order" value="{{ old('id_order') }}" class="width-50" required />
                    </div>
               </div>
               
               <div class="form-group">
                    <label class="col-md-4">
                         Atas Nama<span class="error"><?php echo $errors->first('atas_nama') ?></span>
                    </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="atas_nama" value="{{ old('atas_nama') }}" class="width-50" required />
                    </div>
               </div>
               
               <div class="form-group">
                    <label class="col-md-4">
                        Kode Barang <span class="error"><?php echo $errors->first('kode') ?></span>
                    </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="kode" value="{{ old('kode') }}" class="width-50" required />
                    </div>
               </div>

              <div class="form-group">
                    <label class="col-md-4">
                        Banyak <span class="error"><?php echo $errors->first('banyak') ?></span>
                    </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="banyak" value="{{ old('banyak') }}" class="width-50" required />
                    </div>
               </div>
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #8CC152; color: white;"><h3>Di Order</h3></div>
                <div class="panel-body">
                
                <table class="table">
                 <thead>
                    <tr>
                        <th>ID Order</th>
                        <th>Atas Nama</th>
                        <th>Nama Barang</th>
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
    </div>



  <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #f6BB42; color: white;"><h3>Stock Barang</h3></div>
                <div class="panel-body">
                
                <table class="table">
                 <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Stock Barang</th>
                        <th>Harga Barang</th>
                    </tr>
                 </thead>
                 <tbody>
                        <?php  
                        $daftarStock = App\Stock::all();
                        foreach ($daftarStock as $stockan) {
                           $gbr = base64_encode($stockan->FOTO);
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
    </div>




    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #8CC152; color: white;"><h3>Daftar Akun Pengguna</h3></div>
                <div class="panel-body">
                
                <table class="table">
                 <thead>
                    <tr>
                        <th>ID user</th>
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
            </div>
        </div>
    </div>





</div>
@endsection