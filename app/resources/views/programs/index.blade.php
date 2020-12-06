@extends('layouts.app')
<title>Chương trình @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/program-index.css') }}">
@section('content')
        <div class="container">
            <div class="head-content">
                <h1 class="display-4">Các chương trình tập huấn</h1>
                <a href="/program/create" class="btn btn-lg btn-outline-dark pull-right" id="create_course"><span><i class="fa fa-plus" aria-hidden="true"></i></span>&nbsp Thêm mới</a><br><br>
            </div>
            <div class="table-responsive">
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên chương trình</th>
                            <th>Chương trình tập huấn</th>
                            <th>Trạng thái</th>
                            <th>Các khóa học</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($programs->count() == 0)
                            <tr>
                                <td colspan="11">
                                    <h5 class="text-warning text-center">Không tìm thấy chương trình nào</h5>
                                </td>
                            </tr>
                        @endif
                        @foreach ($programs as $key => $program)
                            <tr>
                                <th scope="row">{{ ++$key }}</td>
                                <td><label for="">{{ $program->name }}</label></td>
                                <td><p class="font-weight-light">{{ $program->program }}</p></td>
                                <td><p class="font-weight-light">{{ $program->status }}</p></td>
                                <td><a href="/program/courses/{{$program->id}}" class="btn btn-lg btn-outline-dark"><span><i class="fa fa-list-ul" aria-hidden="true"></i></span>&nbsp Các khóa học</a></td>
                                <td>
                                    <a href="/program/edit/{{ $program->id }}" class="btn btn-lg btn-outline-dark"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>&nbsp Chỉnh sửa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><br><br>
        </div>
@endsection