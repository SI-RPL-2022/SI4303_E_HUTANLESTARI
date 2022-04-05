<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>layouts app</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
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
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-sm">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto align-items-center">
                        <li class="nav-item active">
                            <img src="gmbr/logo.png"  alt="" style="height: 40px">
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">HutanLestari</a>
                        </li>
                    </ul>
                </div>
                <div class="mx-auto order-0">
                    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Campaign</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                                <li class="nav-item mx-2">
                                    <a class="btn btn-success" href="">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-outline-success" href="">Register</a>
                                </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Nama user
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href=""></a>
                                    <form id="logout-form" action="" method="POST" class="d-none">
                                    </form>
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</body>
</html>
