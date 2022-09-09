<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <style>
        ul {
            list-style-type: none;
        }

        li {
            display: inline;
            padding: 0 15px;
        }

        p {
            margin: 0 0;
            line-height: 25px;
            display: inline;
            margin-right: 10px;
            white-space: normal;
            width: 20px;
        }

        span {
            padding-left: 10px;
        }
    </style>
</head>

<body>
    
    <div>
        <ul>
            <li><a href="{{route('dashboard')}}">Home</a> </li>
            <li><a href="{{route('about')}}">About</a> </li>
            <li><a href="{{route('info')}}">Information</a></li>
            <li><a href="{{route('form')}}">Form</a></li>
        </ul>
    </div>
    <fieldset>
        <legend>จัดทำโดย</legend>
        <p>รหัสนักศึกษา:</p><span>643020423-0</span> <br>
        <p>ชื่อ:</p><span>อริญชวุธ กัลยานาม</span><br>
        <p>Email:</p><span>Arinchawut.k@kkumail.com</span> <br>
        <p>สาขา:</p><span>เทคโนโลยีสารสนเทศ</span> <br>
    </fieldset> 
</body>

</html>