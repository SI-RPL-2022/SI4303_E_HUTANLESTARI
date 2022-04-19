@extends('layouts.app')
@section('content')
    <div class="bg-card">
        <div class="container p-5">
            <h3 class="text-center rounded bg-white p-2">
                Flora khas Indonesia yang Langka & Terancam punah,
                Yuk Kita Jaga!
            </h3>

            @if(\Illuminate\Support\Facades\Auth::check())
                @if(\Illuminate\Support\Facades\Auth::user()->role == "admin")
                    <center> <a href="{{route('admin.informasifloraedit' , ['id'=>$data->id])}}" class="btn btn-success text-center"> Edit Flora</a></center>
                    <center> <a href="{{route('admin.deleteinformasiflora' , ['id'=>$data->id])}}" class="btn btn-danger text-center mt-2"> Delete Flora</a></center>
                @else

                @endif
            @endif

            <h5 class="rounded bg-white  w-50 text-success p-2 mt-5">
                {{$data->judul_informasi}}
            </h5>

            <img src="{{asset('informasifloraimage/'.$data->gambar)}}" alt="" class="img-fluid my-3">

            <p>
               {{$data->deskripsi}}         </p>
        </div>
    </div>
@endsection