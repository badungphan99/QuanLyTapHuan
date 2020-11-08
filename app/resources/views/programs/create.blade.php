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
            <h1>Thêm chương trình tập huấn</h1>
            <form action = "/program/store" method = "post">
                @csrf
                <div class="form-group">
                    <label for="nameProgram">Tên chương trình:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter the name" name="name">
                </div>
                <div class="form-group">
                    <label for="Program">Chương trình:</label>
                    <input type="text" class="form-control" id="date" placeholder="Enter the date" name="program">
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
