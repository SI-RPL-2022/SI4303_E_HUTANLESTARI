@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center text-success my-5"> Form Feedback </h2>

        <div class="card rounded shadow-sm bg-card">
            <div class="card-body p-5">
                <form action="{{route('feedback')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group mb-3">
                        <label for="nama">Critisism</label>
                        <textarea type="text" name="critisism" style="height: 200px" class="form-control"> </textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama">Suggestion</label>
                        <textarea type="text" name="suggestion" style="height: 200px" class="form-control"> </textarea>
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