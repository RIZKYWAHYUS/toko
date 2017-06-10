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
        $barang = $barang->where('ID', $id)->first();

        $gbr = "../img/".$barang->FOTO;
        $nama = $barang->NAMA_BARANG;
        $harga = "Rp.".$barang->HARGA_BARANG.".000,00";
        $stock = $barang->STOCK_BARANG." pcs";

        $result = DB::select( "SELECT * FROM users where id = :id",['id'=>$barang->PEMILIK] );

        $namapenjual =  $result[0]->name;
        $fotopenjual = $result[0]->foto;
        $emailpenjual = $result[0]->email;
        $nohppenjual = $result[0]->NO_HP;
        $tglpenjual = $result[0]->created_at;


        $isiDetail = [
            'id'=>$id,
            'nama'=>$nama,
            'harga'=>$harga,
            'stock'=>$stock,
            'gbr'=>$gbr,
            'namapenjual'=>$namapenjual,
            'fotopenjual'=>$fotopenjual,
            'emailpenjual'=>$emailpenjual,
            'nohppenjual'=>$nohppenjual,
            'tglpenjual'=>$tglpenjual
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
        $barang = $barang->where('ID', $id)->first();
        $gbr = "../img/".$barang->FOTO;
        $nama = $barang->NAMA_BARANG;
        $harga = "Rp.".$barang->HARGA_BARANG.".000,00";
        $stock = $barang->STOCK_BARANG." pcs";


        $result = DB::select( "SELECT * FROM users where id = :id",['id'=>$barang->PEMILIK] );

        $namapenjual =  $result[0]->name;
        $fotopenjual = $result[0]->foto;
        $emailpenjual = $result[0]->email;
        $nohppenjual = $result[0]->NO_HP;
        $tglpenjual = $result[0]->created_at;


          $isiDetail = [
            'id'=>$id,
            'nama'=>$nama,
            'harga'=>$harga,
            'stock'=>$stock,
            'gbr'=>$gbr,
            'status'=>$status,
            'namapenjual'=>$namapenjual,
            'fotopenjual'=>$fotopenjual,
            'emailpenjual'=>$emailpenjual,
            'nohppenjual'=>$nohppenjual,
            'tglpenjual'=>$tglpenjual
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
            $table = $table->where('ID',$no);
            $table->delete();
        }else if($table =="users"){
            $deleted = DB::delete('delete from users where id = :no', ['no'=>$no]);
        }
        return redirect()->back();
    }

    public function iklanbaru(){
        return view('iklanbaru');
    }

    public function dashboard(){

        $result = DB::select( "SELECT count(*) jml FROM users");
        $jmluser = $result[0]->jml;

        $result = DB::select("SELECT count(*) jml FROM stock");
        $jmlstock = $result[0]->jml;

        $result = DB::select("SELECT max(HARGA_BARANG) harga FROM toko.stock");
        $hargatertinggi = "Rp.".$result[0]->harga.".000,00";

        $result = DB::select("SELECT min(HARGA_BARANG) harga FROM toko.stock");
        $hargaterendah = "Rp.".$result[0]->harga.".000,00";

        $result = DB::select("SELECT count(*) jml FROM toko.order");
        $jmlorder = $result[0]->jml;


        $result= DB::select("SELECT ID_BARANG, SUM(BANYAK_ORDER) JML
                                from toko.order
                                GROUP BY ID_BARANG
                                ORDER BY JML DESC
                                LIMIT 1
                                ")  ;
        $jmlpalinglaku = $result[0]->JML;
        $barangpalinglaku = $result[0]->ID_BARANG;


        return view('dashboard', [
            'jmluser'=>$jmluser,
            'jmlstock'=>$jmlstock,
            'hargatertinggi'=>$hargatertinggi,
            'hargaterendah'=>$hargaterendah,
            'jmlorder'=>$jmlorder,
            'barangpalinglaku'=>$barangpalinglaku,
            'jmlpalinglaku'=>$jmlpalinglaku
            ]);
    }

     public function simpaniklan(Request $request){
        $file = $request->file('gambarbarang');
        $filename = time();

        //upload file
        $destinationPath='uploads/iklan';
        $filename = $filename.".".$file->getClientOriginalExtension();
        $haha = $file->move($destinationPath,$filename);
      


            $iklanbaru = new Stock();
            $iklanbaru->NAMA_BARANG = $request->input('namabarang');
            $iklanbaru->HARGA_BARANG = $request->input('harga');
            $iklanbaru->STOCK_BARANG = $request->input('stock');
            $iklanbaru->ukuran = $request->input('ukuran');
            $iklanbaru->KATEGORI = $request->input('kategori');
            $iklanbaru->PEMILIK = $request->input('pemilik');
            $iklanbaru->FOTO = "../uploads/iklan/".$filename;
            $iklanbaru->save();

            
            return redirect('/iklanbaru');
     }

     public function editiklan($id){
         $barang = new Stock();
        $barang = $barang->where('ID', $id)->first();

        $gbr = "../img/".$barang->FOTO;
        $nama = $barang->NAMA_BARANG;
        $harga = "Rp.".$barang->HARGA_BARANG.".000,00";
        $stock = $barang->STOCK_BARANG." pcs";
        $ukuran = $barang->ukuran;
        $kategori = $barang->KATEGORI;
      

        $isiDetail = [
            'id'=>$id,
            'nama'=>$nama,
            'harga'=>$harga,
            'stock'=>$stock,
            'gbr'=>$gbr,
            'ukuran'=>$ukuran
            ];

         return view('editiklan',$isiDetail);
     }


}
?>
