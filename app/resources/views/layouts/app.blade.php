<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>     -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/fontAwesome.css') }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <!--  -->

     <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

 <!--  -->

    <!-- Styles -->
    <link rel="styleseet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/super_admin.css') }}"/> -->



<style>
        .btn-link{
        color: black;
        text-decoration:none !important;
        }
        /* .modal-content .close{
            transform: translateX(-50%);
            position: relative;
            color: black;
            box-shadow: none;
            line-height: 0px;
            height: 0px;
            width: 0px;
            right: 0%;
            left: 0%;
            top:0px;
            margin-top: 2px;
        } */
    </style>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light navbar-fixed-top">
            <a href="{{url ('/') }}"><div class="logo">
                <img src="{{ asset('img/logo.png') }}"  alt="Venue Logo">
            </div></a>
            <button class="navbar-toggler btn-lg " type="link" data-toggle="collapse" data-target="#headnav"><span><i class="fa fa-bars"></i></span></button>
            <div class="collapse navbar-collapse justify-content-end" id="headnav">
                <ul class="dropdown menu">
                    <li>
                        <form class="form-inline" action="">
                            <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm">
                            <button class="btn btn-dark" style="padding: 6.5px 10px" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li>
                                <span class=" dropdown">
                                    <span class="animate-dropdown "><i class="far fa-user"></i>&nbsp  {{Auth::user()->username}}</span>
                                    <div class="dropdown-content ">
                                        <a href="{{ url('/home') }}"><i class="fas fa-home"></i>&nbsp Home</a>
                                        <a href="{{ url('/password/update') }}"><i class="fas fa-key"></i></i>&nbsp Đổi mật khẩu</a>
                                        <a href="{{ url('/detail_user') }}"><i class="fas fa-user"></i></i>&nbsp Chỉnh sửa thông tin</a>
                                        <a href="{{url ('logout')}}" data-toggle="tooltip" title="Log out"><i class="fas fa-sign-out-alt"></i>&nbsp Đăng xuất</a>
                                    </div>
                                </span>
                            </li>
                            @else
                            <li><a href="{{url ('/login')}}">Đăng nhập</a></li>
                            @if (Route::has('register'))
                            <li><a href="{{url ('register')}}">Đăng ký</a></li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
            <!-- </nav> -->
        </nav>
        <main class = "site-content">
            @yield('content')
        </main>
        <footer class="py-5 bg-light">
            <div class="container">
                <div class="contact-info">
                    <div class="footer-heading">
                        <h4>Thông tin liên hệ</h4>
                    </div>
                <div class="detail">
                <ul>
                    <li><span>Điện thoại:  </span>0982016568</li>
                    <li><span>Email:</span>trainingc@gmail.com</li>
                    <li><span>Địa chỉ:</span>Thanh Xuân, Hà Nội</li>
                </ul>
                </div>
            </div>
            <p class="m-0 text-center text-black">Copyright &copy; Training Courses 2020</p>
        </footer>
</body>
</html>
