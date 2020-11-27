<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Courses</title>

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
            <h1>Chỉnh sửa khóa tập huấn</h1>
            <form action = "/course/edit/{{$course->id}}" method = "post">
                @csrf
                <div class="form-group">
                    <label for="nameCourse">Tên khóa học:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$course->name}}">
                </div>
                <div class="form-group">
                    <label for="dateCourse">Ngày khai giảng:</label>
                    <input type="text" class="form-control" id="date" name="date" value="{{$course->date}}">
                </div>
                <div class="form-group">
                    <label for="contentCourse">Nội dung:</label>
                    <input type="text" class="form-control" id="content" name="content" value="{{$course->content}}">
                </div>
                <div class="form-group">
                    <label for="programCourse">Chương trình:</label>
                    <input type="text" class="form-control" id="program" name="program_id" value="{{$course->program_id}}">
                </div>
                <div class="form-group">
                    <label for="nameCourse">Địa điểm:</label>
                    <input type="text" class="form-control" id="location" name="location" value="{{$course->location}}">
                </div>
                <div class="form-group">
                    <label for="num_stdCourse">Số lượng học viên:</label>
                    <input type="number" class="form-control" id="num_student"  name="num_student" value="{{$course->num_student}}">
                </div>
                <div class="form-group">
                    <label for="nameCourse">Trạng thái:</label>
                    <input type="text" class="form-control" id="status" name="status" value="{{$course->status}}">
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </body>
</html>
