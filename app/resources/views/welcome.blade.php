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
              <img src="../img/img5.jpg" alt="" />
            </div>

            <div class="fact">
              <img src="../img/img2.jpg" alt="" />
            </div>

            <div class="fact">
              <img src="../img/img2.jpg" alt="" />
            </div>

            <div class="fact">
              <img src="../img/img3.jpg" alt="" />
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
<br><br><br>
  

<div class="container">
  <div class="jumbotron">
    <h1>Tại sao chọn chúng tôi</h1>      
    <p>Những khóa tập huấn của chúng tôi cung cấp những kiến thức đầy đủ nhất với phương pháp học tập đơn giản nhưng hiệu quả giúp học viên dễ dàng tiếp thu và đạt được kết quả tốt nhất.</p>
  </div>      
</div>



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
