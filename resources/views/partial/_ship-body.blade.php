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
<body id="allships-body">
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
                <a class="nav-link disabled hvr-underline-from-right js-scroll-trigger" href="#ships">All Ships<span class="sr-only">(current)</span></a>
            </li>

        </ul>
    </div>
  </nav>



        <div class="ship_cont">
            <div class="row">
             @foreach ($data as $ships)
                <div class="col-sm-3 md-3 lg-3 hvr-grow">
                    <img src="{{asset('../storage/images/'.$ships->ship_img)}}"  class="ship_info" ship-id="{{$ships->id}}" data-toggle="modal" data-target="#jfaith">
                    <p>{{$ships->ship_name}}</p>
                </div>
            @endforeach
            </div>
        </div>


    @include('partial._footer')
    {{--  @include('cdn._js-cdn')  --}}

    {{-- modal --}}
    {{-- jewel faith --}}
    <div class="modal fade" id="jfaith" tabindex="-1" role="diaglog" aria-labelledby="jfaith" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <h4 class="modal-title" id="">JSI Hull No.
                    <span style="color:black!important" id="hull_number"></span>
                    <br>
                    <p id="ship_name"></p>
                </h4>

                    <div class="modal-body">
                    <div class="justify-content-center">
                        <img src="" class = "newImage">
                    </div>
                        <img src="" alt="">
                        <h4>PARTICULARS</h4>
                        <table class="table table-sm">
                        <tr>
                            <td>LOA</td>
                            <td>:</td>
                            <td id ="loa">sample</td>
                        </tr>

                        <tr>
                            <td>BREADTH</td>
                            <td>:</td>
                            <td id ="breadth">sample</td>
                        </tr>

                        <tr>
                            <td>DEPTH</td>
                            <td>:</td>
                            <td id ="depth">sample</td>
                        </tr>

                        <tr>
                            <td>DRAFT</td>
                            <td>:</td>
                            <td id ="draft">sample</td>
                        </tr>

                        <tr>
                            <td>POWER</td>
                            <td>:</td>
                            <td id ="power">sample</td>
                        </tr>

                        <tr>
                            <td>SPEED</td>
                            <td>:</td>
                            <td id ="speed">sample</td>
                        </tr>

                        <tr>
                            <td>HULL</td>
                            <td>:</td>
                            <td id ="hull">sample</td>
                        </tr>

                        <tr>
                            <td>CLASS</td>
                            <td>:</td>
                            <td id = "class">sample</td>
                        </tr>

                        <tr>
                            <td>YEAR BUILT</td>
                            <td>:</td>
                            <td id = "year">sample</td>
                        </tr>

                        </table>
                    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <script>
         $(document).ready(function(){
                $('.ship_info').click(function(){
                    var id = $(this).attr('ship-id');
                        $.ajax({
                       url: 'ship-modal/'+id,
                       method: 'GET',
                       dataType : 'json',
                       success : function(data){
                           console.log(data)
                           $('#ship_name').html(data['ship_name']);
                           $('.newImage').attr('src', '/storage/images/'+data['ship_img']);
                           $("#loa").html(data['LOA']);
                           $('#breadth').html(data['BREADTH']);
                           $("#class").html(data['CLASS']);
                           $("#depth").html(data['DEPTH']);
                           $("#year").html(data['YEAR']);
                           $("#power").html(data['POWER']);
                           $("#speed").html(data['SPEED']);
                           $("#draft").html(data['DRAFT']);
                           $("#hull").html(data['HULL']);
                           $('#year').html(data['YEAR_BUILT']);
                           $('#hull_number').html(data['hull_number']);
                           $("#shipModal").modal();
                       }
                   });
                });
            });
    </script>
</body>
</html>
