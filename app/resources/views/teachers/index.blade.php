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
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h1>Danh sách giảng viên</h1>
                </div>
                <div class="col-sm-3"></div>
            </div>
            
            <div class="table-responsive">
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ và tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($users) == 0)
                            <tr>
                                <td colspan="11">
                                    <h5 class="text-warning text-center">Không tìm thấy giảng viên nào</h5>
                                </td>
                            </tr>
                        @endif
                        @foreach ($users as $key => $user)
                            <tr>
                                <th scope="row">{{ ++$key }}</td>
                                <td><label for="">{{ $user->fullname }}</label></td>
                                <td><p class="font-weight-light">{{ $user->email }}</p></td>
                                <td><p class="font-weight-light">{{ $user->phone_number }}</p></td>
                                <td><p class="font-weight-light">{{ $user->status }}</p></td>
                                <td><a href="/teacher/delete/{{$user->id}}" class="btn btn-danger" id="create_course">Xóa</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            <form action="/teacher/store/{{$class_id}}" method="post">
                @csrf
                <span class="badge badge-success">Giảng viên:</span>
                <select class="form-control" name="teacher_id">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
                <button type="submit" class="btn btn-dark">Thêm mới</button>
            </form>
            </div>
        </div>
    </body>
</html>
