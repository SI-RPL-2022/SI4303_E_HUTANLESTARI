<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script></head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
    .bg-success{
        background-color: #04C35C !important;
    }

    .bg-card{
        background-color: rgba(34, 105, 54, 0.15);
    }

    .bg-sakti{
        background: rgb(255,255,255);
        background: linear-gradient(142deg, rgba(255,255,255,1) 75%, rgba(255,231,0,1) 100%, rgba(0,212,255,1) 100%);
    }
</style>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-success shadow-sm">
        <div class="container-sm">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item active">
                        <img src="{{asset('gmbr/logo.png')}}"  alt="" style="height: 40px">

                    </li>
                    <li class="nav-item active">

                        <a class="nav-link" href="#">HutanLestari</a>
                    </li>
                </ul>
            </div>
            <div class="mx-auto order-0">
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                    </ul>
                </div>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item mx-2">
                                <a class="btn btn-success" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn btn-outline-success" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a href="{{route('home')}}" class="dropdown-item">
                                    home
                                </a>

                                @if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
                                    <a href="{{route('admin.verifdana')}}" class="dropdown-item">
                                        Dashborad admin
                                    </a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="pb-4">
        <div class="d-flex">
            <div class="col-1"></div>
            <div class="col-3 p-3">
                <div class="card bg-success shadow">
                    <div class="card-body fs-3">
                        <div class="d-flex align-items-end justify-content-end">
                            <a href="#">
                                <svg width="34" height="60" viewBox="0 0 74 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M36.6505 22.0926C34.0653 22.0926 31.6444 22.859 29.8114 24.2598C27.987 25.6605 26.9754 27.5105 26.9754 29.4861C26.9754 31.4616 27.987 33.3116 29.8114 34.7124C31.6444 36.1065 34.0653 36.8795 36.6505 36.8795C39.2358 36.8795 41.6567 36.1065 43.4897 34.7124C45.314 33.3116 46.3257 31.4616 46.3257 29.4861C46.3257 27.5105 45.314 25.6605 43.4897 24.2598C42.5944 23.5704 41.5288 23.0238 40.3547 22.6517C39.1806 22.2797 37.9215 22.0896 36.6505 22.0926ZM72.2989 37.6526L66.6443 33.9591C66.9123 32.7038 67.0506 31.422 67.0506 30.1468C67.0506 28.8716 66.9123 27.5832 66.6443 26.3344L72.2989 22.641C72.726 22.3616 73.0318 21.9894 73.1754 21.5739C73.319 21.1585 73.2938 20.7195 73.103 20.3153L73.0252 20.1435C71.469 16.818 69.1372 13.7355 66.1428 11.0454L65.9871 10.9066C65.6235 10.5799 65.1389 10.345 64.5972 10.233C64.0554 10.1209 63.4819 10.137 62.9523 10.2789L55.9316 12.1884C53.3377 10.563 50.4499 9.28124 47.32 8.38927L45.9625 2.77975C45.8601 2.35717 45.5918 1.9684 45.1934 1.6651C44.795 1.3618 44.2852 1.15832 43.7318 1.0817L43.4983 1.04866C39.0023 0.427586 34.2642 0.427586 29.7682 1.04866L29.5347 1.0817C28.9813 1.15832 28.4715 1.3618 28.0731 1.6651C27.6746 1.9684 27.4064 2.35717 27.304 2.77975L25.9379 8.4157C22.8376 9.31478 19.9495 10.5935 17.3868 12.2016L10.3142 10.2789C9.78472 10.1358 9.21083 10.1192 8.66875 10.2314C8.12667 10.3435 7.64207 10.579 7.27934 10.9066L7.12371 11.0454C4.13465 13.7384 1.80345 16.8201 0.241325 20.1435L0.163509 20.3153C-0.22557 21.1412 0.0943398 22.0662 0.967608 22.641L6.6914 26.3741C6.42337 27.6162 6.29368 28.8848 6.29368 30.1402C6.29368 31.4088 6.42337 32.6773 6.6914 33.9063L0.9849 37.6394C0.55774 37.9188 0.252016 38.291 0.108381 38.7064C-0.0352543 39.1219 -0.00999468 39.5609 0.180801 39.9651L0.258618 40.1369C1.82358 43.4603 4.13212 46.5327 7.141 49.235L7.29664 49.3738C7.66025 49.7005 8.14486 49.9353 8.68662 50.0474C9.22838 50.1594 9.80185 50.1434 10.3315 50.0014L17.4041 48.0787C19.9806 49.6975 22.8512 50.9793 25.9552 51.8647L27.3213 57.5006C27.4237 57.9232 27.6919 58.312 28.0904 58.6153C28.4888 58.9186 28.9986 59.122 29.552 59.1987L29.7854 59.2317C34.3257 59.8561 38.9754 59.8561 43.5156 59.2317L43.7491 59.1987C44.3025 59.122 44.8122 58.9186 45.2107 58.6153C45.6091 58.312 45.8774 57.9232 45.9798 57.5006L47.3373 51.8911C50.4672 50.9925 53.355 49.7173 55.9489 48.092L62.9696 50.0014C63.4991 50.1445 64.073 50.1611 64.615 50.049C65.1571 49.9369 65.6417 49.7014 66.0044 49.3738L66.1601 49.235C69.169 46.5194 71.4775 43.4603 73.0425 40.1369L73.1203 39.9651C73.4921 39.1458 73.1721 38.2274 72.2989 37.6526ZM36.6505 41.1015C28.2551 41.1015 21.4505 35.9017 21.4505 29.4861C21.4505 23.0705 28.2551 17.8706 36.6505 17.8706C45.046 17.8706 51.8506 23.0705 51.8506 29.4861C51.8506 35.9017 45.046 41.1015 36.6505 41.1015Z" fill="black"/>
                                </svg>
                            </a>
                        </div>

                        <img src="{{asset('gmbr/img_1.png')}}" class="w-50 d-block mx-auto" alt="">
                        <h5 class="text-center mt-3">{{\Illuminate\Support\Facades\Auth::user()->username}}</h5>

                        <p class="text-center fs-1" >
                            <svg width="20" height="31" viewBox="0 0 44 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.11666 1.69141C5.59149 1.36405 6.16166 1.11009 6.78939 0.946385C7.41712 0.782678 8.08807 0.712953 8.75777 0.741832C9.42748 0.770711 10.0806 0.897534 10.674 1.1139C11.2674 1.33026 11.7873 1.63122 12.1995 1.99684L17.0706 6.31774C17.9634 7.11034 18.2782 8.14279 17.9255 9.11715L16.441 13.2207C16.3643 13.4332 16.3684 13.6559 16.4531 13.867C16.5377 14.0781 16.7 14.2705 16.9241 14.4255L23.5917 19.0294C23.8165 19.1844 24.0956 19.2966 24.4019 19.3551C24.7082 19.4135 25.0311 19.4162 25.3394 19.3629L31.2797 18.338C31.9761 18.2177 32.7029 18.2084 33.4053 18.3106C34.1077 18.4129 34.7672 18.6241 35.334 18.9282L41.5919 22.2897C43.8416 23.4983 44.0478 25.7937 42.0342 27.1821L39.2282 29.1196C37.2201 30.5062 34.2187 31.1152 31.4208 30.435C24.2598 28.6952 17.7579 25.8646 12.3976 22.1529C7.02248 18.4523 2.9229 13.9636 0.40291 9.01971C-0.57946 7.08973 0.302502 5.01547 2.31066 3.62889L5.11666 1.69141Z" fill="black"/>
                            </svg>
                            0811238004
                        </p>

                        <p class="text-center">
                            <svg width="15" height="28" viewBox="0 0 20 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 28H20V23C19.9979 21.1441 19.2597 19.3649 17.9474 18.0526C16.6351 16.7403 14.8559 16.0021 13 16H7C5.14413 16.0021 3.36489 16.7403 2.05259 18.0526C0.740295 19.3649 0.00211736 21.1441 0 23V28ZM3 7C3 8.38447 3.41054 9.73785 4.17971 10.889C4.94888 12.0401 6.04213 12.9373 7.32122 13.4672C8.6003 13.997 10.0078 14.1356 11.3656 13.8655C12.7235 13.5954 13.9708 12.9287 14.9497 11.9497C15.9287 10.9708 16.5954 9.7235 16.8655 8.36563C17.1356 7.00776 16.997 5.6003 16.4672 4.32122C15.9373 3.04213 15.0401 1.94888 13.889 1.17971C12.7378 0.410543 11.3845 0 10 0C8.14348 0 6.36301 0.737498 5.05025 2.05025C3.7375 3.36301 3 5.14348 3 7Z" fill="black"/>
                            </svg>

                            {{\Illuminate\Support\Facades\Auth::user()->username}}
                        </p>

                        <p class="text-center">
                            <svg width="15" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V22C0 22.5304 0.210714 23.0391 0.585786 23.4142C0.960859 23.7893 1.46957 24 2 24H30C30.5304 24 31.0391 23.7893 31.4142 23.4142C31.7893 23.0391 32 22.5304 32 22V2C32 1.46957 31.7893 0.960859 31.4142 0.585786C31.0391 0.210714 30.5304 0 30 0ZM28.46 22H3.66L10.66 14.76L9.22 13.37L2 20.84V3.52L14.43 15.89C14.8047 16.2625 15.3116 16.4716 15.84 16.4716C16.3684 16.4716 16.8753 16.2625 17.25 15.89L30 3.21V20.71L22.64 13.35L21.23 14.76L28.46 22ZM3.31 2H28.38L15.84 14.47L3.31 2Z" fill="black"/>
                            </svg>

                            {{\Illuminate\Support\Facades\Auth::user()->email}}
                        </p>

                        <a class="btn btn-danger w-100" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-7 p-3">
                <div class="d-flex align-items-center">

                    <a href="{{route('admin.dashboard')}}" class="btn btn-success text-black mx-1"> Dashboard  <br> Admin </a>
                    <a href="{{route('admin.verifdana')}}" class="btn btn-success text-black mx-1" > Verifikasi Donasi <br> Dana</a>

                    <a href="{{route('admin.verifflora')}}" class="btn btn-success text-black mx-1"> Verifikasi Donasi <br> Flora/Fauna</a>

                    <a href="{{route('admin.verifvolun')}}" class="btn btn-success text-black mx-1"> Verifikasi  <br> Volunteer</a>

                    <a href="#" class="btn btn-success text-black mx-1"> Verifikasi  <br> Campaign</a>

                    <a href="#" class="btn btn-success text-black mx-1"> Verifikasi  <br> Blog</a>
                </div>

                @yield('content')
            </div>


        </div>
        <div class="row bg-white ">
            <div class="col-1"></div>
            <div class="col-6">
                <div class="d-flex align-items-center mb-4">
                    <img src="{{asset('gmbr/pohon.png')}}" width="50px" class="mr-3" alt="">
                    <h4>Hutan Lestari</h4>


                </div>
                <h5>Website Penggalangan Dana <br>Online untuk Konservasi Hutan,<br> Flora dan Fauna</h5>
            </div>

            <div class="col-2">
                <a href="#" class="text-success">Tentang Kami</a> <br>
                <a href="#" class="text-success">Profil Kami</a><br>
                <a href="#" class="text-success">Kontak</a>
            </div>

            <div class="col-2">
                <a href="#" class="text-success">Feedback</a><br>
                <a href="#" class="text-success">Customer Service</a>
            </div>
        </div>

    </main>


</div>


@stack('script')
</body>
</html>
