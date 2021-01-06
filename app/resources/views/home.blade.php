@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card-register">
                    @if (session('success'))
                        <div class="alert alert-success">
                             <p>{{ session('success') }}</p>
                        </div>
                    @endif               
                </div>
                <div class="card-body">
                    @if ( $role == 1 )
                        <a href="/program">Quản lý chương trình và khóa học</a><br>
                        <a href="/superAdmin">Quản lý nhân sự</a> 
                    @elseif ( $role == 2 )
                        <a href="/superAdmin">Quản lý nhân sự</a>   
                    @endif
                </div>
            </div>
        </div>
    </div>
    <section class="pricing-tables">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Những khóa huấn luyện đã đăng ký</h2>
                </div>
            </div> 
        </div> 
        <div class="row">
            @foreach ($course_users as $key => $course)
                <div class="col-md-4">
                    <div class="table-item">
                        <div class="top-content">
                            <img src="img/course.jpg">
                        </div>
                        <ul>
                            <li><a href="">{{$course->name}}</a></li>
                            <li><a href="">{{$course->location}}</a></li>
                        </ul>
                        <a href="#" class="btn btn-secondary" role="button">Đăng ký</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Tất cả các khóa huấn luyện</h2>
                </div>
            </div> 
        </div> 

        @if (count($courses) == 0)
                <tr>
                    <td colspan="11">
                        <h2 class="text-warning text-center">Không tìm thấy khóa học nào</h2>
                    </td>
                </tr>
        @endif
        <div class="row">
            @foreach ($courses as $key => $course)
                @if($course->status == 1)
                    <div class="col-md-4">
                        <div class="table-item">
                            <div class="top-content">
                                <img src="img/course.jpg">
                            </div>
                            <ul>
                                <li><a href="">{{$course->name}}</a></li>
                                <li><a href="">{{$course->location}}</a></li>
                            </ul>
                            <a href="/home/register/{{$course->id}}" class="btn btn-secondary" role="button">Đăng ký</a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
</div>
@endsection
