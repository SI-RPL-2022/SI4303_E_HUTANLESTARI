@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex align-content-between mt-2 justify-content-between">
            <h3 class="text-success " style="margin-left: 150px">Blog</h3>
            <a href="{{route('blog.form')}}" class="text-center btn btn-success">+ Buat Blog</a>
        </div>



        <div class="d-flex container flex-wrap  align-content-between justify-content-center">
            <?php $x=0?>
            @foreach($pag as $x)
                <div class="mx-1 w-25 my-3">
                    <div class="card rounded-3 shadow">
                        <div class="rounded-3 shadow" style="height: 200px;overflow: hidden" >
                            <img src="{{asset('blogimage/'.$x->img)}}" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$x->judul_artikel}}</h5>

                            <p style="text-align: right" class="mt-2 text-black-50">Penulis : {{$x->nama_penulis}}</p>
                            <p style="text-align: right" class="mt-2 text-black-50">Kategori : {{$x->kategori}}</p>
                            <p style="text-align: right" class="mt-2 text-black-50">Tanggal Post : {{$x->tanggal_posting}}</p>
                            <a href="{{route('blog.detail' , ['id'=>$x->id])}}" class="btn btn-outline-success w-100 mt-1">Detail Blog</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-center">
            {{$pag->links()}}
        </div>
    </div>
@endsection
