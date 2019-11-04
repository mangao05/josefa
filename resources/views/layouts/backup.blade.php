<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Josefa Slipways Inc</title>
    <link rel="shortcut icon" href="images/josefa_logonew1.png">

{{--
    <!-- Include external CSS. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

    <!-- Include Editor style. -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.5/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.5/css/froala_style.min.css" rel="stylesheet" type="text/css" />  --}}

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
<body id="login-body" class="bg-dark">

        <div id="app">
             @if (Auth::check())
             <div class="page-wrapper chiller-theme toggled" >
                 <a id="show-sidebar" class="btn btn-sm btn-white" href="#">
                   <i class="fas fa-bars"></i>
                 </a>
                 <nav id="sidebar" class="sidebar-wrapper " style="background-color:#00ccff !important;">
                         <div class="sidebar-content">
                           <div class="sidebar-brand">
                             <a href="{{route('index')}}"> <img src="{{ asset('images/josefa_logo1.png') }}" alt="naotech" width="50" height="50"> <span class="text-white">Josefa INC </span> </a>
                             <div id="close-sidebar">

                               <i class="fa fa-arrow-left text-dark" style="display:none;" aria-hidden="true"></i>
                             </div>
                           </div>
                             <div class="sidebar-header">
                                 <div class="user-pic">
                                     <img class="img-responsive img-rounded" src="/storage/images/{{ Auth::user()->image }}"
                                     alt="User picture">
                                 </div>
                                 <div class="user-info text-white font-weight-">
                                     <span class="user-name">
                                     <strong> {{ Auth::user()->name }} </strong>
                                     </span>
                                     <span class="user-role text-white"> {{ Auth::user()->email }} </span>
                                     <span class="user-status">
                                     <span>
                                        <div class="row">
                                            <div class="col-md-3">
                                                    <div aria-labelledby="navbarDropdown" >
                                                            <a  style="color:white; font-size:13px;" href="{{ url('users/'.Auth::user()->id) }}">
                                                                {{ __('Edit') }}
                                                            </a>

                                                    </div>
                                            </div>
                                            <div class="col-md-9">
                                                    <div aria-labelledby="navbarDropdown" >
                                                            <a  style="color:red; font-size:13px;" href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </div>
                                            </div>
                                        </div>

                                       </span>

                                     </span>
                                 </div>
                             </div>

                           <div class="sidebar-menu  " >
                             <ul class="mt-4">
                                <li>
                                    <a href="{{route('home')}}">
                                        <i class="fas fa-tachometer-alt"></i>
                                        <span class="text-dark" style="font-size:15px;"><strong> Dashboard</strong> </span>
                                    </a>
                                </li>

                               <li class="sidebar-dropdown">
                                     <a href="#">
                                            <i class="fas fa-ship"></i>
                                         <span class="text-dark" style="font-size:15px;"> <strong> Our Ships</strong> </span>
                                     </a>
                                     <div class="sidebar-submenu" >
                                         <ul>
                                           <li>
                                             <a href="{{url('ourship/add')}}" >
                                                Add Ship Story
                                             </a>
                                           </li>
                                           <li>
                                                 <a href="{{url('ourship')}}">
                                                    View Ship data
                                                </a>
                                            </li>

                                         </ul>
                                       </div>
                                 </li>

                                 <li class="sidebar-dropdown">
                                        <a href="#">
                                           <i class="far fa-newspaper"></i>
                                            <span class="text-dark" style="font-size:15px;"> <strong> Newsfeed</strong> </span>
                                        </a>
                                        <div class="sidebar-submenu" >
                                            <ul>
                                              <li>
                                                <a href="{{url('newsfeed/add')}}" >
                                                   Add Newsfeed
                                                </a>
                                              </li>
                                              <li>
                                                    <a href="{{url('newsfeed/view')}}">
                                                       View Newsfeed
                                                   </a>
                                               </li>

                                            </ul>
                                          </div>
                                    </li>

                                    <li class="sidebar-dropdown">
                                            <a href="#">
                                               <i class="fa fa-briefcase" aria-hidden="true"></i>
                                                <span class="text-dark" style="font-size:15px;"> <strong> Opportunities</strong> </span>
                                            </a>
                                            <div class="sidebar-submenu" >
                                                <ul>
                                                    <li>
                                                    <a href="{{url('opportunities/add')}}" >
                                                        Add opportunities
                                                    </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('opportunities/')}}">
                                                            View opportunities
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                    </li>
                                <li class="sidebar-dropdown">
                                        <a href="#">
                                           <i class="fa fa-briefcase" aria-hidden="true"></i>
                                            <span class="text-dark" style="font-size:15px;"> <strong> User Management</strong> </span>
                                        </a>
                                        <div class="sidebar-submenu" >
                                            <ul>
                                                <li>
                                                <a href="{{ url('user/add') }}" >
                                                    Add User
                                                </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('users')}}">
                                                        View user
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                </li>
                             </ul>
                           </div>

                       </nav>
                 @endif
                 {{--  <!-- sidebar-wrapper  -->  --}}
                 <main class="page-content">
                     @yield('content')
                 </main>


               </div>
</body>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
    </script>
    {{--  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.1/js/mdb.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  --}}

    {{--  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.5/js/froala_editor.pkgd.min.js"></script>  --}}

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->

    @yield('script')
    <script>
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

</html>
