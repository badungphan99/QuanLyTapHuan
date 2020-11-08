<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Program</title>

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
            <form action = "/program/edit/{{$program->id}}" method = "post">
                @csrf
                <div class="form-group">
                    <label for="nameCourse">Tên chương trình:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$program->name}}" readonly>
                </div>
                <div class="form-group">
                    <label for="dateCourse">Chương trình tập huấn:</label>
                    <input type="text" class="form-control" id="program" name="program" value="{{$program->program}}">
                </div>
                <div class="form-group">
                    <label for="nameCourse">Trạng thái:</label>
                    <input type="text" class="form-control" id="status" name="status" value="{{$program->status}}">
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </body>
</html>
