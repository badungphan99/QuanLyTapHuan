@extends('layouts.app')
<title>Danh sách sinh viên @yield('title')</title>
<link rel="stylesheet" href="{{ asset('css/program-index.css') }}">
@section('content')
<div class="content">
    <div class="dashboard_left">
        <div class="left_item">
            <div id="sidebar" class="nav-collapse ">
                <ul class="sidebar-menu">
                    <li class="sub-menu" style="border-top:none;">
                        <a class="" href="{{ url('/home') }}">
                            <i class="fas fa-home"></i>
                            <span>Trang chủ</span>
                        </a>
                    </li>
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
                    <li class="active">
                        <a href="/student/list">
                            <i class="fas fa-user"></i>
                            <span>Danh sách sinh viên</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="dashboard_right">
        <div class="container">
            <h1 class="display-4">Danh sách sinh viên</h1>
            <div class="table-responsive">
                <table class="table hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ và tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Các khóa học đã đăng ký</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $key => $student)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$student -> fullname}}</td>
                            <td>{{$student -> email}}</td>
                            <td>{{$student -> phone_number}}</td>
                            <td>
                                <ul>
                                    @foreach ($enroll as $k => $e)
                                    <li>{{$e -> name}}</li>
                                    @endforeach
                                </ul> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection