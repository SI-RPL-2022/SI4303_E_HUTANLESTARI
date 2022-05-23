<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Donasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $donasi = Donasi::latest()->take(5)->get();
        $campaign = Campaign::latest()->take(1)->get();
        return view('home' , ['donasi'=>$donasi , 'campaign'=>$campaign]);
    }
}
