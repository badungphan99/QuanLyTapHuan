<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản</title>
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
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
</head>
<body>
<div class="#">
    <div class="row justify-content-end">
        <div class="register-form card col-lg-4 col-md-7 col-sm-6 col-12">
            <form method = "POST" action="{{route('register')}}">
                @csrf
                <div class="card-body">
                    <h3><b>{{ __('Đăng ký tài khoản')}}</b></h3>
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-4 col-form-label"><b>{{ __('Họ và tên ')}}</b></label>
                        <input type="text" id = "fullname" class="col-sm-7 form-control @error('fullname') is-invalid @enderror" name = "fullname" value = "{{ old('fullname') }}" placeholder = "Enter your fullname.." autocomplete = "fullname" autofocus required>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-4 col-form-label"><b>{{ __('Tên đăng nhập ')}}</b></label>
                        <input type="text" id = "username" class = "col-sm-7 form-control @error('username') is-invalid @enderror" name = "username" value = "{{ old('username') }}" placeholder = "Enter your username.." autocomplete = "username" required>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label"><b>{{ __('Email ')}}</b></label>
                        <input type="text" id = "email" class = "col-sm-7 form-control @error('email') is-invalid @enderror" name = "email" value = "{{ old('email') }}" placeholder = "Enter your email.." autocomplete = "email" required>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
{{--                    <div class="form-group row">--}}
{{--                        <label for="password" class="col-sm-4 col-form-label"><b>{{ __('Mật khẩu')}}</b></label>--}}
{{--                        <input type="password" id = "password" class = "col-sm-7 form-control @error('password') is-invalid @enderror" name = "password" placeholder = "Enter your password.." autocomplete="current-password" required>--}}
{{--                        @error('password')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                <strong>{{ $message }}</strong>--}}
{{--                            </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label for="password-confirm" class="col-sm-4 col-form-label"><b>{{ __('Xác nhận mật khẩu')}}</b></label>--}}
{{--                        <input type="password" id = "password-confirm" class = "col-sm-7 form-control" name = "password-confirm" placeholder = "Password confirm" required>--}}
{{--                        @error('password')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                <strong>{{ $message }}</strong>--}}
{{--                            </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label"><b>{{ __('Mật khẩu')}}</b></label>
                        <input id="password" type="password" class="col-sm-7 form-control @error('password') is-invalid @enderror" name="password" placeholder = "Enter your password.." required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror

                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-sm-4 col-form-label"><b>{{ __('Xác nhận mật khẩu')}}</b></label>
                        <input id="password-confirm" type="password" class="col-sm-7 form-control" name="password_confirmation" placeholder = "Password confirm" required autocomplete="new-password">
                    </div>

                    <div class="form-group justify-content-center">
                        <div class="btn-signup" >
                            <button type="submit" class="btn btn-outline-dark">
                                {{ __('Đăng ký tài khoản') }}
                            </button>
                        </div>
                        <div class="btn-signin">
                            @if (Route::has('login'))
                                <span>Bạn đã có tài khoản? </span> <a class="btn align-items-" href="{{ route('login') }}" style = 'padding: 0px; text-decoration:underline;'>Đăng nhập tại đây!</a>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="fullname" class="col-md-4 col-form-label text-md-right">{{ __('Full name') }}</label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>

                                @error('fullname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_name" class="col-md-4 col-form-label text-md-right">{{ __('User name') }}</label>

                            <div class="col-md-6">
                                <input id="user_name" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>     -->
</body>
</html>


