<!doctype html>
<html lang="tr" class="">
<head>
    <meta charset="UTF-8">
    <title>ProtechOne</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    @vite('resources/css/app.css')
</head>
<body class="h-full bg-white">

<header
    class="flex text-md md:text-xl justify-between px-2 md:px-4 py-2 md:py-6 border-b border-gray-300 shadow-md shadow-blue-300/70 text-gray-800">
    <div class="mb-2"><h1>ProtechOne</h1></div>
    <div>
        <ul class="flex">
            <li class="mr-2 md:mr-8"><a href="{{route("home")}}">Home</a></li>
            <li class="mr-2 md:mr-8"><a href="{{route("home")}}#about" class="ease-in duration-300 transition-all">About</a></li>
            <li class="mr-2 md:mr-8"><a href="">Contact</a></li>
            <li class=""><a class="md:ease-out md:duration-100 delay-200 md:hover:text-2xl mr-2 md:mr-8 border-2 bg-blue-700 rounded-lg shadow-md hover:shadow-lg hover:shadow-blue-600 text-white shadow-blue-500 border-blue-700 p-1 md:p-2" href="{{route("login")}}">Login</a></li>
        </ul>
    </div>
</header>

