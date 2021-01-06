@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/home.css') }}"> @section('content')
<div class="content">
    <div class="dashboard_left">
        <div class="left_item">
            <div id="sidebar" class="nav-collapse ">
                <ul class="sidebar-menu">
                    <li class="active">
                        <a class="" href="{{ url('/home') }}">
                            <i class="fas fa-home"></i>
                            <span>Trang chủ</span>
                        </a>
                    </li>
                    @if ( $role == 1 )
                    <li class="sub-menu">
                        <a href="/program">
                            <i class="fas fa-book-reader"></i>
                            <span>Quản lí chương trình và khóa học</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="/superAdmin">
                            <i class="fas fa-users"></i>
                            <span>Quản lí nhân sự</span>
                        </a>
                    </li>

                    @elseif ( $role == 2 )
                    <li class="sub-menu">
                        <a href="/superAdmin" class="">
                            <i class="fas fa-users"></i>
                            <span>Quản lí nhân sự</span>
                        </a>
                    </li>
                    @endif
                    <li class="sub-menu">
                        <a href="/student/list" class="">
                            <i class="fas fa-user"></i>
                            <span>Danh sách sinh viên</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="dashboard_right">
        <!-- <div class="row justify-content-start">
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body ">
                        @if (session('status'))
                        <div class="alert alert-secondary" role="alert ">
                            {{ session('status') }}
                        </div>
                        @endif {{ __('You are logged in!') }}
                    </div>
                    <div class="card-register">
                    @if (session('success'))
                        <div class="alert alert-success">
                             <p>{{ session('success') }}</p>
                        </div>
                    @endif               
                    </div>
                </div>
            </div>
        </div> -->


        <section class="pricing-tables nd">
            <div class="container">
                <div class="alert alert-success login-alert" role="alert">
                    @if (session('status'))
                    <div class="alert alert-secondary" role="alert ">
                        {{ session('status') }}
                    </div>
                    @endif Xin chào, {{Auth::user()->username}} !
                </div>
                <div class="row ">
                    <div class="col-md-12 ">
                        <div class="section-heading ">
                            <h2>Những khóa huấn luyện đã đăng ký</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($course_users as $key => $course)
                        <div class="col-md-4">
                            <div class="table-item">
                                <div class="content-top">
                                    <img src="img/course.jpg" class="course-img">
                                    <div class="course-reg">
                                        <a href="/home/register/{{$course->id}}" class="btn-reg btn btn-lg btn-secondary" role="button"><span><i class="fa fa-plus" aria-hidden="true"></i></span>&nbsp Đăng ký</a>
                                    </div>
                                </div>
                                <div class="content-bot">
                                    <ul class="text-left">
                                        <li>Khóa học: <br><a href=" ">{{$course->name}}</a></li>
                                    </ul>
                                    <div class="row course-info">
                                        <div class="col-xl-6 col-md-6 col-12 left-info justify-content-start">
                                            Địa điểm: <br><a href=" ">{{$course->location}}</a>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12 right-info justify-content-end">
                                            Trạng thái: <br><a href="#">Active</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Tất cả các khóa huấn luyện</h2>
                    </div>
                </div> 
            </div> 

                @if (count($courses) == 0)
                <tr>
                    <td colspan="11 ">
                        <h2 class="text-warning text-center ">Không tìm thấy khóa học nào</h2>
                    </td>
                </tr>
                @endif
                <div class="row owl-carousel" style="margin-left:0px;">
                    @foreach ($courses as $key => $course)
                        @if($course->status == 1)
                        <div class="table-item ">
                            <div class="content-top">
                                <img src="img/course.jpg" class="course-img">
                                <div class="course-reg">
                                    <a href="/home/register/{{$course->id}}" class="btn-reg btn btn-lg btn-secondary" role="button"><span><i class="fa fa-plus" aria-hidden="true"></i></span>&nbsp Đăng ký</a>
                                </div>
                            </div>
                            <div class="content-bot">
                                <ul class="text-left">
                                    <li>Khóa học: <br><a href=" ">{{$course->name}}</a></li>
                                </ul>
                                <div class="row course-info">
                                    <div class="col-xl-6 col-md-6 col-12 left-info justify-content-start">
                                        Địa điểm: <br><a href=" ">{{$course->location}}</a>
                                    </div>
                                    <div class="col-xl-6 col-md-6 col-12 right-info justify-content-end">
                                        Trạng thái: <br><a href="#">Active</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            dotsEach: true,
            autoplayTimeout: 5000,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><span><i class='fa fa-chevron-left' aria-hidden='true'></i></span></div>", "<div class='nav-btn next-slide'><span><i class='fa fa-chevron-right' aria-hidden='true'></i></span></div>"],
        });
        // $(".owl-prev").click(function(){
        //     owl.trigger("prev.owl.carousel");
        // });
        // $(".owl-next").click(function(){
        //     owl.trigger("next.owl.carousel");
        // });
    });
</script>
@endsection