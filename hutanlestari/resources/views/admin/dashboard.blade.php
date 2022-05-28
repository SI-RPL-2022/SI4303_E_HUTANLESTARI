@extends('layouts.dashboardadmin')

@section('content')

    <div class="card mt-2">
        <div class="card-body">
            <div class="row">
                <div class="col-6 p-3">
                    <h5 class="text-center">Jumlah Campaign Volunteer Dan Donasi</h5>

                    <canvas id="myChart"></canvas>
                </div>

                <div class="col-6 p-3">

                    <h5 class="text-center">Jumlah Campaign Volunteer Dan Donasi Yang Selesai</h5>
                    <div class="mt-5">
                        <div class="card p-2 shadow m-3" style="background-color:rgb(255, 99, 132) ">
                                <h4 class="text-white">Campaign Volunter Selesai : {{$volunteerkelar}}</h4>
                        </div>

                        <div class="card p-2 shadow m-3" style="background-color:rgb(54, 162, 235) ">
                            <h4 class="text-white">Campaign Donasi Dana Selesai : {{$donasikelar}}</h4>
                        </div>

                        <div class="card p-2 shadow m-3" style="background-color:rgb(255, 205, 86) ">
                            <h4 class="text-white">Campaign Volunter Dan Donasi Selesai : {{$semuakelar}}</h4>
                        </div>
                    </div>



                </div>
            </div>
            <div class="row">
                <div class="col-6 p-3">
                    <h5 class="text-center">Grafik Campaign Volunteer Dan Donasi </h5>

                    <canvas id="chartBulan"></canvas>
                </div>

                <div class="col-6 p-3">
                    <h5 class="text-center">Grafik User Berdonasi Ke Campaign</h5>

                    <canvas id="chartDonasi"></canvas>
                </div>


            </div>

        </div>
    </div>
@endsection


@push('script')

    <script>


        const data = {
            labels: [
                'Volunteer',
                'Donasi Dana',
                'Volunteer Dan Donasi Dana'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [{{$volunteer}}, {{$donasi}}, {{$keduanya}}],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };

        const config = {
            type: 'pie',
            data: data,
            options: {}
        };



    </script>

    <script>

        var cData = JSON.parse(`<?php echo $data['chart_data']; ?>`);
        const dataBulan = {
            labels: cData.label,
            datasets: [{
                label: 'grafik pertumbuhan',
                data: cData.data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };

        const configBulan = {
            type: 'bar',
            data: dataBulan,
            options: {}
        };
    </script>

    <script>

        var cDatad = JSON.parse(`<?php echo $dataDonasi['chart_data']; ?>`);
        const dataDonasi = {
            labels: cDatad.label,
            datasets: [{
                label: 'grafik pertumbuhan Orang Berdonasi',
                data: cDatad.data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };

        const configDonasi = {
            type: 'line',
            data: dataDonasi,
            options: {}
        };
    </script>


    <script>
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );

        const chartbulan = new Chart(
            document.getElementById('chartBulan'),
            configBulan
        );

        const chartDonasi = new Chart(
            document.getElementById('chartDonasi'),
            configDonasi
        );
    </script>
@endpush
