@extends('layouts.app')
<title>SuperAdmin </title>
@section('content')

<div class="container">
    <div class="content">
        <!-- <div class="row"> -->
        <h1 class="heading-page"><i class="fas fa-home"> / </i>
            <span><u>Thông tin người dùng</u></span></h1>
        <div class="info_user">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="form-group"><label class="form-label control-label"><b>Họ tên:  </b> &nbsp; backend ở đây</label>
                        <!-- <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Họ tên" maxlength="10"></div> -->
                    </div>
                    <div class="form-group"><label class="form-label control-label">Tên đăng nhập: backend ở đây</label>
                        <!-- <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Tên đăng nhập" maxlength="10"></div> -->
                    </div>
                    <div class="form-group"><label class="form-label control-label">Mật khẩu</label>
                        <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Mật khẩu" maxlength="10"></div>
                    </div>
                    <div class="form-group"><label class="form-label control-label">Xác nhận mật khẩu</label>
                        <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Xác nhận lại mật khẩu" maxlength="10"></div>
                    </div>
                    <!-- unit -->
                    <div class="form-group"><label class="form-label control-label">Đơn vị</label>
                        <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Đơn vị" maxlength="10"></div>
                    </div>

                    <div class="form-group"><label class="form-label control-label">Email</label>
                        <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Email" maxlength="10"></div>
                    </div>
                    <div class="form-group"><label class="form-label control-label">Email khác</label>
                        <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Email khác" maxlength="10"></div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="form-group"><label class="form-label control-label">Điện thoại</label>
                        <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Điện thoại" maxlength="10"></div>
                    </div>
                    <div class="form-group"><label class="form-label control-label">Số điện thoại khác</label>
                        <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Số điện thoại khác" maxlength="10"></div>
                    </div>
                    <!-- role -->
                    <div class="form-group"><label class="form-label control-label">Vai trò</label>
                        <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Vai trò " maxlength="10"></div>
                    </div>
                    <!-- position -->
                    <div class="form-group"><label class="form-label control-label">Chức vụ</label>
                        <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Chức vụ" maxlength="10"></div>
                    </div>
                    <!-- academic_rank -->
                    <div class="form-group"><label class="form-label control-label">Học hàm</label>
                        <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Học Hàm" maxlength="10"></div>
                    </div>
                    <!-- academic_degree -->
                    <div class="form-group"><label class="form-label control-label">Học vị</label>
                        <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Học vị" maxlength="10"></div>
                    </div>
                    <!-- note -->
                    <div class="form-group"><label class="form-label control-label">Ghi chú</label>
                        <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Ghi chú" maxlength="10"></div>
                    </div>
                </div>

            </div>
            <!-- </div> -->
        </div>
        <div class="course">

        </div>
    </div>
</div>
@endsection