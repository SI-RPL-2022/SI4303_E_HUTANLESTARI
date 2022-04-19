@extends('layouts.app')

@section('content')
  <div class="container">
    <h3 class="text-center text-success my-3">Campaign Terkini</h3>
    <div class="row">
        <div class="col">

        </div>

        <?php $x=0?>
        @foreach($data as $x)
        <div class="col-3">
          <div class="card rounded-3">
              <img src="{{asset('campaignimage/'.$x->img)}}" class="card-img-top" alt="poster campaign">
              <div class="card-body">
                  <h5 class="card-title">{{$x->nama_campaign}}</h5>
                  <p class="card-text mb-3">Rp.{{$x->donasi_terkini}}</p>
                  <?php

                    $y =    \Carbon\Carbon::now()->format('Y-m-d');
                    $t = \Carbon\Carbon::parse($x->end_date)->diffInDays($y);
                  ?>
                  <p style="text-align: right">{{$t}} Hari Lagi</p>
                  <div class="progress">
                      <div class="progress-bar bg-success" style="width: <?php
                        if ($x->donasi_terkini >= $x->target){
                            echo "100%";
                        }else {
                          $lebar =  $x->donasi_terkini / $x->target * 100;
                          echo $lebar."%";
                        }
                        ?>;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <a href="{{route('campaign.detail' , ['id'=>$x->id])}}" class="btn btn-outline-success w-100 mt-3">Detail Campaign</a>
            </div>
        </div>
      </div>
        @endforeach

      <div class="col"></div>
    </div>

    <div class="d-flex align-content-between mt-2 justify-content-between">
      <h3 class="text-success py-3" style="margin-left: 150px">Campaign</h3>
      <a href="{{route('campaign.form')}}" class="text-center btn btn-success">Buat Campaign</a>
    </div>

    <div class="d-flex container flex-wrap  align-content-between justify-content-center">
      <?php $x=0?>
      @foreach($pag as $x)
      <div class="mx-1 w-25 my-3">
        <div class="card rounded-3">
            <img src="{{asset('campaignimage/'.$x->img)}}" class="card-img-top" alt="poster campaign">
            <div class="card-body">
                <h5 class="card-title">{{$x->nama_campaign}}</h5>
                <p class="card-text mb-1">Rp.{{$x->target}}</p>
                <?php

                  $y =    \Carbon\Carbon::now()->format('Y-m-d');
                  $t = \Carbon\Carbon::parse($x->end_date)->diffInDays($y);
                ?>
                <p style="text-align: right">{{$t}} Hari Lagi</p>
                <div class="progress">
                  <div class="progress-bar bg-success"  style="width: <?php
                  if ($x->donasi_terkini >= $x->target){
                      echo "100%";
                  }else {
                      $lebar =  $x->donasi_terkini / $x->target * 100;
                      echo $lebar."%";
                  }
                  ?>;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
                <a href="{{route('campaign.detail' , ['id'=>$x->id])}}" class="btn btn-outline-success w-100 mt-3">Detail Campaign</a>
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