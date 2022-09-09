<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        @foreach($departments as $row)
            {{$row->id}} -> {{$row->departmentName}} -> <a href="<?php echo "/departments/$row->id";?>">ลบข้อมูล</a> <br>
        @endforeach
    </div>
</body>
</html>