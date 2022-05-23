@extends('layouts.app')

@section('content')
<div class="img img-fluid overflow-hidden" style="max-height: 350px">
        <img src="{{asset('gmbr/back1.png')}}" alt="">
    </div>
<div class="container-fluid bg-card p-3 mb-3">
    <div class="container">
        <p class="text-center">Hal sederhana, jadi lebih bermakna bersama Hutan Lestari.
            Buat aksi penanaman dan lingkungan dengan mudah, aman dan transparan.
            Mulai <span class="text-success">#CampaginPertama </span>kamu.</p>
    </div>
</div>

    <div class="container-fluid p-3 mb-3">
            <div class="container">
                <h4 class="text-center text-success mb-3">
                    Donasi dan Relawan
                </h4>
                <div class="d-flex justify-content-center">
                <div class="card w-50 mx-3">
                    <div class="card-header">
                        <h5 class="text-success text-center">Donasi</h5>
                    </div>
                    <div class="card-body" style="height: 200px ; overflow: scroll">
                    @foreach($donasi as $t)
                            <div class="d-flex flex-wrap pl-5 mt-2">
                                <img src="{{asset('gmbr/img.png')}}" style="width: 70px ; height: 70px" alt="">
                                <div class="ml-3">
                                <h5>{{$t->users->name}}</h5>
                                    <p class="text-black-50">Telah Berdonasi Sejumlah Rp{{$t->jumlah_donasi}}</p>
                                    <hr>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="card w-50 mx-3">
                    <div class="card-header">
                        <h5 class="text-success text-center">Relawan</h5>
                    </div>
                    <div class="card-body" style="height: 200px ; overflow: scroll">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contaner p-3 mb-3 bg-card">
        <div class="container row justify-content-center align-items-md-stretch">
            <div class="col-1"></div>
            <div class="col-7">
                <h5>
                    Ayo ikuti <span class="text-success">#CampaignTerkini</span>
                    dari HutanLestari yang sedang berjalan saat ini..
                    Jangan sampai ketinggalan, ya!
                </h5>
            </div>

            <div class="col-3">
                <div class="card w-100">
                    <div class="card-body w-100">
                        @foreach($campaign as $x)
                            <a href="{{route('campaign.detail' , ['id'=> $x->id])}}">
                                <img class="d-block mx-auto img-fluid" src="{{asset('/campaignimage/'.$x->img)}}" alt="">
                                <h5 class="text-center mt-1 text-success" >{{$x->nama_campaign}}</h5>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
