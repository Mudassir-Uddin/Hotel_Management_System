<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>keto</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ url('/Website/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ url('/Website/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ url('/Website/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ url('/Website/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ url('/Website/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">

    @php
        use Illuminate\Support\Facades\Session;
        $userRole = '';
        if (Session::has('role')) {
            $userRole = Session::get('role');
        }
    @endphp

    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ url('/Website/images/loading.gif') }}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ url('/Website/images/logo.png') }}"
                                            alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('/') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about') }}">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('rooms') }}">Our room</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contactus') }}">Contact Us</a>
                                    </li>
                                    @php
                                        use App\Models\users;
                                        $id = Session::get('id');
                                        $user = users::where('id', $id)->get();
                                    @endphp
                                    @php

                                        use App\Models\User;
                                        use Illuminate\Http\Request;
                                        use Illuminate\Support\Facades\DB;
                                        use Illuminate\Support\Facades\Hash;
                                        //  use Illuminate\Support\Facades\Session;
                                        $user = users::where('id', Session::get('id'))->first();
                                    @endphp

                                    {{-- <ul class="justify-content-end navbar nav"> --}}
                                    @if (session()->has('email'))
                                        @if ($user)
                                            <div class="nav-item dropdown">

                                                <a class="nav-link dropdown-toggle bold username"
                                                    data-toggle="dropdown">{{ $user->name }}</a>
                                                {{-- <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a> --}}
                                        @endif
                                        <div class="dropdown-menu">
                                            {{-- <a href="" class="dropdown-item">My Profile</a> --}}
                                            @if ($user)
                                                <a href="{{ url('/Profileedit') }}/{{ $user->id * 548548 }}"
                                                    class="dropdown-item">My Profile</a>
                                            @endif
                                            {{-- <a class="dropdown-item">{{ session()->get('role') }}</a> --}}
                                            @if ($userRole == 1)
                                                <a class="dropdown-item ">Admin</a>
                                            @endif
                                            @if ($userRole == 2)
                                                <a class="dropdown-item ">User</a>
                                            @endif
                                            @if ($userRole == 3)
                                                <a class="dropdown-item ">Vistor</a>
                                            @endif
                                            @if ($userRole == 1 || $userRole == 3)
                                                <a href="{{ url('/Admindashboard') }}"
                                                    class="dropdown-item">Dashboard</a>
                                            @endif
                                            <a class="dropdown-item text-danger "
                                                href="{{ url('/logout') }}">Logout</a>

                                        </div>
                            </div>
                        @else
                            <div class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle bold username" data-toggle="dropdown">Join Us</a>
                                <div class="dropdown-menu">
                                    <a href="{{ url('/login') }}" class="dropdown-item">Login</a>
                                    <a href="{{ url('/register') }}" class="dropdown-item">Signup</a>

                                </div>
                                @endif

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->

    @yield('mywebsite')

    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class=" col-md-4">
                        <h3>Contact US</h3>
                        <ul class="conta">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                            <li><i class="fa fa-mobile" aria-hidden="true"></i> +01 1234569540</li>
                            <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#">
                                    demo@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Menu Link</h3>
                        <ul class="link_menu">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="about.html"> about</a></li>
                            <li><a href="room.html">Our Room</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>News letter</h3>
                        <form class="bottom_form">
                            <input class="enter" placeholder="Enter your email" type="text"
                                name="Enter your email">
                            <button class="sub_btn">subscribe</button>
                        </form>
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">

                            <p>
                                © 2019 All Rights Reserved. Design by <a
                                    href="https://www.youtube.com/@CodeRunnerSolution"> Code Runner</a>
                                <br><br>
                                Distributed by <a href="https://themewagon.com/" target="_blank">Mudassir Uddin</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ url('/Website/js/jquery.min.js') }}"></script>
    <script src="{{ url('/Website/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('/Website/js/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ url('/Website/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ url('/Website/js/custom.js') }}"></script>
</body>

</html>
