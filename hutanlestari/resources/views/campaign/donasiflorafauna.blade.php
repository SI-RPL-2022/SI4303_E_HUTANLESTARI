@extends('layouts.app')

@section('content')

    <div class="container">
        <h2 class="text-center text-success my-5">
            Form Donasi Flora Atau Fauna
        </h2>

        <div class="card rounded shadow-sm bg-card">
            <div class="card-body p-5">
                <form action="{{route('campaign.florafaunapost')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group mb-3">
                        <label for="nama">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>


                    <div class="form-group mb-3 p-2">
                        <label for="desc">Type</label>
                        <div class="form-check ml-2">
                            <input class="form-check-input" type="checkbox" name="floracheck" value="1" id="floracheck">
                            <label class="form-check-label" for="defaultCheck1">
                                Flora
                            </label>
                        </div>
                        <div class="form-check ml-2">
                            <input class="form-check-input" type="checkbox" name="faunacheck" value="1" id="volunteercheck">
                            <label class="form-check-label" for="defaultCheck1">
                              Fauna
                            </label>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama">Nama Flora/Fauna</label>
                        <input type="text" name="nameflora" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama">Tipe Pengiriman</label>
                        <input type="text" name="pengiriman" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama">Tanggal pengiriman</label>
                        <input type="date" name="tglpengiriman" class="form-control">
                    </div>

                    <label for="nama">Bukti Pengiriman</label>

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


@endpush
