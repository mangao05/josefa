@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12 mt-4"  style="margin-bottom:-20px; z-index:3;">
                        <div class="login-logo">
                                <img src="{{asset('images/Login_ LOGO.png')}}" alt="">
                        </div>
                    <div class="card text-center mx-auto bg-primary text-white" style="width:30rem;  box-shadow: 2px 5px 5px 0px #eee; ">
                                <div class="card-body" style="pading-top:-40px;">
                                <strong style="font-size:20px;">Sign Up</strong>
                                </div>
                    </div>
                </div>
                <div class="col-md-12">
                        <div class="card text-center" style="border:1px solid black; box-shadow: 2px 5px 5px 0px #07acfc;  border-radius: 15px 15px;" >
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group row  mx-auto">
                                            <div class="col-md-12">
                                                    <label for="name" class="col-md-4 col-form-label"><strong>{{ __('Name') }}</strong> </label>
                                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row  mx-auto">
                                            <div class="col-md-12">
                                                 <label for="email" class="col-md-4 col-form-label"><strong>{{ __('E-Mail Address') }}</strong> </label>
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row  mx-auto">

                                            <div class="col-md-12">
                                                    <label for="password" class="col-md-4 col-form-label"><strong> {{ __('Password') }}</strong> </label>
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row  mx-auto">

                                            <div class="col-md-12">
                                                    <label for="password-confirm" class="col-md-4 col-form-label "><strong> {{ __('Confirm Password') }}</strong> </label>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">

                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-outline-primary btn-md btn-block">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
