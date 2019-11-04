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
            <span><i class="fas fa-bars"></i>&nbsp;</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-right js-scroll-trigger" href="{{route('index')}}">Home<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link disabled hvr-underline-from-right js-scroll-trigger" href="#ships">opportunities<span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="news-body-container" >
        <div class="container-fluid mt-3">
            <div class="row">
            @foreach ($opportunities as $opportunities_data)
                <div class="col-md-9">
                    <div class="news-content">
                        <div class="row">
                            <div class="col">
                                <h2> {{
                                $opportunities_data->oppo_title}}</h2>
                            </div>
                        </div>
                        <div class="row opportunity_detail">
                            <div class="col text-dark">
                                    {!!$opportunities_data->oppo_text!!}
                            </div>
                        </div>
                @endforeach
                    </div>
                    <form action="{{ route('SendFiles') }}" enctype="multipart/form-data" method="POST">

                        @csrf
                        <div class="container mt-3">
                            <p>Upload & Send your CV here!</p>

                                <div class=" opt-body-upload">
                                    <label for="files" class="" style="">
                                            <img class="" src="{{asset('images/text-file.png')}}" alt=""  id="up-img">
                                            <h1><p id="text_cv"></p></h1>
                                    </label>
                                    <input name="cv" type="file"  id="files" style="visibility: hidden;"   accept=".doc, .docx, .pdf" class="form-control{{ $errors->has('cv') ? ' is-invalid' : '' }} "  >
                                    @if ($errors->has('cv'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $errors->first('cv') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="">
                                    <button type="submit">Upload CV</button>
                                </div>


                        </div>
                    </form>
                </div>


                @include('partial._sidebar')

            </div>
         </div>

    </div>

    @include('partial._footer')
    <script src="{{asset('js/app.js')}}"></script>
    <script>
            $("#files").change(function() {
                filename = this.files[0].name
              $('#text_cv').html(filename);
            $('#up-img').hide();
              });
    </script>

</body>
</html>
