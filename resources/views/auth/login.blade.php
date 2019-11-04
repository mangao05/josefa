@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="padding-top:30px;">
        <div class="col">
             <div class="login-logo">
                <a href="{{route('index')}}"><img src="{{asset('images/Logo JOSEFA New 1.png')}}" alt=""></a>
            </div>

        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6" style="margin-left:auto; margin-right:auto; display:block;">
                <div class="card bg-primary text-white  example z-depth-2" style=" margin:0 30px;  z-index:3;">
                        <div class="card-header text-center" style="font-size:30px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif" > <i class="fa fa-anchor" aria-hidden="true"></i>  Sign In</div>
                </div>
                <div class="card pt-3  example z-depth-5" style="border:1px solid #0099ff; margin-top:-20px;">
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="input-group col-md-11  pl-5">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary"><i class="fa fa-envelope " style="color:white;" aria-hidden="true"></i></span>
                                            </div>
                                            <input id="email" type="email" style="border:1px solid #0099ff;" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} " name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                </div>

                                <div class="form-group row">
                                    <div class=" input-group col-md-11 pl-5">
                                            <div class="input-group-prepend ">
                                                    <span class="input-group-text bg-primary"><i class="fas fa-key"  style="color:white;"></i></span>
                                                </div>
                                                <input type="password" style="border:1px solid #0099ff;" class="form-control" name="password" placeholder="password">

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row pl-5 roundedTwo">
                                    <div class="col-md-6 ">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                                            <label class="form-check-label" for="remember">
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}"  style="margin-top:-6px; color:blue;">
                                               forgot password?
                                            </a>
                                        @endif

                                    </div>
                                </div>

                                <div class="row justify-content-center ">
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-outline-primary btn-md btn-block login_btn" style="border-radius:16px;">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
            </div>

            {{-- <div class="col-md-6 float-right" style="margin-top:65px;">
                    <img src="{{ asset('images/JOSEFA.png') }}" alt="" width="100%" height="90%" >

            </div> --}}

         </div>
         <div class="container" style="padding-top:100px; padding-left:45%;"  >
                <img src="{{ asset('images/powered.png') }}" alt="" width="130" height="50" >
         </div>

</div>


@endsection
