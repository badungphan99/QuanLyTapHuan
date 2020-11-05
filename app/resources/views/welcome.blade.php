@extends('layouts.app')
<title>Trang chủ @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <style>
        .btn-link{
        color: black;
        text-decoration:none !important;
        }


    </style>
@section('content')
<section class="banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-img">
                    <h2></h2>
                    <span></span>                            
                </div>                       
            </div>
        </div>
    </div>
</section>

<section class="pricing-tables">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Các khóa huấn luyện nổi bật</h2>
                </div>
            </div> 
        </div> 
        <div class="row">
            <div class="col-md-4">
                <div class="table-item">
                    <div class="top-content">
                        <img src="img/course.jpg">
                    </div>
                    <ul>
                        <li><a href="#">100 Suspendisse dapibus</a></li>
                        <li><a href="#">10x Paleo celiac enamel</a></li>
                        <li><a href="#">Williamsburg organic post ironic</a></li>
                        <li><a href="#">Helvetica pinterest yuccie</a></li>
                        <li><a href="#">Plaid shabby chic godard</a></li>
                    </ul>
                    <a href="#" class="btn btn-secondary" role="button">Chi tiết</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="table-item">
                    <div class="top-content">
                        <img src="img/course.jpg">
                    </div>
                    <ul>
                        <li><a href="#">200 Suspendisse dapibus</a></li>
                        <li><a href="#">20x Paleo celiac enamel</a></li>
                        <li><a href="#">Williamsburg organic post ironic</a></li>
                        <li><a href="#">Helvetica pinterest yuccie</a></li>
                        <li><a href="#">Plaid shabby chic godard</a></li>
                    </ul>
                    <a href="#" class="btn btn-secondary" role="button">Chi tiết</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="table-item">
                    <div class="top-content">
                        <img src="img/course.jpg">
                    </div>
                    <ul>
                        <li><a href="#">400 Suspendisse dapibus</a></li>
                        <li><a href="#">40x Paleo celiac enamel</a></li>
                        <li><a href="#">Williamsburg organic post ironic</a></li>
                        <li><a href="#">Helvetica pinterest yuccie</a></li>
                        <li><a href="#">Plaid shabby chic godard</a></li>
                    </ul>
                    <a href="#" class="btn btn-secondary" role="button">Chi tiết</a>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<div class="next">
    <a href="#">Xem tất cả <marquee style="line-height: normal;" width="12%" direction="right">>>></marquee></a>
</div>

        
<script>
    $("#registerModal").on('show.bs.modal', function (e) {
        $("#loginModal").modal("hide");
    });
    $("#loginModal").on('show.bs.modal', function (e) {
        $("#registerModal").modal("hide");
    });
</script>
@endsection