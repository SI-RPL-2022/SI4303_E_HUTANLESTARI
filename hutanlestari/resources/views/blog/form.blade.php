@extends('layouts.app')

@section('content')

    <div class="container">
        <h2 class="text-center text-success my-5">
            Form Artikel/Blog
        </h2>

        <div class="card rounded shadow-sm bg-card">
            <div class="card-body p-5">
                <form action="{{route('blog.form')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group mb-3">
                        <label for="nama">Judul artikel</label>
                        <input type="text" name="judul_artikel" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama">Nama Penulis</label>
                        <input type="text" name="nama_penulis" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama">Kategori</label>
                        <div class="d-flex flex-wrap justify-content-between">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="exampleRadios1" value="Deskripsi" >
                                <label class="form-check-label" for="exampleRadios1">
                                    Deskripsi
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="exampleRadios2" value="Eksposisi " >
                                <label class="form-check-label" for="exampleRadios2">
                                    Eksposisi
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="exampleRadios2" value="Persuasi " >
                                <label class="form-check-label" for="exampleRadios2">
                                    Persuasi
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="exampleRadios2" value="Argumentasi " >
                                <label class="form-check-label" for="exampleRadios2">
                                    Argumentasi
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="exampleRadios2" value="Narasi " >
                                <label class="form-check-label" for="exampleRadios2">
                                    Narasi
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="exampleRadios2" value="Lainnya " >
                                <label class="form-check-label" for="exampleRadios2">
                                    Lainnya
                                </label>
                            </div>

                        </div>

                    </div>


                    <div class="form-group mb-3 " id="volunteerdiv" >
                        <label for="desc">Isi Artikel</label>
                        <textarea type="number" style="height: 400px" name="isi_artikel" class="form-control"> </textarea>
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
