@extends('layouts.app') @section('content')
<div class="content">
    <div class="dashboard_left">
        <div class="left_item">

      <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="{{ url('/home') }}">
                          <i class="fas fa-home"></i>
                          <span>Trang chủ</span>
                      </a>
          </li>
          @if ( $role == 1 )
          <li class="sub-menu">
            <a  href="/program">
                          <i class="fas fa-book-reader"></i>
                          <span>Quản lí chương trình và khóa học</span>
            </a>
          </li>
          <li class="sub-menu">
            <a  href="/superAdmin">
                          <i class="fas fa-user"></i>
                          <span>Quản lí nhân sự</span>
                      </a>
          </li>
          
          @elseif ( $role == 2 )
          <li class="sub-menu">
            <a href="/superAdmin" class="">
                          <i class="fas fa-user"></i>
                          <span>Quản lí nhân sự</span>
                      </a>
          </li>
          @endif
        </ul>
      </div>


        </div>
    </div>


    <div class="dashboard_right">
        <div class="row justify-content-center">
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body ">
                        @if (session('status'))
                        <div class="alert alert-secondary" role="alert ">
                            {{ session('status') }}
                        </div>
                        @endif {{ __('You are logged in!') }}
                    </div>

                    <div class="card-register">
                    @if (session('success'))
                        <div class="alert alert-success">
                             <p>{{ session('success') }}</p>
                        </div>
                    @endif               
                    </div>
                </div>
            </div>
        </div>


        <section class="pricing-tables nd">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12 ">
                        <div class="section-heading ">
                            <h2>Những khóa huấn luyện đã đăng ký</h2>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    @foreach ($course_users as $key => $course)
                    <div class="col-md-4 ">
                        <div class="table-item ">
                            <div class="top-content ">
                                <img src="img/course.jpg ">
                            </div>
                            <ul>
                                <li><a href=" ">{{$course->name}}</a></li>
                                <li><a href=" ">{{$course->location}}</a></li>
                                <li>
                                    @if($course->status == 1)
                                    <a href=" ">Active</a> @else
                                    <a href=" ">Inactive</a> @endif
                                </li>
                            </ul>
                            <a href="# " class="btn btn-secondary " role="button ">Đăng ký</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row ">
                    <div class="col-md-12 ">
                        <div class="section-heading ">
                            <h2>Tất cả các khóa huấn luyện</h2>
                        </div>
                    </div>
                </div>

                @if (count($courses) == 0)
                <tr>
                    <td colspan="11 ">
                        <h2 class="text-warning text-center ">Không tìm thấy khóa học nào</h2>
                    </td>
                </tr>
                @endif
                <div class="row ">
                    @foreach ($courses as $key => $course)
                    <div class="col-md-4 ">
                        <div class="table-item ">
                            <div class="top-content ">
                                <img src="img/course.jpg ">
                            </div>
                            <ul>
                                <li><a href=" ">{{$course->name}}</a></li>
                                <li><a href=" ">{{$course->location}}</a></li>
                                <li>
                                    @if($course->status == 1)
                                    <a href=" ">Active</a> @else
                                    <a href=" ">Inactive</a> @endif
                                </li>
                            </ul>
                            <a href="/home/register/{{$course->id}}" class="btn btn-secondary" role="button">Đăng ký</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>


</div>
@endsection