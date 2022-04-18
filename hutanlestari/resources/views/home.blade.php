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
                    <div class="card-body" style="height: 200px">

                    </div>
                </div>

                <div class="card w-50 mx-3">
                    <div class="card-header">
                        <h5 class="text-success text-center">Volunteer</h5>
                    </div>
                    <div class="card-body" style="height: 200px">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contaner p-3 mb-3 bg-card">
        <div class="container row justify-content-center align-items-md-stretch">
            <div class="col-1"></div>
            <div class="col-6">
                <h5>
                    Ayo ikuti <span class="text-success">#CampaignTerkini</span>
                    dari HutanLestari yang sedang berjalan saat ini..
                    Jangan sampai ketinggalan, ya!
                </h5>
            </div>

            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <p>campaign terakhir</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
