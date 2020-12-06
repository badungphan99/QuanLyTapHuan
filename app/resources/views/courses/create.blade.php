@extends('layouts.app')
<title>Thêm khóa tập huấn @yield('title')</title>
    <style>
        .head-content{
            margin-top: 3em;
        }
        .form-create{
            width: 75%;
            margin: 15px auto;
        }
        .btn-create button{
            margin: 0 15px 0 0;
        }
    </style>
@section('content')
        <div class="container">
            <div class="head-content">
                <h1 class="display-4">Thêm khóa tập huấn</h1>
            </div>
            <form class="form-create" action = "/course/store" method = "post">
                @csrf
                <div class="form-group">
                    <label for="nameCourse">Tên khóa học:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter the name" name="name">
                </div>
                <div class="form-group">
                    <label for="dateCourse">Ngày khai giảng:</label>
                    <input type="text" class="form-control" id="date" placeholder="Enter the date" name="date">
                </div>
                <div class="form-group">
                    <label for="contentCourse">Nội dung:</label>
                    <input type="text" class="form-control" id="content" placeholder="Enter the content" name="content">
                </div>
                <div class="form-group">
                    <label for="programCourse">Mã chương trình:</label>
                    <input type="text" class="form-control" id="program_id" placeholder="Enter the program" name="program_id">
                </div>
                <div class="form-group">
                    <label for="nameCourse">Địa điểm:</label>
                    <input type="text" class="form-control" id="location" placeholder="Enter the location" name="location">
                </div>
                <div class="form-group">
                    <label for="num_stdCourse">Số lượng học viên:</label>
                    <input type="number" class="form-control" id="num_student" placeholder="Enter the number of students" name="num_student">
                </div>
                <div class="form-group">
                    <label for="nameCourse">Trạng thái:</label>
                    <input type="text" class="form-control" id="status" placeholder="Enter name" name="status">
                </div>
                <div class="row btn-create justify-content-end">
                    <button type="submit" class="btn btn-lg btn-outline-dark"><span><i class="fa fa-check" aria-hidden="true"></i></span>&nbsp Cập nhật</button>
                    <button type="submit" class="btn btn-lg btn-outline-dark"><span><i class="fa fa-times" aria-hidden="true"></i></span>&nbsp Hủy</button>
                </div>
            </form><br><br>
        </div>
@endsection