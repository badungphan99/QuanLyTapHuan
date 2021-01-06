@extends('layouts.app')
<title>Thông tin cá nhân</title>
<style>
    .user-info{
        align-self: center;
    }
</style>
@section('content')

    <div class="container">
        <div class="content">
            <!-- <div class="row"> -->
            <div class="content_user">
                <h1 class="heading-page"><i class="fas fa-home"> / </i>
                    <span><b><i class="fas fa-user"></i></b></span>&nbsp Thông tin cá nhân</h1>
                <div class="info_user">

                    <div class="edit-user">
                        <div class="row justify-content-end">
                            <button class="btn btn-lg btn-outline-dark dropbtn" style="margin-top:10px; margin-bottom:15px; margin-left: 47px;" data-toggle="modal" data-target="#modalEdit">
                                <span><i class="fas fa-edit"></i></span> &nbsp Chỉnh sửa
                            </button>
                        </div>
                        <div id="modalEdit" class="modal fade" role="dialog">
                            <div class="modal-dialog" style="width:500px; height:800px">
                                <!-- Modal content-->
                                <form action="detail_user" method="POST">
                                @csrf
                                <!-- {{ csrf_field() }} -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="loginlabel">CẬP NHẬT THÔNG TIN</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body row">
                                            <!-- <div class="col-md-12"> -->
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="form-label control-label">Họ tên</label>
                                                    <div class="form-wrap"><input id="" name="fullname" class="form-control" type="text" maxlength="10" value="{{ $user['fullname'] }}"></div>
                                                </div>
                                                <div class="form-group"><label class="form-label control-label">Tên đăng nhập</label>
                                                    <div class="form-wrap"><input id="" name="username" class="form-control" type="text" maxlength="10" readonly value="{{ $user['username'] }}"></div>
                                                </div>
                                                <div class="form-group"><label class="form-label control-label">Đơn vị</label>
                                                    <div class="form-wrap"><input id="" name="unit" class="form-control" type="text" maxlength="10" value="{{ $user['unit'] }}"></div>
                                                </div>
                                                <!-- position -->
                                                <div class="form-group"><label class="form-label control-label">Chức vụ</label>
                                                    <div class="form-wrap"><input id="" name="position" class="form-control" type="text" placeholder="Chức vụ" maxlength="10" value="{{ $user['position'] }}"></div>
                                                </div>
                                                <div class="form-group"><label class="form-label control-label">Email</label>
                                                    <div class="form-wrap"><input id="" name="email" class="form-control" type="text" maxlength="10" value="{{ $user['email'] }}"></div>
                                                </div>
                                                <div class="form-group"><label class="form-label control-label">Email khác</label>
                                                    <div class="form-wrap"><input id="" name="other_email" class="form-control" type="text" maxlength="10" value="{{ $user['other_email'] }}"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="form-label control-label">Điện thoại</label>
                                                    <div class="form-wrap"><input id="" name="phone_number" class="form-control" type="text" maxlength="10" value="{{ $user['phone_number'] }}"></div>
                                                </div>
                                                <div class="form-group"><label class="form-label control-label">Số điện thoại khác</label>
                                                    <div class="form-wrap"><input id="" name="other_phone_number" class="form-control" type="text" maxlength="10" value="{{ $user['other_phone_number'] }}"></div>
                                                </div>
                                                <div class="form-group"><label class="form-label control-label">Vai trò</label>
                                                    <div class="form-wrap"><input id="" name="role" class="form-control" type="text" maxlength="10" readonly value="@if ($user['role'] == 1) Quản trị hệ thống
                                                    @elseif ($user['role'] == 2) Quản lý
                                                    @elseif ($user['role'] == 3) Giáo viên
                                                    @elseif ($user['role'] == 4) Học viên
                                                    @endif"></div>
                                                </div>
                                                <div class="form-group"><label class="form-label control-label">Học hàm</label>
                                                    <div class="form-wrap"><input id="" name="academic_rank" class="form-control" type="text" maxlength="10" value="{{$user['academic_rank']}}"></div>
                                                </div>
                                                <div class="form-group"><label class="form-label control-label">Học vị</label>
                                                    <div class="form-wrap"><input id="" name="academic_degree" class="form-control" type="text" maxlength="10" value="{{$user['academic_degree']}}"></div>
                                                </div>
                                                <div class="form-group"><label class="form-label control-label">Ghi chú</label>
                                                    <div class="form-wrap"><input id="" name="note" class="form-control" type="text" maxlength="10" value="{{$user['note']}}"></div>
                                                </div>
                                            </div>
                                            <!-- </div> -->
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-outline-dark">Save</button>
                                            <button type="submit" class="btn btn-outline-dark" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <form>
                        <div class="user_if">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row ">
                                        <label class="col-sm-4 col-form-label"><b><i class="fas fa-signature "></i> &nbsp; Họ tên: </b></label>
                                        <div class="col-sm-8 user-info">{{$user['fullname']}}
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-sm-4 col-form-label "><b><i class="fas fa-user "></i> &nbsp; Tên đăng nhập: </b></label>
                                        <div class="col-sm-8 user-info"> {{$user['username']}}
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-sm-4 col-form-label "><b><i class="fas fa-address-book "></i> &nbsp; Đơn vị: </b></label>
                                        <div class="col-sm-8 user-info"> {{$user['unit']}}
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-sm-4 col-form-label "><b><i class="fas fa-briefcase "></i> &nbsp;  Chức vụ: </b></label>
                                        <div class="col-sm-8 user-info"> {{$user['position']}}
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-sm-4 col-form-label "><b><i class="fas fa-envelope "></i> &nbsp;  Email: </b></label>
                                        <div class="col-sm-8 user-info"> {{$user['email']}}
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-sm-4 col-form-label "><b><i class="far fa-envelope "></i> &nbsp; Email khác:  </b></label>
                                        <div class="col-sm-8 user-info"> {{$user['other_email']}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col ">
                                    <div class="col ">
                                        <div class="form-group row ">
                                            <label class="col-sm-4 col-form-label"><b><i class="fas fa-phone-square "></i> &nbsp;  Điện thoại: </b></label>
                                            <div class="col-sm-8 user-info"> {{$user['phone_number']}}
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="col-sm-4 col-form-label"><b><i class="fas fa-phone-square "></i> &nbsp; Số ĐT khác: </b></label>
                                            <div class="col-sm-8 user-info"> {{$user['other_phone_number']}}
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="col-sm-4 col-form-label"><b><i class="fas fa-user-plus "></i> &nbsp; Vai trò: </b></label>
                                            <div class="col-sm-8 user-info"> @if ($user['role'] == 1) Quản trị hệ thống
                                                                    @elseif ($user['role'] == 2) Quản lý
                                                                    @elseif ($user['role'] == 3) Giáo viên
                                                                    @elseif ($user['role'] == 4) Học viên
                                                                    @endif
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="col-sm-4 col-form-label"><b><i class="fas fa-plus-square "></i> &nbsp; Học hàm: </b></label>
                                            <div class="col-sm-8 user-info"> {{$user['academic_rank']}}
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="col-sm-4 col-form-label"><b><i class="far fa-plus-square "></i> &nbsp;  Học vị:  </b></label>
                                            <div class="col-sm-8 user-info"> {{$user['academic_degree']}}
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="col-sm-4 col-form-label"><b><i class="fas fa-sticky-note "></i> &nbsp;  Ghi chú: </b></label>
                                            <div class="col-sm-8 user-info"> {{$user['note']}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
@endsection
