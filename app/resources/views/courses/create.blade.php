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
            <h1>Thêm khóa tập huấn</h1>
            <form action = "/course/store" method = "post">
                @csrf
                <div class="form-group">
                    <label for="nameCourse">Tên khóa học:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter the name" name="name">
                </div>
                <div class="form-group">
                    <label for="dateCourse">Ngày khai giảng:</label>
                    <input type="text" class="form-control" id="date" placeholder="Enter the date" name="date">
                </div>
                <div class="form-group">
                    <label for="contentCourse">Nội dung:</label>
                    <input type="text" class="form-control" id="content" placeholder="Enter the content" name="content">
                </div>
                <div class="form-group">
                    <label for="programCourse">Chương trình:</label>
                    <input type="text" class="form-control" id="program" placeholder="Enter the program" name="program">
                </div>
                <div class="form-group">
                    <label for="nameCourse">Địa điểm:</label>
                    <input type="text" class="form-control" id="location" placeholder="Enter the location" name="location">
                </div>
                <div class="form-group">
                    <label for="num_stdCourse">Số lượng học viên:</label>
                    <input type="number" class="form-control" id="num_student" placeholder="Enter the number of students" name="num_student">
                </div>
                <div class="form-group">
                    <label for="nameCourse">Trạng thái:</label>
                    <input type="text" class="form-control" id="status" placeholder="Enter name" name="status">
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </body>
</html>
