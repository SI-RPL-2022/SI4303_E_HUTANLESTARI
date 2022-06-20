@extends('layouts.dashboarduser')

@section('content')

    <div class="card mt-3 p-3 mr-4 bgdashijo shadow">
        <div class="card-head bgdashijo rounded ">
            <h4 class="text-black text-center p-2 bg-white rounded" >Blog Saya </h4>
        </div>

        <div class="card-body bgbawahdash rounded " >
            <div class="d-flex justify-content-end">  <a href="" class="btn btn-success ">Lihat Blog</a> </div>
            <?php $x=0?>
            <h4>List Blog</h4>
            <div class="" style="height: 250px ; overflow: scroll">
                @foreach($data as $x)


                    <div class="mt-2 bg-white rounded p-3 mr-3 shadow">
                        <h5>{{$x->judul_artikel}}</h5>
                        <div class="d-flex justify-content-between">

                        </div>
                        <div class="d-flex justify-content-between">

                            @if($x->verifikasi_check == 0 )
                                <p class="text-danger"> Belum Di verifikasi</p>
                            @else
                                <p class="text-success"> sudah Di verifikasi</p>
                            @endif


                        </div>
                        <p>Kategori: <b>{{$x->kategori}}</b></p>
                        <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal{{$x->id}}">Detail Campaign</button>
                    </div>


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
                                    <h5>{{$x->kategori}}</h5>
                                    <p>{{$x->isi_artikel}}</p>

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
