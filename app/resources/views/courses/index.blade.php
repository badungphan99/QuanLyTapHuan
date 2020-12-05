@extends('layouts.app')
<title>Chương trình @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/program-index.css') }}">
@section('content')
        <div class="container">
            <div class="head-content">
                <h1 class="display-4">Các khóa tập huấn</h1><br>
                <a href="/course/create" class="btn btn-lg btn-outline-dark pull-right" id="create_course"><span><i class="fa fa-plus" aria-hidden="true"></i></span> &nbsp Thêm mới</a><br><br>

            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên khóa tập huấn</th>
                            <th>Số lượng</th>
                            <th>Địa điểm</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($courses->count() == 0)
                            <tr>
                                <td colspan="11">
                                    <h5 class="text-warning text-center">Không tìm thấy khóa học nào</h5>
                                </td>
                            </tr>
                        @endif
                        @foreach ($courses as $key => $course)
                            <tr>
                                <th scope="row">{{ ++$key }}</td>
                                <td><label for="">{{ $course->name }}</label></td>
                                <td><p class="font-weight-light">{{ $course->num_student }}</p></td>
                                <td><p class="font-weight-light">{{ $course->location }}</p></td>
                                <td>
                                    @if ($course->status == 1)
                                        <p class="font-weight-dark">Active</p>
                                    @else
                                        <p class="font-weight-light">Inactive</p>
                                    @endif
                                </td>
                                <td>
                                    <a href="/course/edit/{{ $course->id }}" class="btn btn-lg btn-outline-dark"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>&nbsp Chỉnh sửa</a>
                                    <button type="button" class="btn btn-lg btn-outline-dark" data-toggle="modal" data-target="#exampleModal">
                                       Chi tiết
                                    </button>

                                    <div class="modal fade" id="exam{{$course->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{ $course->name }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <label for=""><b>Chương trình: </b></label>
                                                <p class="font-weight-light">{{ $course->program_id }}</p>
                                                <label for=""><b>Nội dung: </b></label>
                                                <p class="font-weight-light">{{ $course->content }}</p>
                                                <label for=""><b>Ngày khai giảng: </b></label>
                                                <p class="font-weight-light">{{ $course->date }}</p>
                                                <label for=""><a href="/course/teacher/{{ $course->id }}">Giảng viên phụ trách</a></label>
                                                <br>
                                                <label for=""><a href="/course/student/{{ $course->id }}">Sinh viên đã đăng ký</a></label>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection