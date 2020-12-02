@extends('layouts.app')
<title>SuperAdmin </title>
<link rel="stylesheet" href="{{ asset('css/super_admin.css') }}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@section('content')

<div class="container main_wrapper">

    <div id="mainLeft">
        <h1 class="heading-page"><i class="fas fa-home"> / </i>
            <span><u>Người dùng</u></span>
        </h1>
        <div class="filter-report">

            <div class="boxLeft ">
                <h1 class="leftTitle">Vai trò</h1>
                <div class="styleBox">
                    <div>
                        <input type="checkbox" class="styleFont">&nbsp;<span>Quản trị hệ thống</span>
                    </div>
                    <div>
                        <input type="checkbox" class="styleFont">&nbsp;<span>Quản lí</span>
                    </div>
                    <div>
                        <input type="checkbox" class="styleFont">&nbsp;<span>Giáo viên</span>
                    </div>
                    <div>
                        <input type="checkbox" class="styleFont">&nbsp;<span>Học viên</span>
                    </div>
                </div>
            </div>
            <div class="boxLeftC ">
                <h2 class="leftTitle">Trạng thái</h2>
                <div class="styleBox">
                    <div>
                        <input type="checkbox" class="styleFont">&nbsp;<span>Tất cả</span>
                    </div>
                    <div>
                        <input type="checkbox" class="styleFont">&nbsp;<span>Kích hoạt</span>
                    </div>
                    <div>
                        <input type="checkbox" class="styleFont">&nbsp;<span>Vô hiệu hóa</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="mainRight">
        <div>
            <div class="search-box">
                <form class="search-form" action=""> <input class="form-control" placeholder="Search fullname, username..." type="text">
                    <button class="btn btn-link search-btn"><i class="fas fa-search" style="color:black;"></i>
                     </button>
                </form>
            </div>
            <div class="menuRight">
                <div class="add-user">
                    <button class="btn dropbtn" style="background-color: rgb(204, 199, 199);" data-toggle="modal" data-target="#modalAdd">
                            Thêm người dùng
                        </button>

                </div>
                <div id="modalAdd" class="modal fade" role="dialog">
                    <div class="modal-dialog" style="width:500px; height:800px">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="loginlabel">THÊM NGƯỜI DÙNG MỚI</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                            </div>
                            <form action="/superAdmin/create-new-account" method="post">
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="form-label control-label">Họ tên</label>
                                                <div class="form-wrap"><input id="" name="fullname" class="form-control" type="text" placeholder="Họ tên" maxlength="10"></div>
                                            </div>
                                            <div class="form-group"><label class="form-label control-label">Tên đăng nhập</label>
                                                <div class="form-wrap"><input id="" name="username" class="form-control" type="text" placeholder="Tên đăng nhập" maxlength="10"></div>
                                            </div>
                                            <div class="form-group"><label class="form-label control-label">Mật khẩu</label>
                                                <div class="form-wrap"><input id="" name="password" class="form-control" type="text" placeholder="Mật khẩu" maxlength="10"></div>
                                            </div>
                                            <div class="form-group"><label class="form-label control-label">Xác nhận mật khẩu</label>
                                                <div class="form-wrap"><input id="" name="repass" class="form-control" type="text" placeholder="Xác nhận lại mật khẩu" maxlength="10"></div>
                                            </div>
                                            <!-- unit -->
                                            <div class="form-group"><label class="form-label control-label">Đơn vị</label>
                                                <div class="form-wrap"><input id="" name="unit" class="form-control" type="text" placeholder="Đơn vị" maxlength="10"></div>
                                            </div>

                                            <div class="form-group"><label class="form-label control-label">Email</label>
                                                <div class="form-wrap"><input id="" name="email" class="form-control" type="text" placeholder="Email" maxlength="10"></div>
                                            </div>
                                            <div class="form-group"><label class="form-label control-label">Email khác</label>
                                                <div class="form-wrap"><input id="" name="other_email" class="form-control" type="text" placeholder="Email khác" maxlength="10"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group"><label class="form-label control-label">Điện thoại</label>
                                                <div class="form-wrap"><input id="" name="phone_number" class="form-control" type="text" placeholder="Điện thoại" maxlength="10"></div>
                                            </div>
                                            <div class="form-group"><label class="form-label control-label">Số điện thoại khác</label>
                                                <div class="form-wrap"><input id="" name="other_phone_number" class="form-control" type="text" placeholder="Số điện thoại khác" maxlength="10"></div>
                                            </div>
                                            <!-- role -->
                                            <div class="form-group"><label class="form-label control-label">Vai trò</label>
                                                <div class="form-wrap"><input id="" name="role" class="form-control" type="text" placeholder="Vai trò " maxlength="10"></div>
                                            </div>
                                            <!-- position -->
                                            <div class="form-group"><label class="form-label control-label">Chức vụ</label>
                                                <div class="form-wrap"><input id="" name="position" class="form-control" type="text" placeholder="Chức vụ" maxlength="10"></div>
                                            </div>
                                            <!-- academic_rank -->
                                            <div class="form-group"><label class="form-label control-label">Học hàm</label>
                                                <div class="form-wrap"><input id="" name="academic_rank" class="form-control" type="text" placeholder="Học Hàm" maxlength="10"></div>
                                            </div>
                                            <!-- academic_degree -->
                                            <div class="form-group"><label class="form-label control-label">Học vị</label>
                                                <div class="form-wrap"><input id="" name="academic_degree" class="form-control" type="text" placeholder="Học vị" maxlength="10"></div>
                                            </div>
                                            <!-- note -->
                                            <div class="form-group"><label class="form-label control-label">Ghi chú</label>
                                                <div class="form-wrap"><input id="" name="note" class="form-control" type="text" placeholder="Ghi chú" maxlength="10"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-outline-dark" >Save</button>
                                    <button type="submit" class="btn btn-outline-dark" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- </div> -->


            </div>
            <div class="show_table">
                <div class="table-responsive">
                    <div class="scroll_overflow">
                        <table class="table table-hover ">
                            <thead height='80px;'>
                                <tr>
                                    <th><input type="checkbox"></th>
                                    <th>Họ tên</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Phân quyền</th>
                                    <th>Đơn vị</th>
                                    <th>Email</th>
                                    <th>Điện thoại</th>
                                    <th>Chức vụ</th>
                                    <th>Chi tiết </th>
                                </tr>
                            </thead>

                            <tbody style=" background-color: white; ">
                                @foreach ($listUser as $user)
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>{{ $user['fullname'] }}</td>
                                        <td>{{ $user['username'] }}</td>
                                        <td>@if ($user['role'] == 1) Quản trị hệ thống
                                            @elseif ($user['role'] == 2) Quản lý
                                            @elseif ($user['role'] == 3) Giáo viên
                                            @elseif ($user['role'] == 3) Học viên
                                            @endif</td>
                                        <td>{{ $user['unit'] }}</td>
                                        <td>{{ $user['email'] }}</td>
                                        <td>{{ $user['phone_number'] }}</td>
                                        <td>{{ $user['position'] }}</td>
                                        <td>
                                        <a href="" style="color:black;margin-left:5px; font-size:20px" data-toggle="modal" data-target="#modalEdit{{$user['id']}}"><i class="fas fa-edit"></i></a>
                                        <div id="modalEdit{{$user['id']}}" class="modal fade" role="dialog">
                                                <div class="modal-dialog" style="width:500px; height:800px">
                                                    <!-- Modal content-->
                                                    <form action="{{url('/superAdmin/update_info_user')}}" method="POST" id="{{ $user['id'] }}">
                                                        @csrf <!-- {{ csrf_field() }} -->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h3 class="modal-title" id="loginlabel">CẬP NHẬT THÔNG TIN</h3>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="col-md-12">

                                                                        <div class="col-md-6">
                                                                            <div class="form-group"><label class="form-label control-label">Họ tên</label>
                                                                                <div class="form-wrap"><input id="" name="fullname" class="form-control" type="text" maxlength="10" value="{{ $user['fullname'] }}"></div>
                                                                            </div>
                                                                            <div class="form-group"><label class="form-label control-label">Tên đăng nhập</label>
                                                                            <div class="form-wrap"><input id="" name="username" class="form-control" type="text" maxlength="10" readonly value="{{ $user['username'] }}"></div>
                                                                            </div>
                                                                            {{-- <div class="form-group"><label class="form-label control-label">Mật khẩu</label>
                                                                                <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10" value="{{ $user['password'] }}"></div>
                                                                            </div> --}}
                                                                            <!-- <div class="form-group"><label class="form-label control-label">Xác nhận mật khẩu</label>
                                                                                <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                                            </div> -->
                                                                            <div class="form-group"><label class="form-label control-label">Đơn vị</label>
                                                                                <div class="form-wrap"><input id="" name="unit" class="form-control" type="text" maxlength="10" value="{{ $user['unit'] }}"></div>
                                                                            </div>
                                                                            <!-- position -->
                                                                            <div class="form-group"><label class="form-label control-label">Chức vụ</label>
                                                                                <div class="form-wrap"><input id="" name="role" class="form-control" type="text" placeholder="Chức vụ" maxlength="10" value="{{ $user['role'] }}"></div>
                                                                            </div>
                                                                            <div class="form-group"><label class="form-label control-label">Email</label>
                                                                                <div class="form-wrap"><input id="" name="email" class="form-control" type="text" maxlength="10" value="{{ $user['email'] }}"></div>
                                                                            </div>
                                                                            <div class="form-group"><label class="form-label control-label">Email khác</label>
                                                                                <div class="form-wrap"><input id="" name="other_email" class="form-control" type="text" maxlength="10" value="{{ $user['other_email'] }}"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 ">
                                                                            <div class="form-group"><label class="form-label control-label">Điện thoại</label>
                                                                                <div class="form-wrap"><input id="" name="phone_number" class="form-control" type="text" maxlength="10" value="{{ $user['phone_number'] }}"></div>
                                                                            </div>
                                                                            <div class="form-group"><label class="form-label control-label">Số điện thoại khác</label>
                                                                                <div class="form-wrap"><input id="" name="other_phone_numer" class="form-control" type="text" maxlength="10" value="{{ $user['other_phone_number'] }}"></div>
                                                                            </div>
                                                                            <div class="form-group"><label class="form-label control-label">Vai trò</label>
                                                                                <div class="form-wrap"><input id="" name="position" class="form-control" type="text" maxlength="10" value="{{ $user['position'] }}"></div>
                                                                            </div>
                                                                            <div class="form-group"><label class="form-label control-label">Học hàm</label>
                                                                                <div class="form-wrap"><input id="" name="academic_rank" class="form-control" type="text" maxlength="10" value="{{ $user['academic_rank'] }}"></div>
                                                                            </div>
                                                                            <div class="form-group"><label class="form-label control-label">Học vị</label>
                                                                                <div class="form-wrap"><input id="" name="academic_degree" class="form-control" type="text" maxlength="10" value="{{ $user['academic_degree'] }}"></div>
                                                                            </div>
                                                                            <div class="form-group"><label class="form-label control-label">Ghi chú</label>
                                                                                <div class="form-wrap"><input id="" name="note" class="form-control" type="text" maxlength="10" value="{{ $user['note'] }}"></div>
                                                                            </div>
                                                                        </div>

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-outline-dark">Save</button>
                                                                <button type="submit" class="btn btn-outline-dark" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <a href=" " style="color:black;margin-left:5px; font-size:20px "><i class="fa fa-trash-o "></i></a>
                                            <a href=" " style="color:black;margin-left:5px; font-size:20px "><i class="fas fa-user"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
