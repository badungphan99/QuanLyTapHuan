@extends('layouts.app')
<title>SuperAdmin </title>
@section('content')

<div class="container">
    <div class="content">
        <!-- <div class="row"> -->
        <div>
            <h1 class="heading-page"><i class="fas fa-home"> / </i>
                <span><b><u>Thông tin người dùng</u></b></span></h1>
            <div class="info_user">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label control-label"><b><i class="fas fa-signature"></i> &nbsp; Họ tên: </b></label>
                            </div>
                            <div class="form-group"><label class="form-label control-label"><b><i class="fas fa-user"></i> &nbsp; Tên đăng nhập:</b> </label>
                            </div>
                            <div class="form-group"><label class="form-label control-label"><b><i class="fas fa-lock"></i> &nbsp; Mật khẩu:</b> </label>
                            </div>
                            <div class="form-group"><label class="form-label control-label"><b><i class="fas fa-address-book"></i> &nbsp; Đơn vị: </b></label>
                            </div>
                            <!-- position -->
                            <div class="form-group"><label class="form-label control-label"><b><i class="fas fa-briefcase"></i> &nbsp; Chức vụ:</b></label>
                            </div>
                            <div class="form-group"><label class="form-label control-label"><b><i class="fas fa-envelope"></i> &nbsp; Email:</b></label>
                            </div>
                            <div class="form-group"><label class="form-label control-label"><b><i class="far fa-envelope"></i> &nbsp; Email khác: </b></label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group"> back-end hiển thị họ tên
                            </div>
                            <div class="form-group"> back-end hiển thị
                            </div>
                            <div class="form-group">back-end hiển thị mk
                            </div>
                            <div class="form-group"> back-end hiển thị
                            </div>
                            <div class="form-group"> back-end hiển thị
                            </div>
                            <div class="form-group">back-end hiển thị
                            </div>
                            <div class="form-group">back-end hiển thị mk
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label control-label"><b><i class="fas fa-phone-square"></i> &nbsp; Điện thoại:</b> </label>
                            </div>
                            <div class="form-group"><label class="form-label control-label"><b><i class="fas fa-phone-square"></i> &nbsp; Số điện thoại khác: </b></label>
                            </div>
                            <!-- role -->
                            <div class="form-group"><label class="form-label control-label"><b><i class="fas fa-user-plus"></i> &nbsp; Vai trò: </b></label>
                            </div>
                            <!-- academic_rank -->
                            <div class="form-group"><label class="form-label control-label"><b><i class="fas fa-plus-square"></i> &nbsp; Học hàm: </b></label>
                            </div>
                            <!-- academic_degree -->
                            <div class="form-group"><label class="form-label control-label"><b><i class="far fa-plus-square"></i> &nbsp; Học vị:</b></label>
                            </div>
                            <!-- note -->
                            <div class="form-group"><label class="form-label control-label"><b><i class="fas fa-sticky-note"></i> &nbsp; Ghi chú:</b></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> back-end hiển thị họ tên
                            </div>
                            <div class="form-group"> back-end hiển thị
                            </div>
                            <div class="form-group">back-end hiển thị mk
                            </div>
                            <div class="form-group"> back-end hiển thị
                            </div>
                            <div class="form-group"> back-end hiển thị
                            </div>
                            <div class="form-group">back-end hiển thị
                            </div>

                        </div>

                    </div>

                </div>
                <div>
                    <div class="edit-user">
                        <button class="btn dropbtn" style="background-color: rgb(204, 199, 199); margin-top:50px;margin-left:230px; " data-toggle="modal" data-target="#modalEdit">
                                Chỉnh sửa thông tin
                            </button>

                    </div>
                    <div id="modalEdit" class="modal fade" role="dialog">
                        <div class="modal-dialog" style="width:500px; height:800px">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="loginlabel">CHỈNH SỬA THÔNG TIN</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <form action="" id="">
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="form-label control-label">Họ tên</label>
                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                </div>
                                                <div class="form-group"><label class="form-label control-label">Tên đăng nhập</label>
                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10" readonly value=""></div>
                                                </div>
                                                <div class="form-group"><label class="form-label control-label">Mật khẩu</label>
                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                </div>
                                                <!-- <div class="form-group"><label class="form-label control-label">Xác nhận mật khẩu</label>
                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                </div> -->
                                                <div class="form-group"><label class="form-label control-label">Đơn vị</label>
                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                </div>
                                                <!-- position -->
                                                <div class="form-group"><label class="form-label control-label">Chức vụ</label>
                                                    <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Chức vụ" maxlength="10"></div>
                                                </div>
                                                <div class="form-group"><label class="form-label control-label">Email</label>
                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                </div>
                                                <div class="form-group"><label class="form-label control-label">Email khác</label>
                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group"><label class="form-label control-label">Điện thoại</label>
                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                </div>
                                                <div class="form-group"><label class="form-label control-label">Số điện thoại khác</label>
                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                </div>
                                                <div class="form-group"><label class="form-label control-label">Vai trò</label>
                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                </div>
                                                <div class="form-group"><label class="form-label control-label">Học hàm</label>
                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                </div>
                                                <div class="form-group"><label class="form-label control-label">Học vị</label>
                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                </div>
                                                <div class="form-group"><label class="form-label control-label">Ghi chú</label>
                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-outline-dark" data-dismiss="modal">Save</button>
                                    <button type="submit" class="btn btn-outline-dark" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- </div> -->
            </div>
        </div>
        <!-- danh sách khóa học sử dụng if else , nếu là admin hoặc SuperAdmin thì k hiển thị gì thêm ngoài thông tin các nhân , nếu  là 1 học viên hiển thị thêm các khóa học đang tham gia , nếu là giáo viên thì hiển thị thêm danh sách khóa tập huấn dang dạy-->
        <!-- hiển thi các khóa học mà  học viên đag tham gia  -->
        <!-- Sử dụng if else phân loại hiển thị-->
        <div class="course_list" style="margin-left:45px; margin-right:35px; margin-top:25px; margin-bottom:35px;">
            <div>
                <h3><i class="fas fa-align-justify"></i> &nbsp; <b>Danh sách khóa học đang tham gia </b></h3>


                <div class="show_table">
                    <div class="table-responsive">
                        <div class="scroll_overflow">
                            <table class="table table-hover ">
                                <thead height='80px;'>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên khóa học</th>
                                        <th>Số lượng</th>
                                        <th>Địa điểm</th>
                                        <th>Trạng thái</th>

                                    </tr>
                                </thead>

                                <tbody style=" background-color: white; ">
                                    <!-- Phân như Bạn Hiếu làm  -->
                                    <!-- @if ($courses->count() == 0)
                                    <tr>
                                        <td colspan="11">
                                            <h5 class="text-warning text-center">Không tìm thấy khóa học nào</h5>
                                        </td>
                                    </tr>
                                    @endif -->
                                    <tr>
                                        <td scope="row">1</td>
                                        <td><label for=""></label>2</td>
                                        <td>
                                            <p class="font-weight-light">3</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-light">4</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-light">5</p>
                                        </td>

                                    </tr>


                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hiển thi các khóa học mà giáo viên đang dạy  -->
        <div class="course_list" style="margin-left:45px; margin-right:35px; margin-top:25px; margin-bottom:35px;">
            <div>
                <h3><i class="fas fa-align-justify"></i> &nbsp; <b>Danh sách khóa học đang giảng dạy </b></h3>

                <div class="show_table">
                    <div class="table-responsive">
                        <div class="scroll_overflow">
                            <table class="table table-hover ">
                                <thead height='80px;'>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên khóa học</th>
                                        <th>Số lượng</th>
                                        <th>Địa điểm</th>
                                        <th>Trạng thái</th>

                                    </tr>
                                </thead>

                                <tbody style=" background-color: white; ">
                                    <!-- 
                                    @if ($courses->count() == 0)
                                    <tr>
                                        <td colspan="11">
                                            <h5 class="text-warning text-center">Không tìm thấy khóa học nào</h5>
                                        </td>
                                    </tr>
                                    @endif  -->
                                    <tr>
                                        <td scope="row">1</td>
                                        <td><label for="">2</label></td>
                                        <td>
                                            <p class="font-weight-light">3</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-light">4</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-light">5</p>
                                        </td>

                                    </tr>


                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection