@extends('layouts.app')
<title>Chỉnh sửa @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/program-update.css') }}">
@section('content')
        <div class="container">
            <h1 class="display-4">Chỉnh sửa khóa tập huấn</h1>
            <form class="update" action = "/program/edit/{{$program->id}}" method = "post">
                @csrf
                <div class="form-group">
                    <label for="nameCourse">Tên chương trình:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$program->name}}">
                </div>
                <div class="form-group">
                    <label for="dateCourse">Chương trình tập huấn:</label>
                    <input type="text" class="form-control" id="program" name="program" value="{{$program->program}}">
                </div>
                <div class="form-group">
                    <label for="nameCourse">Trạng thái:</label>
                    <select class="custom-select" name="status">
                        @if ($program->status == 1)
                            <option value="1" selected>Kích hoạt</option>
                            <option value="0">Vô hiệu hóa</option>
                        @elseif ($program->status == 0)
                            <option value="0" selected>Vô hiệu hóa</option>
                            <option value="1">Kích hoạt</option>
                        @endif
                    </select>
                </div>
                <div class="btn-update d-flex justify-content-end">
                    <button type="submit" class="btn btn-lg btn-outline-dark"><i class="far fa-edit"></i>&nbsp&nbsp</span>Cập nhật</button>&nbsp&nbsp&nbsp
                    <button type="submit" class="btn btn-lg btn-outline-dark"><span><i class="fa fa-times"></i>&nbsp&nbsp</span>Hủy</button>
                </div>
            </form>
        </div>
@endsection
