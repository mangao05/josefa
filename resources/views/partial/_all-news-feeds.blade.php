<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Josefa Slipways Inc</title>



    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/design.css">
    <link rel="stylesheet" href="../css/ships.css">
    <link rel="stylesheet" href="../css/hover.css">
    <link rel="stylesheet" href="../css/hr.css">
    <link rel="stylesheet" href="../css/media.css">
    <link rel="stylesheet" href="../css/carousel.css">

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

    <div class="" style="">
        <div class="container-fluid">
            <div class="row pt-3 pb-3">
                <div class="col m-2">
                    <div class="card card-img-cont  float-left " data-wow-duration="2s" data-wow-delay=".5s">
                        <img src="" class="card-img-top" alt="">
                        <div class="card-body">
                            <div class="news-title"></div>
                            <p class="card-text pt-3"></p>
                            <a class="btn btn-primary btn-loc">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
         </div>

    </div>

    @include('partial._footer')
    <script src="{{asset('js/app.js')}}"></script>

</body>
</html>
