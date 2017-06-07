<?php
namespace App\Http\Controllers;
use App\Stock;
use App\Order;
use DB;
use App\Http\Requests;
use Illuminate\Http\Request;

class tokoController extends Controller{
  

    public function tambah()
    {
        return view('tambahOrder');
    }


    public function order(Request $request)
    {
        $anyar = new Order();
        $anyar->ID_ORDER = $request->input('id_order');
        $anyar->ATAS_NAMA = $request->input('atas_nama');
        $anyar->ID_BARANG = $request->input('kode');
        $anyar->BANYAK_ORDER = $request->input('banyak');
        $anyar->save();

        return view('tambahOrder');
    }


    public function homeToko(){
        return view('home1');
    }

    public function detail($id){
        // $id = $request->input('lemparID');
        // echo $id;

        $barang = new Stock();
        $barang = $barang->where('ID_BARANG', $id)->first();
        $gbr = "../img/".$barang->FOTO;
        $nama = $barang->NAMA_BARANG;
        $harga = "Rp.".$barang->HARGA_BARANG.".000,00";
        $stock = $barang->STOCK_BARANG." pcs"; 
      

        $isiDetail = [
            'id'=>$id,
            'nama'=>$nama,
            'harga'=>$harga,
            'stock'=>$stock,
            'gbr'=>$gbr
            ];


        return view('detail', $isiDetail);
    }

    public function jajal(){
        $gbr = "img/J08.jpg";
        return view('detail',['gbr'=>$gbr]);
    }


    public function beli(Request $request, $id){
        $beli = $request->input('jumlah');
        $pembeli = $request->input('atasnama');

        $order = new Order();
        $order->ID_ORDER = "ORD001";  //perlu diperbaiki
        $order->ATAS_NAMA = $pembeli ;
        $order->ID_BARANG = $id;
        $order->BANYAK_ORDER = $beli;
        $order->save();

        $status = "berhasil";

        $barang = new Stock();
        $barang = $barang->where('ID_BARANG', $id)->first();
        $gbr = "../img/".$barang->FOTO;
        $nama = $barang->NAMA_BARANG;
        $harga = "Rp.".$barang->HARGA_BARANG.".000,00";
        $stock = $barang->STOCK_BARANG." pcs";

          $isiDetail = [
            'id'=>$id,
            'nama'=>$nama,
            'harga'=>$harga,
            'stock'=>$stock,
            'gbr'=>$gbr,
            'status'=>$status
            ];

        return view('detail', $isiDetail);
    }


    public function hapus($table,$no){
        if($table == "order"){
            $table = new Order();
            $table = $table->where('NO', $no);
            $table->delete();
        }else if($table =="stock"){
            $table = new Stock();
            $table = $table->where('ID_BARANG',$no);
            $table->delete();
        }else if($table =="users"){
            $deleted = DB::delete('delete from users where id = :no', ['no'=>$no]);
        }
        return redirect()->back();
    }


}
?>

