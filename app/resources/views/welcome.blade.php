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
        <div class="col-md-10 col-md-offset-1">
            <div class="banner-img">
                <h2></h2>
                <span></span>                            
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
            @if (count($courses) == 0)
                    <tr>
                        <td colspan="11">
                            <h2 class="text-warning text-center">Không tìm thấy khóa học nào</h2>
                        </td>
                    </tr>
            @endif
            <div class="row">
                @foreach ($courses as $key => $course)
                    @if($course->status == 1)
                        <div class="col-md-4">
                            <div class="table-item">
                                <div class="top-content">
                                    <img src="img/course.jpg">
                                </div>
                                <ul>
                                    <li><a href="">{{$course->name}}</a></li>
                                    <li><a href="">{{$course->location}}</a></li>
                                </ul>
                                <a href="#" class="btn btn-secondary" role="button">Đăng ký</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
<br>


        
<script>
    $("#registerModal").on('show.bs.modal', function (e) {
        $("#loginModal").modal("hide");
    });
    $("#loginModal").on('show.bs.modal', function (e) {
        $("#registerModal").modal("hide");
    });
</script>
@endsection