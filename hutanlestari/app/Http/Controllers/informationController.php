<?php

namespace App\Http\Controllers;

use App\Models\InformasiFauna;
use App\Models\InformasiFlora;
use Illuminate\Http\Request;


class informationController extends Controller
{
    public function index()
    {
        $data = InformasiFauna::latest()->take(2)->get();
        $flora = InformasiFlora::latest()->take(3)->get();
        return view('information.infromation', ['data' => $data, 'flora' => $flora]);
    }
    public function flora($id)
    {
        $data = InformasiFlora::find($id);
        return view('information.flora', ['data' => $data]);
    }

    public function fauna($id)
    {
        $data = InformasiFauna::find($id);
        return view('information.fauna', ['data' => $data]);
    }
}
