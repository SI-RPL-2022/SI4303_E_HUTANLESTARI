@extends('layouts.dashboarduser')

@section('content')

    <div class="card mt-3 p-3 mr-4 bgdashijo shadow">
        <div class="card-head bgdashijo rounded ">
            <h4 class="text-black text-center p-2 bg-white rounded" >Donasi Flora & Fauna</h4>
        </div>

        <div class="card-body bgbawahdash rounded " >
            <?php $x=0?>
            <h4>List Campaign</h4>
            <div class="" style="height: 250px ; overflow: scroll">
                @foreach($data as $x)


                    <div class="mt-2 bg-white rounded p-3 mr-3 shadow">
                        <h5>{{$x->nama_flora}}</h5>
                        <div class="d-flex justify-content-between">
                            <p >Tanggal Pengiriman : {{$x->tanggal_pengiriman}}</p>
                            <p>Tipe Pengiriman : {{$x->tipe_pengiriman}}</p>
                        </div>
                        <div class="d-flex justify-content-between">


                            @if($x->verifikasi_check == 0 )
                                <p class="text-danger"> Belum Di verifikasi</p>
                            @else
                                <p class="text-success"> sudah Di verifikasi</p>
                            @endif


                        </div>

                        <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal{{$x->id}}">Detail Donasi</button>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$x->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$x->nama_flora}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img class="d-block mx-auto" src="{{asset('/florafaunaimg/'.$x->img)}}" alt="">
                                </div>
                                <div class="modal-body">
                                    <p>Tipe Donasi : {{$x->tipe_donasi}}</p>
                                    <p >Tanggal Pengiriman : {{$x->tanggal_pengiriman}}</p>
                                    <p>Tipe Pengiriman : {{$x->tipe_pengiriman}}</p>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </tr>
                @endforeach

            </div>

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
