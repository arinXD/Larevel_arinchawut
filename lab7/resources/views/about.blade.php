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
            padding: 0 15px 0;
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
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="info" style="padding: 30px;">
                        <p>
                            รหัสนักศึกษา: {{$stu_id}}
                        </p>
                        {{$stu_name}}
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    <!-- <div>
        <ul>
            <li><a href="{{route('dashboard')}}">Home</a> </li>
            <li><a href="{{route('about')}}">About</a> </li>
            <li><a href="{{route('info')}}">Information</a></li>
            <li><a href="{{route('form')}}">Form</a></li>
        </ul>
    </div>
    <div class="info">
        <p>
            รหัสนักศึกษา: {{$stu_id}}
        </p>
        {{$stu_name}}
    </div> -->
</body>

</html>