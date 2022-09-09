<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        center p{
            margin-top: 10px;
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
                    <!-- <x-jet-welcome /> -->
                    <div style="padding: 30px;">
                        <center>
                            <h1>ARINCHAWUT KANLAYANAM</h1>
                            <p>643020423-0 section 1</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>

    </x-app-layout>

</body>

</html>