@extends('layouts.app')

@section('content')

    <div class="container">
        <h2 class="text-center text-success my-5">
           Tentang Kami
        </h2>
    </div>

        <div class="mt-1 bg-card p-3">
            @foreach($data as $x)
                <div class="card p-3 my-3 mx-5" >
                    <h3 class="fw-bold">{{$x->judul}}</h3>
                    <h5>{{$x->sub_judul}}</h5>
                    <p>{{$x->isi}}</p>

                    @if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
                            <div class="d-flex d-block mx-auto">
                                <button class="btn btn-warning d-block m-1 "  data-toggle="modal" data-target="#exampleModal{{$x->id}}"> Edit </button>
                                <a class="btn btn-danger d-block m-1 " href="{{route('admin.tentangkamidelete' , ['id'=>$x->id])}}">Delete</a>
                            </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$x->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Input Tentang Kami</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{route('admin.tentangkamiedit' , ['id'=>$x->id])}}" method="post">
                                        @csrf
                                        @method('post')
                                        <div class="modal-body">
                                            <div class="form-group m-1">
                                                <label for="">Judul</label>
                                                <input type="text" name="judul" class="form-control" value="{{$x->judul}}">
                                            </div>

                                            <div class="form-group m-1">
                                                <label for="">Sub Judul</label>
                                                <input type="text" name="subjudul" class="form-control" value="{{$x->sub_judul}}">
                                            </div>

                                            <div class="form-group m-1">
                                                <label for="">Isi</label>
                                                <input type="text" name="isi" class="form-control" value="{{$x->isi}}">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    @endif
                </div>


            @endforeach
           @if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')

                <button class="btn btn-success d-block mx-auto" data-toggle="modal" data-target="#exampleModal"> + Buat Tentang Kami  </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Input Tentang Kami</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{route('admin.tentangkamipost')}}" method="post">
                                @csrf
                                @method('post')
                                <div class="modal-body">
                                    <div class="form-group m-1">
                                        <label for="">Judul</label>
                                        <input type="text" name="judul" class="form-control">
                                    </div>

                                    <div class="form-group m-1">
                                        <label for="">Sub Judul</label>
                                        <input type="text" name="subjudul" class="form-control">
                                    </div>

                                    <div class="form-group m-1">
                                        <label for="">Isi</label>
                                        <input type="text" name="isi" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
               @endif

        </div>




@endsection

