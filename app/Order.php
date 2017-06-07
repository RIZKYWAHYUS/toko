<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    public function orderNamaBar(){
        return  $posts = DB::select('select ID_ORDER, ATAS_NAMA, 
        NAMA_BARANG, BANYAK_ORDER 
        from toko.order o
        left join
        toko.stock s
        on o.ID_BARANG = s.ID_BARANG');

    }

}

?>