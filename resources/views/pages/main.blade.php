@extends('index')

@section('content')
    @include('partial._carousel')
    <img src="{{asset('images/iso-01-1.jpg')}}" alt="test" id="iso" class="" style="width:250px; padding-left:25px; margin-top:-130px; z-index:9999;">
    <a href="#" id="back-to-top" title="Back to top"><i class="fas fa-angle-double-up fa-2x" aria-hidden="true"></i></a>
    @include('pages._about')
    @include('pages._ships')
    @include('pages._quality')
    @include('pages._news')
    @include('pages._opportunity')
    @include('pages._contact')
@endsection


