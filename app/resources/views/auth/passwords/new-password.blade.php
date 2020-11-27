@extends('layouts.app')
<title>Mật khẩu mới @yield('title')</title>
<style>
    body{
        background-image: url('../img/main_banner.jpg');
        background-size: cover;
    }

    .content{
        height: 100vh !important;
    }

    .card{
        position: relative;
        border-radius: 5px;
        padding: 30px 15px;
        margin: 100px 0;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

    }

    .new-password{
        margin: 30px 0;
    }

</style>


@section('content')
<div class="container">
<div class="row content justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-8 col-10">
            <div class="card">
                <div class="card-body">
                    <h2 class = 'card-title' align = center><b>{{ __('Mật khẩu mới') }}</b></h2>
                    <div class="new-password">
                        <p>Mật khẩu mới của bạn là: {{$passwd}}</p>
                    </div>
                    <div class="row justify-content-center reset-password">
                        <a href="/home"><button class="btn btn-lg btn-outline-dark">Đăng nhập</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
