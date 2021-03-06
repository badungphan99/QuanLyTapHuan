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
<div class="slider-wrapper">
    <div class="slider">
      <div class="col-md-12 heroSlider-fixed">
        <div class="overlay">

          <div class="slider responsive">
            <div class="fact">
              <img src="../img/img1.jpg" alt="" />
            </div>

            <div class="fact">
              <img src="../img/img3.jpg" alt="" />
            </div>

            <div class="fact">
              <img src="../img/img4.jpg" alt="" />
            </div>

            <div class="fact">
              <img src="../img/img2.jpg" alt="" />
            </div>

            <div class="fact">
              <img src="../img/img5.jpg" alt="" />
            </div>

            <div class="fact">
              <img src="../img/img6.jpg" alt="" />
            </div>
          </div>

          <div class="prev">
            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
          </div>
          <div class="next">
            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
          </div>

        </div>
      </div>
    </div>
  </div>
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
                <!-- @foreach ($courses as $key => $course)
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
                @endforeach -->
                    @foreach ($courses as $key => $course)
                        @if($course->status == 1)
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
                                        <li>Khóa học: <br><b>{{$course->name}}</b></li>
                                    </ul>
                                    <div class="row course-info">
                                        <div class="col-xl-6 col-md-6 col-12 left-info justify-content-start">
                                            Địa điểm: <br>{{$course->location}}
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12 right-info justify-content-end">
                                            Trạng thái: <br>Active
                                        </div>
                                    </div>
                                </div>
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
    $(".responsive").slick({
        prevArrow: $(".prev"),
        nextArrow: $(".next"),
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: false
                }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
        ]
        });
</script>
@endsection
