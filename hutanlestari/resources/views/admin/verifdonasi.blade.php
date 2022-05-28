@extends('layouts.dashboardadmin')

@section('content')

    <div class="card mt-3 p-3 bg-success " >
        <div class="card-head bg-success ">
            <h4 class="text-black text-center p-2 bg-white" >Verifikasi Donasi Dana</h4>
        </div>

        <div class="card-body bg-white">
            <table class="table table-responsive table-striped bg-white container-fluid"  id="table_id"  class="display">

                <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Campaign</th>
                    <th scope="col">Pesan Yang Di sampaikan</th>
                    <th scope="col">Email</th>
                    <th scope="col">Donasi</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $x)
                    <tr>
                        <td>{{$x->users->username}}</td>
                        <td>{{$x->campaignss->nama_campaign}}</td>
                        <td style="width: 50px !important;">{{$x->pesan}}</td>
                        <td>{{$x->users->email}}</td>

                        <td>
                            <p>{{$x->jumlah_donasi}}</p>

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
                                    <a href="{{route('admin.verifdanapost' , ['id' => $x->id])}}" class="btn btn-success mr-2"> Verifikasi</a>
                                    <a href="{{route('admin.tolakdana' , ['id'=> $x->id])}}" class="btn btn-danger"> Tolak Verifikasi</a>
                                </div>
                            @else


                            @endif

                        </td>
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