<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Campaign;
use App\Models\Donasi;
use App\Models\Volunteer;
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
        // $donasi = Donasi::latest()->take(5)->get();
        // $campaign = Campaign::latest()->take(1)->get();
        // return view('home' , ['donasi'=>$donasi , 'campaign'=>$campaign]);
        // $volunteer = Volunteer::latest()->take(5)->Get();
        // return view('home',['volun'=>$volunteer]);
        $donasi = Donasi::latest()->get();
        $volunteer = Volunteer::latest()->take(5)->Get();
        $campaign = Campaign::latest()->take(1)->get();
        return view('home' , ['donasi'=>$donasi , 'volun'=>$volunteer , 'campaign'=>$campaign]);
    }

    public function searchVolunteer(Request $request){

        $test= $request->search;
        $volunteer = Volunteer::where('nama_depan' , 'like' , '%'.$test.'%')->get();
        
        $donasi = Donasi::latest()->get();
        $campaign = Campaign::latest()->take(1)->get();
        return view('home' , ['donasi'=>$donasi , 'volun'=>$volunteer , 'campaign'=>$campaign]);
    }

    public function aboutus(){
        $data = AboutUs::all();
        return view('aboutus' , ['data'=>$data]);
    }

    public function tentangkamipost(Request $request){
        $data = new AboutUs();
        $data->judul = $request->judul;
        $data->sub_judul = $request->subjudul;
        $data->isi = $request->isi;
        $data->save();

        return redirect()->back();
    }

    public function edittentangkami(Request $request , $id){
        $data = AboutUs::find($id);
        $data->judul = $request->judul;
        $data->sub_judul = $request->subjudul;
        $data->isi = $request->isi;
        $data->update();

        return redirect()->back();
    }

    public function deletetentangkami($id){
        $data = AboutUs::find($id);
        $data->delete();
        
        return redirect()->back();
    }

}
