@extends('layouts.dashboardadmin')

@section('content')

    <div class="card mt-3 p-3 mr-4 bg-success">
        <div class="card-head bg-success ">
            <h4 class="text-black text-center p-2 bg-white" >Verifikasi Blog</h4>
        </div>

        <div class="card-body bg-white">
            <table class="table table-responsive table-striped bg-white overflow-scroll" id="table_id" class="display">
                <thead>
                <tr>
                    <th scope="col">Judul Blog</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody class="overflow-scroll">
                @foreach($data as $x)
                    <tr>
                        <td>{{$x->judul_artikel}}</td>
                        <td>{{$x->users->username}}</td>
                        <td>{{$x->users->email}}</td>
                        <td>
                            <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal{{$x->id}}">Detail</button>

                        </td>
                        <td>
                            @if($x->verifikasi_check == 0 )
                                <p class="text-danger"> Belum Di verifikasi</p>
                            @else
                                <p class="text-success"> sudah Di verifikasi</p>
                            @endif
                        </td>

                        <td>
                            @if($x->verifikasi_check == 0 )
                                <div class="d-flex">
                                    <a href="{{route('admin.verifblogpost' , ['id' => $x->id])}}" class="btn btn-success mr-2"> Verifikasi</a>
                                    <a href="{{route('admin.tolakblog' , ['id'=> $x->id])}}" class="btn btn-danger"> Tolak Verifikasi</a>
                                </div>
                            @else
                                <a href="{{route('admin.tolakblog' , ['id'=> $x->id])}}" class="btn btn-danger"> Delete</a>

                            @endif

                        </td>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$x->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{$x->judul_artikel}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img class="d-block mx-auto" src="{{asset('/blogimage/'.$x->img)}}" alt="">
                                    </div>
                                    <div class="modal-body">
                                        <p>{{$x->isi_artikel}}</p>
                                        <p>Nama_penulis: {{$x->nama_penulis}}</p>
                                        <p>Kategori: {{$x->kategori}}</p>
                                        <p>Tanggal posting : {{$x->tanggal_posting}}</p>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>




    </div>

@endsection

@push('script')

    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@endpush
