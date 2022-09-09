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

        .info {
            margin: 10px auto;
            background-color: white;
            padding: 40px 60px;
        }

        p {
            line-height: 25px;
        }
    </style>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ Auth::user()->name }}
            </h2>
        </x-slot>

        <div class="info">
            <p>
                รหัสนักศึกษา: {{$id}} <br>
                ชื่อ-นามสกุล: {{$name}} <br>
                วันเกิด: {{$birthday}} <br>
                Email: {{$email}} <br>
                เพศ: {{$gender}}
            </p>
        </div>
    </x-app-layout>

</body>

</html>