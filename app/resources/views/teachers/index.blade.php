@extends('layouts.app')
<title>Danh sách giảng viên @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/program-index.css') }}">
@section('content')
        <div class="container">
            <!-- <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h1>Danh sách giảng viên</h1>
                </div>
                <div class="col-sm-3"></div>
            </div> -->
            <div class="head-content">
                <h1 class="display-4">Danh sách giảng viên</h1>
                <!-- <a href="/teacher/create" id="create_teacher" class="btn btn-lg btn-outline-dark pull-right"><span><i class="fa fa-plus" aria-hidden="true"></i></span>&nbsp Thêm mới</a> -->
                <form action="/teacher/store/{{$class_id}}" method="post">
                    @csrf
                    <span class="badge badge-secondary">Giảng viên:</span>
                    <div class="#">
                        <select class="form-control" name="teacher_id">
                            @foreach ($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->fullname }}</option>
                            @endforeach
                        </select><br>
                        <div class="btn-add">
                            <button type="submit" class="btn btn-lg btn-outline-dark"><span><i class="fa fa-plus" aria-hidden="true"></i></span>&nbspThêm mới</button>
                        </div>
                    </div>
                </form>
            </div>
            <a href="/course" class="btn btn-outline-dark" id="create_course"><span><i class="fas fa-bars" aria-hidden="true"></i></span>&nbsp Khóa học</a>
            <a href="/program" class="btn btn-outline-dark" id="create_course"><span><i class="fas fa-bars" aria-hidden="true"></i></span>&nbsp Chương trình học</a>
            <div class="table-responsive">
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ và tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($users) == 0)
                            <tr>
                                <td colspan="11">
                                    <h5 class="text-warning text-center">Không tìm thấy giảng viên nào</h5>
                                </td>
                            </tr>
                        @endif
                        @foreach ($users as $key => $user)
                            <tr>
                                <th scope="row">{{ ++$key }}</td>
                                <td><label for="">{{ $user->fullname }}</label></td>
                                <td><p class="font-weight-light">{{ $user->email }}</p></td>
                                <td><p class="font-weight-light">{{ $user->phone_number }}</p></td>
                                <td>
                                    @if ($user->status == 1)
                                        <p class="font-weight-dark">Active</p>
                                    @else
                                        <p class="font-weight-light">Inactive</p>
                                    @endif
                                </td>
                                <td><a href="/teacher/delete/{{$user->id}}" class="btn btn-lg btn-outline-danger" id="create_course"><span><i class="fa fa-trash-o" aria-hidden="true"></i></span>&nbsp Xóa</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
@endsection
