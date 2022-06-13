@extends('layouts.dashboarduser')

@section('content')

    <div class="card mt-3 p-3 mr-4 bgdashijo shadow">
        <div class="card-head bgdashijo rounded ">
            <h4 class="text-black text-center p-2 bg-white rounded" >Donasi </h4>
        </div>

        <div class="card-body bgbawahdash rounded " >
            <div class="d-flex justify-content-end">  <a href="" class="btn btn-success ">Lihat Campaign</a> </div>
            <?php $x=0?>
            <h4>List Campaign</h4>
            <div class="" style="height: 250px ; overflow: scroll">
                @foreach($data as $x)

                    <?php

                    $y =    \Carbon\Carbon::now()->format('Y-m-d');
                    $t = \Carbon\Carbon::parse($x->end_date)->diffInDays($y);
                    ?>

                    <div class="mt-2 bg-white rounded p-3 mr-3 shadow">
                        <h5>{{$x->campaignss['nama_campaign']}}</h5>
                        <div class="d-flex justify-content-between">
                            <p >Tanggal Mulai : {{$x->campaignss['start_date']}}</p>
                            <p>Tanggal Selesai : {{$x->campaignss['end_date']}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            @if($t <= 0)
                                <p class="text-success"> Campaign Telah Selesai</p>
                            @else
                                <p>{{$t}} Hari Lagi</p>
                            @endif

                            @if($x->verifikasi_check == 0 )
                                <p class="text-danger"> Belum Di verifikasi</p>
                            @else
                                <p class="text-success"> sudah Di verifikasi</p>
                            @endif


                        </div>
                        <p>Jumlah Donasi : <b>Rp{{$x->jumlah_donasi}}</b></p>
                        <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal{{$x->campaignss->nama_campaign}}">Detail Campaign</button>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$x->campaignss->nama_campaign}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$x->campaignss->nama_campaign}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img class="d-block mx-auto" src="{{asset('/campaignimage/'.$x->campaignss->img)}}" alt="">
                                </div>
                                <div class="modal-body">
                                    <p>{{$x->campaignss->deskripsi_campaign}}</p>
                                    @if($x->campaignss->volunteer_check = 1 && $x->campaignss->donation_check == 1)
                                        <p> Type : Volunteer dan donasi</p>
                                    @elseif($x->campaignss->volunteercheck = 1 && $x->campaignss->donation_check == 0)
                                        <p>Type : volunteer</p>
                                    @else
                                        <p>Type : Donasi</p>
                                    @endif
                                    <p>Tanggal Mulai : {{$x->campaignss->start_date}}</p>
                                    <p>Tanggal Selesai : {{$x->campaignss->end_date}}</p>
                                    <p>Target : {{$x->campaignss->target_volunteer}}</p>
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
