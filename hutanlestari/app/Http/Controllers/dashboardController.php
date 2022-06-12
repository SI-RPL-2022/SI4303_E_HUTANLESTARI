<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Campaign;
use App\Models\Donasi;
use App\Models\Feedback;
use App\Models\Florafauna;
use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class dashboardController extends Controller
{

    public function volun()
    {
        $data = Volunteer::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        return view('dashboard.campaign', ['data' => $data]);

        return redirect()->back();
    }


    public function dana()
    {
        $data = Donasi::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        return view('dashboard.dana', ['data' => $data]);
    }

    public function flora()
    {
        $data = Florafauna::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        return view('dashboard.flora', ['data' => $data]);
    }

    public function feedback(){
        return view('feedback');
    }

    public function feedbackpost(Request $request){
        $data = new Feedback();
        $data->critisism = $request->critisism;
        $data->suggestion = $request->suggestion;
        $data->save();

        return redirect()->back();
    }
}
