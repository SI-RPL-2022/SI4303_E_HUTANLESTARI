@extends('layouts.dashboardadmin')

@section('content')

    <div class="card mt-3 p-3 mr-4 bg-success">
        <div class="card-head bg-success ">
            <h4 class="text-black text-center p-2 bg-white" >Feedback</h4>
        </div>
        <div class="card-body bg-white w-100">
            <table class="table w-100 mx-auto table-striped bg-white overflow-scroll" id="table_id" class="display">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Critism</th>
                    <th scope="col">Suggestion</th>
                </tr>
                </thead>
                <tbody class="overflow-scroll">
                @foreach($data as $x)
                    <tr>
                        <td>{{$x->id}}</td>
                        <td>{{$x->suggestion}}</td>

                        <td>{{$x->critisism}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@push('script')

    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@endpush
