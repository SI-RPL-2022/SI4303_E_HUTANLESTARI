@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
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
