<?php

namespace App\Http\Controllers;

// use App\Models\Blog;
use App\Models\Campaign;
use App\Models\Donasi;
use App\Models\Feedback;
use App\Models\Florafauna;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class dashboardController extends Controller
{

    public function volun(){
        $data = Volunteer::where('user_id' , Auth::user()->id)->orderBy('created_at' , 'DESC')->get();
        return view('dashboard.campaign' , ['data' => $data]);
    }

    // public function blog(){
    //     $data = Blog::where('user_id' , Auth::user()->id)->orderBy('created_at' , 'DESC')->get();
    //     return view('dashboard.blog' , ['data' => $data]);
    // }

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

    public function changepassword(){
        return view('dashboard.changepassword');
    }

    public function changepasswordpost(Request $request){

        if (!(Hash::check($request->get('password_lama'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("message","Your current password does not matches with the password.");
        }else{

        }

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('password_baru'));
        $user->save();

        return redirect()->back();

    }

    public function setting(){
        return view('dashboard.setting');
    }

    public function settings($id,Request $request){
        $data = User::find(Auth::user()->id);
        $data->username = $request->username;
        $data->email = $request->email;
        $data->update();



        $test = UserDetail::find($id);
        $test->nama_lengkap = $request->nama_lengkap;
        $test->no_hp = $request->no_hp;
        $test->tanggal_lahir = $request->tanggal_lahir;
        $test->jenis_kelamin = $request->jk;
        $test->kota = $request->kota;
        $test->instagram = $request->instagram;
        $test->twitter = $request->twitter;
        $test->facebook = $request->facebook;
        $test->bio = $request->bio;

        $test->update();

        return redirect()->back();

    }

    public function dana(){
        $data = Donasi::where('user_id' , Auth::user()->id)->orderBy('created_at' , 'DESC')->get();
        return view('dashboard.dana' , ['data' => $data]);
    }

    public function flora(){
        $data = Florafauna::where('user_id' , Auth::user()->id)->orderBy('created_at' , 'DESC')->get();
        return view('dashboard.flora' , ['data' => $data]);
    }
}
