<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $volunteer = Volunteer::latest()->take(5)->Get();
        return view('home',['volun'=>$volunteer]);
    }

    public function searchVolunteer(Request $request){

        $test= $request->search;
        $volunteer = Volunteer::where('nama_depan' , 'like' , '%'.$test.'%')->get();
        return view('home' , ['volun'=>$volunteer]);
    }
}
