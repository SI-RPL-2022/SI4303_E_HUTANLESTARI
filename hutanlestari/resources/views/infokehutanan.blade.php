<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Informasi Kehutanan</title>
</head>

<body>
  <section>
      {{-- info grafik --}}
      <div class="bg-card">
        <div class="container p-3">
            <h4 class="text-center p-2 w-25 mx-auto mb-5" style="background: rgba(255, 255, 255, 0.5)">
                Informasi Kehutanan
            </h4>

        <img src="{{ asset('gmbr/pict1.png') }}" class="card-img-top" alt="illustration-image">
        <div class="card-body">
          <p class="card-text">Botanic Gardens Conservation International [BGCI] memberikan laporan terbarunya mengenai kondisi pepohonan di Planet Bumi.
            Dari laporannya berjudul State of the Worlds Trees [2021] dijelaskan bahwa dalam lima tahun terakhir, sekitar 17.500 dari 60.000 spesies pohon di dunia terancam punah. 
            Artinya, 30 persen pohon yang hidup di muka Bumi berada dalam zona merah. </p>
        </div>
      </div>

            {{-- info flora --}}
            <div class="container">
              <div class="container p-3">
                  <h5 class="text-center p-2 w-50 mx-auto mb-5 rounded" style="background: #DEE9E1">
                      Flora khas Indonesia yang Langka & Terancam punah,
                      Yuk Kita Jaga!
                  </h5>
      
                  <div class="row">
                      <div class="col"></div>
                      <div class="col-3">
                              <div class="card bg-sakti">
                              <div class="card-body">
                                  <img class="img d-block mx-auto" src="{{asset('gmbr/semar.png')}}">
                                  <h5 class="mb-3">Kantong semar (Nepenthes)</h5>
                                  <p>
                                      Kantong semar adalah salah satu tumbuhan langka yang perlu dilestarikan. Kantong semar punya bentuk yang unik karena akan membuka dan memangsa serangga di sekitarnya saat dewasa.
                                  </p>
                              </div>
                          </div>
                          </a>
                      </div>
                      <div class="col-3">
                              <div class="card bg-sakti">
                                  <div class="card-body">
                                      <img class="img d-block mx-auto" src="{{asset('gmbr/semar.png')}}">
                                      <h5 class="mb-3">Kantong semar (Nepenthes)</h5>
                                      <p>
                                          Kantong semar adalah salah satu tumbuhan langka yang perlu dilestarikan. Kantong semar punya bentuk yang unik karena akan membuka dan memangsa serangga di sekitarnya saat dewasa.
                                      </p>
                                  </div>
                              </div>
                          </a>
                      </div>
                      <div class="col-3">
                              <div class="card bg-sakti">
                                  <div class="card-body">
                                      <img class="img d-block mx-auto" src="{{asset('gmbr/semar.png')}}">
                                      <h5 class="mb-3">Kantong semar (Nepenthes)</h5>
                                      <p>
                                          Kantong semar adalah salah satu tumbuhan langka yang perlu dilestarikan. Kantong semar punya bentuk yang unik karena akan membuka dan memangsa serangga di sekitarnya saat dewasa.
                                      </p>
                                  </div>
                              </div>
                          </a>
                      </div>
                      <div class="col"></div>
                  </div>
              </div>
          </div>


      {{-- info fauna --}}
      <div class="bg-card">
        <div class="container p-3">
            <h5 class="text-center p-2 w-50 mx-auto mb-5 rounded" style="background: #DEE9E1">
                Fauna yang Hampir Punah dan Dilindungi di Indonesia
            </h5>

            <div class="row">
                <div class="col"></div>
                <div class="col-4">
                    <img src="{{asset('gmbr/grafkomodo1.png')}}" alt="" class="d-block mx-auto">
                    <img src="{{asset('gmbr/komodo.png')}}" alt="" class="d-block mx-auto">
                </div>
            <div class="col-1">

            </div>

            <div class="col-4">
                <img src="{{asset('gmbr/graforangutan.png')}}" alt="" class="d-block mx-auto">
                <img src="{{asset('gmbr/orut.png')}}" alt="" class="d-block mx-auto">
            </div>

            <div class="col">
            </div>
        </div>
    </div>
</div>