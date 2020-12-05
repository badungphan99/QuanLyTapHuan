@extends('layouts.app')
<title>Chỉnh sửa khóa tập huấn @yield('title')</title>
    <style>
        .head-content{
            margin-top: 3em;
        }
        .form-update{
            width: 75%;
            margin: 15px auto;
        }
        .btn-update button{
            margin: 0 15px 0 0;
        }
    </style>
@section('content')
        <div class="container">
            <div class="head-content">
                <h1 class="display-4">Chỉnh sửa khóa tập huấn</h1>
            </div>
            <form class="form-update" action = "/course/edit/{{$course->id}}" method = "post">
                @csrf
                <div class="form-group">
                    <label for="nameCourse">Tên khóa học:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$course->name}}">
                </div>
                <div class="form-group">
                    <label for="dateCourse">Ngày khai giảng:</label>
                    <input type="text" class="form-control" id="date" name="date" value="{{$course->date}}">
                </div>
                <div class="form-group">
                    <label for="contentCourse">Nội dung:</label>
                    <input type="text" class="form-control" id="content" name="content" value="{{$course->content}}">
                </div>
                <div class="form-group">
                    <label for="programCourse">Chương trình:</label>
                    <input type="text" class="form-control" id="program" name="program_id" value="{{$course->program_id}}">
                </div>
                <div class="form-group">
                    <label for="nameCourse">Địa điểm:</label>
                    <input type="text" class="form-control" id="location" name="location" value="{{$course->location}}">
                </div>
                <div class="form-group">
                    <label for="num_stdCourse">Số lượng học viên:</label>
                    <input type="number" class="form-control" id="num_student"  name="num_student" value="{{$course->num_student}}">
                </div>
                <div class="form-group">
                    <label for="nameCourse">Trạng thái:</label>
                    <input type="text" class="form-control" id="status" name="status" value="{{$course->status}}">
                </div>
                <div class="row btn-update justify-content-end">
                    <button type="submit" class="btn btn-lg btn-outline-dark"><span><i class="fa fa-check" aria-hidden="true"></i></span>&nbsp Cập nhật</button>
                    <button type="submit" class="btn btn-lg btn-outline-dark"><span><i class="fa fa-times" aria-hidden="true"></i></span>&nbsp Hủy</button>
                </div>
            </form><br><br>
        </div>
@endsection