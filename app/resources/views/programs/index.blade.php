@extends('layouts.app')
<title>Trang chủ @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/program-index.css') }}">
@section('content')
        <div class="container">
            <!-- <div class="col-sm-2"></div>-->
            <div class="table-header">
                <div class="">
                    <h1 class = 'display-4'>Danh sách các chương trình tập huấn</h1>
                </div>
                <div class="pull-right">
                    <a href="/program/create" class="btn btn-lg btn-outline-dark" id="create_course"><i class="fa fa-plus"></i>&nbsp Thêm mới</a>
                </div><br>
            </div>
            <!-- <div class="col-sm-2"></div> -->
            
            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên chương trình</th>
                            <th>Chương trình tập huấn</th>
                            <th>Trạng thái</th>
                            <th>Các khóa học</th>
                            <th>Tùy chọn</th>
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
                                <td scope="row">{{ ++$key }}</td>
                                <td><label for="">{{ $program->name }}</label></td>
                                <td><p class="font-weight-light">{{ $program->program }}</p></td>
                                <td><p class="font-weight-light">{{ $program->status }}</p></td>
                                <td><a href="/course" class="btn btn-outline-dark"><i class="fa fa-list"></i>&nbsp Các khóa học</a></td>
                                <td>
                                    <a href="/program/edit/{{ $program->id }}"><i class="fa fa-edit"></i></a>                    
                                </td>
                            </tr>
                        @endforeach                       
                    </tbody>
                </table>
            </div>
        </div>
@endsection
