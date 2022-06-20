@extends('layouts.app')
@section('content')
    <div class="bg-card">
        <div class="container p-5">
            <h3 class="text-center rounded bg-white p-2">
                {{$data->judul_artikel}}
            </h3>

            <h5 class="rounded w-50 text-success p-2 ">
                Kategori {{$data->kategori}}
            </h5>

            <img src="{{asset('blogimage/'.$data->img)}}" alt="" class="img-fluid my-3 d-block mx-auto">

            <div class="m-3">
                <p style="text-align: left" class="mt-2 text-black-50">Penulis : {{$data->nama_penulis}}</p>
                <p style="text-align: left" class="mt-2 text-black-50">Kategori : {{$data->kategori}}</p>
                <p style="text-align: left" class="mt-2 text-black-50">Tanggal Post : {{$data->tanggal_posting}}</p>
            </div>

            <p>
               {{$data->isi_artikel}}    </p>
        </div>
    </div>
@endsection
