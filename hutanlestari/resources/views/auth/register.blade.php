@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
            <div class="card-body bg-card">

                <p class="text-center m-3">Welcome Back</p>

                <h4 class="text-center mb-5 mt-3">Login to your account </h4>    
                <form method="POST" action="{{ route('login') }}">

                    <div class="mb-3 mx-5">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                        <div class="col">
                            <input id="email" type="email" class="" name="email">
                        </div>
                    </div>

                    <div class="mb-3 mx-5">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                        
                        <div class="col">
                            <input id="password" type="password" class="" name="email">
                        </div>
                    </div>

                    <div class="row mb-3">
                            <div class="col mx-5">
                                <button type="submit" class="btn btn-success w-100">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        
                        <div class="row mb-0">
                            <div class="col mx-5">
                               <p>Dont have account? <a href="" class=""> Join Now!!</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
