<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
 
class UserController extends Controller
{
    public function index(){
        return view('upload');
    }
 
    public function upload(Request $request){
        $file = $request->file('filename');
        echo 'File name :'.$file->getClientOriginalName().'<br>';
        echo 'File extension :'.$file->getClientOriginalExtension().'<br>';
        echo 'File path :'.$file->getRealPath().'<br>';
        echo 'File size :'.$file->getSize().'<br>';
        echo 'File MIME Type :'.$file->getMimeType().'<br>';
 
        //upload file
        $destinationPath='uploads';
        $filename = "haha2.".$file->getClientOriginalExtension();
        if($file->move($destinationPath,$filename)){
            echo "<img src='uploads/".$filename."'>";
        }
    }


    public function profilku($id){
        $result = DB::select( "SELECT * FROM users where id = :id",['id'=>$id] );
        $nama =  $result[0]->name;
        $foto = $result[0]->foto;
        $email = $result[0]->email;
        $nohp = $result[0]->NO_HP;
        $tgl = $result[0]->TGL_LAHIR;

        return view('profile',[
            'nama'=>$nama,
            'foto'=>$foto,
            'email'=>$email,
            'nohp'=>$nohp,
            'tgl'=>$tgl
            ]);
    }      

    public function simpan(Request $request, $id){
       


        $file = $request->file('foto');
        $filename = $request->input('fotolama');
        if(isset($file)){
        //upload file
        $destinationPath='uploads';
        $filename = $request->input('email').".".$file->getClientOriginalExtension();
        $haha = $file->move($destinationPath,$filename);
        }

        
        
         DB::table('users')
              ->where('id',$id)
              ->update(
                 ['name'=>$request->input('nama'),
                  'email'=>$request->input('email'),
                  'NO_HP'=>$request->input('nohp'),
                  'TGL_LAHIR'=>$request->input('tgl'),
                  'foto'=>'../uploads/'.$filename
                 ]);
         

          return redirect()->back()->with('status',"berhasil");
    }

}
