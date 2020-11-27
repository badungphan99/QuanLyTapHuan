@extends('layouts.app')
<title>Thêm chương trình @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/program-create.css') }}">
@section('content')
        <div class="container">
            <h1 class="display-4">Thêm chương trình tập huấn</h1>
            <form class="create" action = "/program/store" method = "post">
                @csrf
                <div class="form-group">
                    <label for="nameProgram">Tên chương trình:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter the name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="Program">Chương trình:</label>
                    <input type="text" class="form-control" id="date" placeholder="Enter the date" name="program" required>
                </div>
                <div class="form-group">
                    <label for="nameCourse">Trạng thái:</label>
                    <input type="text" class="form-control" id="status" placeholder="Enter name" name="status" required>
                </div>
                <div class="row justify-content-end btn-create">
                    <button type="submit" class="btn btn-lg btn-outline-dark"><i class="far fa-edit"></i>&nbsp&nbsp</span>Cập nhật</button>&nbsp&nbsp&nbsp
                    <button type="submit" class="btn btn-lg btn-outline-dark"><span><i class="fa fa-times"></i>&nbsp&nbsp</span>Hủy</button>
                </div>
            </form>
        </div>
@endsection