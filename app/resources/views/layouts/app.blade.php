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
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/super_admin.css') }}"/>


<style>
        .btn-link{
        color: black;
        text-decoration:none !important;
        }
        .modal-content .close{
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
        }
        footer{
            margin: 0px !important;
        }
    </style>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-light fixed-top">
            <a href="{{url ('/') }}"><div class="logo">
                <img src="img/logo.png" alt="Venue Logo">
            </div></a>
            <!-- <nav id="primary-nav" class="dropdown cf"> -->
                <ul class="dropdown menu">
                    <li>
                        <form class="form-inline" action="">
                            <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm">
                            <button class="btn btn-dark" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <li><button class = 'btn btn-link' data-toggle ="modal" data-target = "#loginModal">LOGIN</button></li>
                            
                            @if (Route::has('register'))
                            <li><button class = 'btn btn-link' data-toggle ="modal" data-target = "#registerModal">REGISTER</button></li>
                        
                            @endif
                        @endauth
                    @endif
                </ul>
            <!-- </nav> -->
        </nav> 
        <div class="modal fade" id = "loginModal" tabindex = "-1" role = 'dialog' aria-labelledby = "#loginlabel" aria-hidden = "true"  data-backdrop = "true">
            <div class="modal-dialog modal-sm" role = 'document'>
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id = "loginlabel">Đăng nhập</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method = "POST" action="{{route('login')}}">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="username-login" class="#"><b>{{ __('Tên người dùng')}}</b></label>
                                <input type="text" id = "username-login" class = "form-control @error('username') is-invalid @enderror" name = "username" value = "{{ old('username') }}" placeholder = "Enter your username.." autocomplete = "username" autofocus required>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password-login" class="#"><b>{{ __('Mật khẩu')}}</b></label>
                                <input type="password" id = "password-login" class = "form-control @error('password') is-invalid @enderror" name = "password" placeholder = "Enter your password.." autocomplete="current-password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Ghi nhớ mật khẩu') }}
                                </label>
                                @if (Route::has('password.request'))
                                    <a class = "btn btn-forgot" style = 'margin: 0px;' href="{{ route('password.request') }}">
                                        {{ __('Quên mật khẩu?') }}
                                    </a>
                                @endif
                            </div>
                        
                            <div class="form-group">
                                <div class="#" >
                                    <button type="submit" class="btn btn-outline-dark" style = "width:100%; margin: 0.5rem 0;">
                                        {{ __('Đăng nhập') }}
                                    </button>
                                </div>
                                <div class="btn-signin" style = "text-align: center;">
                                    @if (Route::has('register'))
                                        <span>Chưa có tài khoản?</span><a class="btn" data-toggle = "modal" href="#registerModal" style = 'padding: 0px; text-decoration:underline;'>Đăng ký tại đây!</a>
                                    @endif
                                </div>
                            </div>
                            <br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id = "registerModal" tabindex = "-1" role = 'dialog' aria-labelledby = "registerlabel" aria-hidden = "true" data-backdrop = "false">
            <div class="modal-dialog modal-sm" role = 'document'>
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id = "registerlabel">ĐĂNG KÝ TÀI KHOẢN</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method = "POST" action="{{route('login')}}">
                        @csrf
                        <div class="modal-body">
                        
                            <div class="form-group">
                                <label for="fullname" class="#"><b>{{ __('Họ và tên: ')}}</b></label>
                                <input type="text" id = "fullname" class="form-control @error('fullname') is-invalid @enderror" name = "fullname" value = "{{ old('fullname') }}" placeholder = "Enter your fullname.." autocomplete = "fullname" autofocus required>
                                <!-- @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                            <div class="form-group">
                                <label for="username" class="#"><b>{{ __('Tên đăng nhập: ')}}</b></label>
                                <input type="text" id = "username" class = "form-control @error('username') is-invalid @enderror" name = "username" value = "{{ old('username') }}" placeholder = "Enter your username.." autocomplete = "username"required>
                                <!-- @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                            <div class="form-group">
                                <label for="email" class="#"><b>{{ __('Email: ')}}</b></label>
                                <input type="text" id = "email" class = "form-control @error('email') is-invalid @enderror" name = "email" value = "{{ old('email') }}" placeholder = "Enter your email.." autocomplete = "email "required>
                                <!-- @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                            <div class="form-group">
                                <label for="password" class="#"><b>{{ __('Mật khẩu: ')}}</b></label>
                                <input type="password" id = "password" class = "form-control @error('password') is-invalid @enderror" name = "password" placeholder = "Enter your password.." autocomplete="current-password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_cf" class="#"><b>{{ __('Xác nhận mật khẩu: ')}}</b></label>
                                <input type="password" id = "password_cf" class = "form-control" name = "password_cf" placeholder = "Password confirm..." required>
                                <!-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        
                            <div class="row form-group justify-content-center">
                                <div class="btn-signup" >
                                    <button type="submit" class="btn btn-outline-dark">
                                        {{ __('Đăng ký tài khoản') }}
                                    </button>
                                </div>
                            </div>
                            <div class="row form-group justify-content-center">
                                <div class="btn-signin">
                                    @if (Route::has('login'))
                                        <span>Bạn đã có tài khoản? </span> <a class="btn" data-toggle = "modal" data-target = "#loginModal" href="#loginModal" style = 'padding: 0px; text-decoration:underline;'>Đăng nhập tại đây!</a>
                                    @endif
                                </div>
                            </div>
                        </div><br>
                    </form>
                </div>
            </div>
        </div>


        <main>
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