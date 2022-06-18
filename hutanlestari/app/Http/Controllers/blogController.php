<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class blogController extends Controller
{
    public function form(){
        return view('blog.form');
    }
    public function index(){
        $pagi = Blog::latest()->where('verifikasi_check' , 1 )->paginate(9);
        return view('blog.index' , ['pag'=>$pagi]);
    }

    public function detail($id){
        $data = Blog::find($id);
        return view('blog.detail' , ['data'=>$data]);
    }

    public function formpost(Request $request){
        $data = new Blog();
        $data->judul_artikel = $request->judul_artikel;
        $data->nama_penulis = $request->nama_penulis;
        $data->kategori = $request->jk;
        $data->isi_artikel = $request->isi_artikel;
        $data->user_id = Auth::id();
        $data->verifikasi_check = 0;

        //        upload file


        $file = $request->file('file');

        $nama_file = time()."_".$file->getClientOriginalName();

        // isi dgn nama folder
        $tujuan_upload = 'blogimage';
        $file->move($tujuan_upload,$nama_file);

        $data->img = $nama_file;
        $data->tanggal_posting = Carbon::now();


        $data->save();

        return redirect()->back();
    }
}
