@extends('layouts.app')
<title>Quên mật khẩu @yield('title')</title>
<style>
    .container{
        /* height: 100vh; */
    }




    .container{
        margin: auto;
        justify-content: center;

    }

    .content{
        height: 100vh !important;
        /* align-items: center !important; */
    }



    .card{
        position: relative;
        border-radius: 5px;
        padding: 30px 15px;
        margin: 100px 0;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

    }

    body{
        background-image: url('../img/main_banner.jpg');
        background-size: cover;
    }

    .btn-cancel{
        /* padding-right: 16px; */
        margin: 0 0 0 5px;
    }


</style>
@section('content')
<div class="container">
    <div class="row content justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-8 col-10">
            <div class="card">

                <div class="card-body">
                    <h2 class = 'card-title' align = center><b>{{ __('Đặt Lại Mật Khẩu') }}</b></h2>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.reset') }}">
                        @csrf
                        <label for="username-reset"><b>{{ __('Tên đăng nhập: ') }}</b></label>
                        <div class="form-group">
                            <input id="username-reset" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder = "Enter your username..." required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label for="email-reset"><b>{{ __('E-Mail của bạn: ') }}</b></label>
                        <div class="form-group">
                            <input id="email-reset" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder = "Enter your email..." required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row form-group justify-content-center">
                            <div class="btn-reset">
                                <button type="submit" class="btn btn-lg btn-outline-dark">
                                    {{ __('Gửi yêu cầu') }}
                                </button>
                            </div>
                            <div class="btn-cancel">
                                <button type="button" class="btn btn-lg btn-outline-dark">
                                    {{ __('Hủy') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
