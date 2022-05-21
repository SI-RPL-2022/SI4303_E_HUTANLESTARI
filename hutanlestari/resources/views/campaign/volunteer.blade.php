@extends('layouts.app')

@section('content')

    <div class="container">
        <h2 class="text-center text-success my-5">
            Form Volunteer
        </h2>

        <div class="card rounded shadow-sm bg-card">
            <div class="card-body p-5">
                <form action="{{route('campaign.volunteer' , ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group mb-3">
                        <label for="nama_depan">Nama Depan</label>
                        <input type="text" name="nama_depan" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama_depan">Nama Belakang</label>
                        <input type="text" name="nama_belakang" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama_depan">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="desc">Pengalaman</label>
                        <textarea name="pengalaman" class="form-control" style="height: 130px"> </textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="desc">Skill</label>
                        <textarea name="skill" class="form-control" style="height: 130px"> </textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="domisili">Domisili</label>
                        <input type="text" name="domisili" class="form-control">
                    </div>

                    <button class="btn btn-success w-100" type="submit">Submit</button>

                </form>

            </div>

        </div>
    </div>

@endsection

