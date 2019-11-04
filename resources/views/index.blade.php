<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Josefa Slipways Inc</title>
   <link rel="shortcut icon" href="{{asset('images/josefa_logo1.png')}}">

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" href="css/ships.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/hr.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/carousel.css">
    {{-- font --}}
    <link href="https://fonts.googleapis.com/css?family=Sumana:700|Varela|Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    @include('partial._header')
    @yield('content')
    @include('partial._footer')

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/backtotop.js')}}"></script>
    <script src="{{asset('js/easing.jquery.js')}}"></script>
    <script src="{{asset('js/scrolling-nav.js')}}"></script>
    <script src="{{asset('js/countUp.js')}}"></script>

    <script>
            $(window).scroll(function(){
                if($(document).scrollTop() > 100) {
                    $('nav').addClass('shrink')
                    $('logo-cont').addClass('bgColor');
                }
                else{
                    $('nav').removeClass('shrink')
                    $('logo-cont').removeClass('bgColor');
                }
            });

            $(window).scroll(function(){
                if($(document).scrollTop() > 100) {
                    $('#navbarSupportedContent').removeClass('show');
                }
            });
        </script>

        <script src="js/wow.js"></script>
        <script>
            new WOW().init();
        </script>

        <script>
                function myFunction() {
                    var dots = document.getElementById("dots");
                    var moreText = document.getElementById("more");
                    var btnText = document.getElementById("myBtn");

                    if (dots.style.display === "none") {
                      dots.style.display = "inline";
                      btnText.innerHTML = "Read more";
                      moreText.style.display = "none";
                    } else {
                      dots.style.display = "none";
                      btnText.innerHTML = "Read less";
                      moreText.style.display = "inline";
                    }
                  }

            $(document).ready(function(){
                $('.image-ship').click(function(){
                    var id = $(this).attr('ship-id');
                   $.ajax({
                       url: 'ship-modal/'+id,
                       method: 'GET',
                       dataType : 'json',
                       success : function(data){
                           console.log(data)
                           $('.newImage').attr('src', '/storage/images/'+data['ship_img']);
                           $('#ship_name').html(data['ship_name']);
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
