@extends('layouts.app')

@section('content')

    <div class="container">
        <h2 class="text-center text-success my-5">
            Form Informasi fauna
        </h2>

        <div class="card rounded shadow-sm bg-card">
            <div class="card-body p-5">
                <form action="{{route('admin.informasifaunaform')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group mb-3">
                        <label for="nama">Name Fauna</label>
                        <input type="text" name="nama_fauna" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama">Persen Populasi</label>
                        <input type="number" name="persen_populasi" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama">Judul Informasi</label>
                        <input type="text" name="judul_informasi" class="form-control" >
                    </div>


                    <div class="form-group mb-3">
                        <label for="desc">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" style="height: 130px"> </textarea>
                    </div>

                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="file" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>

                    <button class="btn btn-success w-100" type="submit">Submit</button>

                </form>

            </div>

        </div>
    </div>

@endsection

@push('script')
    <script>
        $('#validatedCustomFile').on('change',function(){
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>

    <script>
        $('#donasicheck').change(function() {
            $('#donasidiv').toggle();
        });

        $('#volunteercheck').change(function() {
            $('#volunteerdiv').toggle();
        });
    </script>
@endpush
