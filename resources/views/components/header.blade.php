<!doctype html>
<html lang="tr" class="">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="This website was created by zegemenim.">
    <title>
        {{config("app.name")}}
    </title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    @vite('resources/css/app.css')
</head>
<body class="h-full bg-white">

<header
    class="flex text-md md:text-xl justify-between px-2 md:px-4 py-2 md:py-6 border-b border-gray-300 shadow-md shadow-blue-300/70 text-gray-800">
    <div class="mb-2"><h1>
            <a href="{{route("home")}}">{{config("app.name")}}</a>
        </h1></div>
    <div>
        <ul class="flex">
            <li class="mr-2 md:mr-8"><a href="{{route("home")}}">Home</a></li>
            <li class="mr-2 md:mr-8"><a href="{{route("home")}}#about"
                                        class="ease-in duration-300 transition-all">About</a></li>
            <li class="mr-2 md:mr-8"><a href="{{route("home")}}#contact">Contact</a></li>
            @if(auth()->user())
                <li class="mr-2 md:mr-8 ">
                    <button onclick="openMenu()" class="flex items-center ease-in duration-300 transition-all">
                        <span class="mr-1">{{auth()->user()->name}}</span>
                        <svg class="w-4 h-4 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20">
                            <path d="M10 12l-6-6h12z"/>
                        </svg>
                    </button>
                    <ul id="userMenu"
                        class="absolute bg-white shadow-md border border-gray-300 rounded-lg mt-2 px-8 hidden">
                        <li class="px-2 py-1"><a href="">Profile</a></li>
                        <li class="px-2 py-1">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </li>
            @else
                <li class=""><a
                        class="md:ease-out md:duration-100 delay-200 md:hover:text-2xl mr-2 md:mr-8 border-2 bg-blue-700 rounded-lg shadow-md hover:shadow-lg hover:shadow-blue-600 text-white shadow-blue-500 border-blue-700 p-1 md:p-2"
                        href="{{route("login")}}">Login</a></li>
            @endif
        </ul>
    </div>
</header>

<script>
    function openMenu() {
        document.getElementById("userMenu").classList.toggle("hidden");
    }
</script>
