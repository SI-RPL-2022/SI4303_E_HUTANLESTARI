<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function donasi(){
        return view('donasi');
    }

    public function donasipost(){
        $data = new Donasi();
        $data->user_id = Auth::user()->id;
        $data->jumlah_donasi = $request->nominal;
        $data->verifikasi_check = 0;
        $data->save();

        return redirect()->route('donasi');

    }

}
