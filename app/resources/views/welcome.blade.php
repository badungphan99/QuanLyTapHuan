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
                    <h2>Danh sách các khóa huấn luyện</h2>
                </div>
            </div> 
        </div> 
        <table style="width:100%" class="table table-bordered">
            <thead>
                <tr class="table-active" align="center">
                    <th>Tên khóa học</th>
                    <th>Địa điểm</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($courses as $key => $course)
                <tr>
                    <td><label for="">{{ $course->name }}</label></td>
                    <td><p class="font-weight-light">{{ $course->location }}</p></td>
                    <td>
                                    @if ($course->status == 1)
                                        <p class="font-weight-dark">Active</p>
                                    @else
                                        <p class="font-weight-light">Inactive</p>
                                    @endif
                    </td>
                </tr>
             @endforeach

            </tbody>
        </table>
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