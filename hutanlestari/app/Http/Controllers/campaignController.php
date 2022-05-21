<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\Models\Campaign;
use Illuminate\Support\Facades\Auth;

class campaignController extends Controller
{
    public function form(){
        return view('campaign.form');
    }

    public function index(){
        $data = Campaign::latest()->take(3)->get();
        $pagi = Campaign::paginate(9);
        return view('campaign.index' , ['data'=>$data , 'pag' => $pagi]);
    }

    public function formpost(Request $request){


        $data = new Campaign();
        $data->nama_campaign = $request->name;
        $data->deskripsi_campaign = $request->desc;
        if ($request->volunteer != null){
            $data->volunteer_check = 1;
        }else {
            $data->volunteer_check = 0;
        }

        if ($request->donasi != null){
            $data->donation_check = 1;
        }else {
            $data->donation_check = 0;
        }

        $data->start_date = $request->startdate;
        $data->end_date = $request->enddate;
        $data->target = $request->target;
        $data->verifikasi_check = 0;


        
        $file = $request->file('file');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'campaignimage';
        $file->move($tujuan_upload,$nama_file);

        $data->img = $nama_file;
        $data->donasi_terkini = 0;
        $data->save();


        return redirect()->back();
    }

    public function detail($id){
        $data = Campaign::find($id);
        return view('campaign.detail',['data'=>$data]);
    }

    public function donasi($id){
        $data = Campaign::find($id);
        return view('campaign.donasi',['data'=>$data]);
    }

    public function donasipost($id , Request  $request){
        $data = new Donasi();
        $data->user_id = Auth::user()->id;
        $data->campaign_id = $id;
        $data->jumlah_donasi = $request->nominal;
        $data->verifikasi_check = 0 ;
        $data->save();

        $x = Campaign::find($id);
        $x->donasi_terkini = $x->donasi_terkini + $request->nominal;
        $x->save();

        return redirect()->route('campaign.index');
    }

    public function volunteer($id){
        $data = Campaign::find($id);
        return view('campaign.volunteer' , ['data'=>$data]);
    }

    public function volunteerpost($id , Request  $request){
        $tes = new Volunteer();
        $tes->user_id = Auth::id();
        $tes->campaign_id = $id;
        $tes->nama_depan = $request->nama_depan;
        $tes->nama_belakang = $request->nama_belakang;
        $tes->skill = $request->skill;
        $tes->pengalaman = $request->pengalaman;
        $tes->domisili = $request->domisili;
        $tes->verifikasi_check  = 0;
        $tes->save();

        return redirect()->route('campaign.index');
    }
}