<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Josefa Slipways Inc</title>
    <link rel="shortcut icon" href="{{asset('images/josefa_logo1.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Sumana:700|Varela|Ubuntu" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/design.css">
    <link rel="stylesheet" href="../css/ships.css">
    <link rel="stylesheet" href="../css/hover.css">
    <link rel="stylesheet" href="../css/media.css">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <nav class="navbar nav-menu navbar-expand-lg navbar-light bgColor">
        <a class="logo mb-1" href="{{route('index')}}">
            <img src="{{asset('images/Logo JOSEFA New 2.png')}}" width="15%">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fas fa-bars"></i>&nbsp;Menu</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-right js-scroll-trigger" href="{{route('index')}}">Home<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link disabled hvr-underline-from-right js-scroll-trigger" href="#ships">josefa News<span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="news-body-container">
        <div class="container-fluid mt-3">
            <div class="row">
        @foreach ($news as $new_data)
                <div class="col-md-9 pl-5">
                    <div class="row">
                        <div class="col news-body">
                            <img class="center" src="{{asset('/storage/images/'.$new_data->img)}}"  alt="">
                        </div>
                    </div>

                    <div class="news-content">
                        <div class="row">
                            <div class="col">
                                <h2> {{$new_data->newsfeed_title}}</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                    {!!$new_data->newsfeed_text!!}
                            </div>
                        </div>
                    </div>
                @endforeach


                </div>



                @include('partial._sidebar')

            </div>
         </div>

    </div>

    @include('partial._footer')
        <script src="{{asset('js/app.js')}}"></script>
    {{--  @include('cdn._js-cdn')  --}}

</body>
</html>
