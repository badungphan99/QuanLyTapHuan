<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="row content justify-content-center">
        <div class="login-form card col-lg-5 col-md-6 col-sm-8 col-10">
            <h3 class = 'card-title' align = center><b>{{ __('Đăng nhập')}}</b></h3>
            <form method = "POST" action="{{route('login')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="username" class="#"><b>{{ __('Tên người dùng')}}</b></label>
                        <input type="text" id = "username" class = "form-control @error('username') is-invalid @enderror" name = "username" value = "{{ old('username') }}" placeholder = "Enter your username.." autocomplete = "username" autofocus required>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class="#"><b>{{ __('Mật khẩu')}}</b></label>
                        <input type="password" id = "password" class = "form-control @error('password') is-invalid @enderror" name = "password" placeholder = "Enter your password.." autocomplete="current-password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <small>
                            <label class="form-check-label" for="remember">
                                {{ __('Ghi nhớ mật khẩu') }}
                            </label>
                        </small>
                        @if (Route::has('password.request'))
                            <a class = "btn btn-forgot" style = 'margin: 0px;' href="{{ route('password.request') }}">
                                <small>{{ __('Quên mật khẩu?') }}</small>
                            </a>
                        @endif

                    </div>
                
                    <div class="card-link form-group">
                        <div class="#" >
                            <button type="submit" class="btn btn-outline-dark" style = "width:100%; margin: 0.5rem 0;">
                                {{ __('Đăng nhập') }}
                            </button>
                        </div>
                        <div class="btn-signin">
                            @if (Route::has('register'))
                                <small><span>Chưa có tài khoản?</span></small> <a class="btn align-items-" href="{{ route('register') }}" style = 'padding: 0px; text-decoration:underline;'><small>Đăng ký tại đây!</small></a>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>


