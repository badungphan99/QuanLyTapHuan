@extends('layouts.app')
<title>Thống kê @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <style>
        .display-4{
            margin: 60px 0 30px;
        }
    </style>
@section('content')
<div class="container">
    <div id="piechart">
        <h1 class="display-4">Thống kê các khóa học</h1>
        <img src="../img/plot.png" alt="" style="width: 70%">
    </div>
</div>


@endsection
