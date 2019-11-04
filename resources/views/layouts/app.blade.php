
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Josefa Slipways Inc</title>
    <link rel="shortcut icon" href="images/josefa_logonew1.png">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('images/josefa_logo1.png')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


    @yield('style')
</head>
<body class="hold-transition sidebar-mini" id="login-body">
@if (Auth::check())
<div class="wrapper">
  {{--  <!-- Navbar -->  --}}

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    {{--  <!-- Left navbar links -->  --}}
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>

    </ul>



    {{--  Right navbar links  --}}
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown" style="color:black;  font-size:20px; !important">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->email }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width:230px;">
                <div class="container-fluid">
                    <div class="row mb-2 bg-info  ">
                        <div class="col-md-12 mb-3 mt-3 text-center">
                                <img class="img-responsive rounded-circle"  width="100" height="100" src="/storage/images/{{ Auth::user()->image }}"
                                alt="User picture">
                        </div>
                        <span class="mx-auto mb-3">Adminsitrator</span>
                    </div>

                    <div class="row">
                            <div class="col-md-6 float-left">
                                    <a href="/users/{{ Auth::user()->id }}" class="btn btn-primary p-2" >Edit Profile</a>
                            </div>
                                <div class="col-md-6 text-right">
                                    <a class="btn btn-danger p-2" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Sign Out') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                     </form>
                                </div>
                    </div>

                </div>

            </div>
        </li>
    </ul>
  </nav>
  {{--  <!-- /.navbar -->  --}}

  {{--  <!-- Main Sidebar Container -->  --}}
  <aside class="main-sidebar elevation-5" style="background-color:#2582de">
    {{--  <!-- Brand Logo -->  --}}
    <div class="sidebar-brand pl-3">
            <a href="{{route('index')}}"> <img src="{{ asset('images/josefa_logo1.png') }}" alt="naotech" width="50" height="50"> <span class="text-white" style="position:absolute;top:20px;right:80px; font-size:20px;">Josefa INC </span> </a>
    </div>
    <hr  style="border:2px solid white" >
    {{--  <!-- Sidebar -->  --}}
    <div class="sidebar">

      {{--  <!-- Sidebar user panel (optional) -->  --}}
      <div class="user-panel mt-0  mb-1 d-flex">
        <div class="image">
                <img class="img-responsive img-rounded"  width="100" height="100" src="/storage/images/{{ Auth::user()->image }}"
                alt="User picture">
        </div>
        <div class="info">
                <span class="user-role text-white"> {{ Auth::user()->name }} </span>
        </div>
      </div>
      <hr style="border:2px solid white;">
      {{--  <!-- Sidebar Menu -->  --}}
      <nav class="mt-2 text-bold side"  style="color:white; !important; letter-spacing:1px; font-size:16px;">
        <ul class="nav nav-pills nav-sidebar flex-column"  data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item" >
                <a href="{{url('/home')}}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                    <i class="fas fa-ship nav-icon"></i>
              <p>
                    Our Ships
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview  pl-4">
              <li class="nav-item">
                <a href="{{url('ourship/add')}}"  class="nav-link">
                  <i class="far fa-circle"></i>
                  <p>Add Ship</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('ourship')}}" class="nav-link">
                  <i class="far fa-circle "></i>
                  <p>Ship infomation</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview  ">
                <a href="#" class="nav-link ">
                        <i class="far fa-newspaper nav-icon"></i>
                  <p>
                         Newfeed
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview pl-4">
                  <li class="nav-item">
                    <a href="{{url('newsfeed/add')}}"  class="nav-link">
                      <i class="far fa-circle "></i>
                      <p>Add Newfeed</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('newsfeed/view')}}" class="nav-link">
                      <i class="far fa-circle "></i>
                      <p>Newfeed Record</p>
                    </a>
                  </li>
                </ul>
            </li>

            <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                            <i class="fa fa-briefcase nav-icon" aria-hidden="true"></i>
                      <p>
                            Opportunities
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview pl-4">
                      <li class="nav-item">
                        <a  href="{{url('opportunities/add')}}"   class="nav-link">
                          <i class="far fa-circle "></i>
                          <p>Add Opportunities</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a  href="{{url('opportunities/')}}" class="nav-link">
                          <i class="far fa-circle"></i>
                          <p>Opportunities Detials</p>
                        </a>
                      </li>
                    </ul>
                </li>
        </ul>

      </nav>
      {{--  <!-- /.sidebar-menu -->  --}}
    </div>
    {{--  <!-- /.sidebar -->  --}}
  </aside>


  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Josefa Dashboard</h1>
          </div>

        </div>
      </div>
    </div>

    @endif
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
            @yield('content')
      </div>
      {{--  <!-- /.container-fluid -->  --}}
    </div>
    {{--  <!-- /.content -->  --}}
  </div>
  {{--  <!-- /.content-wrapper -->  --}}

  @if (Auth::check())
  {{--  <!-- Main Footer -->  --}}
  <footer class="main-footer" style="letter-spacing:1px;">
    {{--  <!-- To the right -->  --}}
    <div class="float-right d-none d-sm-inline">
      Powered By <strong><a href="naotech.com.ph">Naotech Inc</a></strong>
    </div>
    {{--  <!-- Default to the left -->  --}}
    <strong>Copyright &copy; 2019 <a href="#">Josefa Slipways</a>.</strong> All rights reserved.
  </footer>
</div>
{{--  <!-- ./wrapper -->  --}}
@endif
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->

    @yield('script')
    <script>
            $(document).ready(function() {
                $("[href]").each(function() {
                    if (this.href == window.location.href) {

                        $(this).addClass("active");
                        $(this).addClass("menu-open");
                    }
                });
            });

            jQuery(function ($) {
                $(".sidebar-dropdown > a").click(function() {
            $(".sidebar-submenu").slideUp(200);
            if (
                $(this)
                .parent()
                .hasClass("active")
            ) {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                .parent()
                .removeClass("active");
            } else {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                .next(".sidebar-submenu")
                .slideDown(200);
                $(this)
                .parent()
                .addClass("active");
            }
            });

            $("#close-sidebar").click(function() {
            $(".page-wrapper").removeClass("toggled");
            });
            $("#show-sidebar").click(function() {
            $(".page-wrapper").addClass("toggled");
            });
            });
        </script>
</body>
</html>
