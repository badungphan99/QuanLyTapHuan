<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Courses Manager</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <h1>Các khóa tập huấn</h1>
                </div>
                <div class="col-sm-4"></div>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên khóa tập huấn</th>
                            <th>Số lượng</th>
                            <th>Địa điểm</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($courses->count() == 0)
                            <tr>
                                <td colspan="11">
                                    <h5 class="text-warning text-center">Không tìm thấy khóa học nào</h5>
                                </td>
                            </tr>
                        @endif
                        @foreach ($courses as $key => $course)
                            <tr>
                                <th scope="row">{{ ++$key }}</td>
                                <td><label for="">{{ $course->name }}</label></td>
                                <td><p class="font-weight-light">{{ $course->num_student }}</p></td>
                                <td><p class="font-weight-light">{{ $course->location }}</p></td>
                                <td><p class="font-weight-light">{{ $course->status }}</p></td>
                                <td>
                                    <a href="/course/edit/{{ $course->id }}" class="btn btn-outline-warning">Chỉnh sửa</a>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exam{{$course->id}}">
                                        Chi tiết
                                    </button>
                                    
                                    <div class="modal fade" id="exam{{$course->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{ $course->name }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <label for=""><b>Chương trình: </b></label>
                                                <p class="font-weight-light">{{ $course->program_id }}</p>
                                                <label for=""><b>Nội dung: </b></label>
                                                <p class="font-weight-light">{{ $course->content }}</p>
                                                <label for=""><b>Ngày khai giảng: </b></label>
                                                <p class="font-weight-light">{{ $course->date }}</p>
                                                <label for=""><a href="/course/teacher/{{ $course->id }}">Giảng viên phụ trách</a></label>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a href="/course/create" class="btn btn-primary" id="create_course">Thêm mới</a>
        </div>
    </body>
</html>
