@extends('layouts.app')

@section('content')
            <div class="container">
                <h2 class="text-center text-success my-5">
                    Form Campaign
                </h2>
                
                <div class="card rounded shadow-sm bg-card">
                    <div class="card-body p-5">
                        <form action="{{route('campaign.form')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group mb-3">
                                <label for="nama">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="desc">Description</label>
                                <textarea name="desc" class="form-control" style="height: 130px"> </textarea>
                            </div>

                            <div class="form-group mb-3 p-2">
                                <label for="desc">Type</label>
                                <div class="form-check ml-2">
                                    <input class="form-check-input" type="checkbox" name="donasi" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">Donasi</label>
                                </div>
                                <div class="form-check ml-2">
                                    <input class="form-check-input" type="checkbox" name="volunteer" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">Volunteer</label>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="desc">Start Date</label>
                                <input type="date" name="startdate" class="form-control">
                            </div>

                            <p class="mb-3 mt-2 text-black-50 text-center">Until</p>

                            <div class="form-group mb-3">
                                <label for="desc">End Date</label>
                                <input type="date" name="enddate" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="desc">Target</label>
                                <input type="number" name="target" class="form-control">
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
@endpush