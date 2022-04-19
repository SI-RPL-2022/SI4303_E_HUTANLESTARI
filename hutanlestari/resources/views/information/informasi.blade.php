
    @extends('layouts.app')


    @section('content')    

      {{-- info grafik --}}
      <div class="bg-card">
        <div class="container p-3">
            <h4 class="text-center p-2 w-50 mx-auto mb-5 rounded bg-white">
                Informasi Kehutanan
            </h4>

        <img src="{{ asset('gmbr/pict1.png') }}" alt="" class="img d-block align-items-center mx-auto justify-content-center">
        <div class="card-body">
          <p class="card-text">Botanic Gardens Conservation International [BGCI] memberikan laporan terbarunya mengenai kondisi pepohonan di Planet Bumi.
            Dari laporannya berjudul State of the Worlds Trees [2021] dijelaskan bahwa dalam lima tahun terakhir, sekitar 17.500 dari 60.000 spesies pohon di dunia terancam punah. 
            Artinya, 30 persen pohon yang hidup di muka Bumi berada dalam zona merah. </p>
        </div>
      </div>
      </div>

            {{-- info flora --}}
            <div class="container">
              <div class="container p-3">
                  <h5 class= "text-center p-2 w-50 mx-auto mb-5 rounded" style="background-color: rgba(34, 105, 54, 0.15)">
                      Berikut Ini Contoh Flora khas Indonesia yang Langka & Terancam punah,  
                      Yuk Kita Jaga!
                  </h5>

                  @if(\Illuminate\Support\Facades\Auth::check())
                  @if(\Illuminate\Support\Facades\Auth::user()->role == "admin")
                      <a href="{{route('admin.informasifloraform')}}" class="btn btn-success"> Tambah Flora</a>
                  @else
  
                      @endif
              @endif
      
                  <div class="row">
                      <div class="col"></div>
                      @foreach($flora as $f)
                      <div class="col-3">
                        <a href="{{route('informasi.flora' , ['id'=>$f->id])}}" style="text-decoration: none;color: black" >
                              <div class="card bg-sakti">
                              <div class="card-body p-3" style="height: 350px;overflow: hidden" >
                                <img class="img d-block mx-auto rounded-circle w-50" src="{{asset('informasifloraimage/'.$f->gambar)}}">
                                <h5 class="mb-3">{{$f->nama_flora}}</h5>
                                <p>
                                    {{$f->deskripsi}}
                                </p>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                    <div class="col"></div>
                </div>
            </div>
        </div>


      {{-- info fauna --}}
      <div class="bg-card">
        <div class="container p-3">
            <h5 class="text-center p-2 w-50 mx-auto mb-5 rounded bg-white">
                Berikut Merupakan Contoh Fauna yang Hampir Punah dan Dilindungi di Indonesia
            </h5>

            <div class="row">
                <div class="col"></div>
                <div class="col-4">
                    <img src="{{asset('gmbr/grafkomodo1.png')}}" alt="" class="d-block mx-auto">
                    &emsp;
                    <img src="{{asset('gmbr/komodo.png')}}" alt="" class="d-block mx-auto">
                    &emsp;
                    <a href="" class="btn btn-secondary text-center w-100" style="background-color: rgba(34, 105, 54, 0.349); color: black"><b>Komodo</b></a>
                </div>
            <div class="col-1">

            </div>

            <div class="col-4">
                <img src="{{asset('gmbr/graforangutan.png')}}" alt="" class="d-block mx-auto">
                &emsp;
                <img src="{{asset('gmbr/orut.png')}}" alt="" class="d-block mx-auto">
                &emsp;
                <a href="" class="btn btn-secondary text-center w-100" style="background-color: rgba(34, 105, 54, 0.349); color: black"><b>Orangutan</b></a>
            </div>

            <div class="col">

            </div>
        </div>

    </div>

</div>
@endsection