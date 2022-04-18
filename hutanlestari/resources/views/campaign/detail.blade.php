@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="card bg-card mt-5 p-4">
                <img src="{{asset('campaignimage/'.$data->img)}}" class="w-25 d-block mx-auto mb-3" alt="poster campaign">
                <h4 class="text-center mb-5">{{$data->nama_campaign}}</h4>

                <h5 class="mb-1">Description</h5>
                <p class="mb-2">{{$data->deskripsi_campaign}}</p>

                <h5 class="mb-1">Date</h5>
                <p class="mb-2">{{$data->start_date}} - {{$data->end_date}}</p>

                <h5 class="mb-1">Type</h5>
                @if($data->volunteer_check != 0 && $data->donation_check != 0)
                    <p class="mb-2">Volunteer dan Donation</p>
                @elseif($data->volunteer_check != 0)
                    <p class="mb-2">Volunteer</p>
                @else
                    <p class="mb-2">Donation</p>
                @endif
                <h5 class="mb-1">Target</h5>
                <p class="mb-2">Rp.{{$data->target}}</p>

                <div class="row">
                    @if($data->donation_check != 0)
                    <div class="col">
                        <a href="{{route('campaign.donasi' , ['id'=>$data->id])}}" class="w-100 btn btn-success">Donation</a>
                    </div>
                    @else

                    @endif
                    <div class="col-1"></div>
                    @if($data->volunteer_check != 0)
                    <div class="col">
                        <a class="w-100 btn btn-success">Volunteer</a>
                    </div>
                    @else
                        <div class="col"></div>
                    @endif
                </div>
            </div>
        </div>
@endsection