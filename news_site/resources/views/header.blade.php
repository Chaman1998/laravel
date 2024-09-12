<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    {{-- @vite('resources/css/index.css') --}}
    {{-- @vite('resources/css/sidebar.css') --}}

    {{-- Icon CDN Link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="font-sans antialiased light:bg-white light:text-white/50">
    <!-- /HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container mx-auto px-4">
            <!-- row -->
            <div class="flex justify-center md:justify-between items-center py-2">
                {{-- Left Side Placeholder --}}
                @if (Auth::check())
                    <div class="hidden md:flex space-x-4 min-w-[200px]"></div>
                @endif
                @guest
                    <div class="hidden md:flex space-x-4 min-w-[150px]"></div>
                @endguest
                {{-- Left Side Placeholder --}}

                <!-- LOGO -->
                <div class="flex justify-center flex-grow">
                    <a href="index.php" id="logo" class="flex">
                        <p class="bg-black w-10 text-white text-3xl p-1 px-2 mx-0.5 my-1 flex-1 text-center">N</p>
                        <p class="bg-black w-10 text-white text-3xl p-1 px-2 mx-0.5 my-1 flex-1 text-center">E</p>
                        <p class="bg-black w-10 text-white text-3xl p-1 px-2 mx-0.5 my-1 flex-1 text-center">W</p>
                        <p class="bg-black w-10 text-white text-3xl p-1 px-2 mx-0.5 my-1 flex-1 text-center">S</p>
                    </a>
                </div>
                <!-- /LOGO -->

                {{-- Right Side Buttons --}}
                {{-- Profile --}}
                @if (Auth::check())
                    <div class="hidden md:flex space-x-4 min-w-[150px] justify-end">
                        <div
                            class="flex items-center space-x-2 cursor-pointer">

                            @php
                                // Get the first part of the name before the space
                                $userFullName = Auth::user()->name;
                                $firstName = explode(' ', trim($userFullName))[0];
                                $lastname =  explode(' ', trim($userFullName))[1];
                            @endphp

                            <span class="flex flex-col">
                                <span
                                    class="bg-transparent text-black px-1 mx-0.5 font-medium truncate">{{ $firstName }}</span>
                                    <span
                                    class="bg-transparent text-black px-1 mx-0.5 font-medium truncate">{{ $lastname }}</span>
                            </span>

                            <img class="inline-block h-8 w-8 rounded-full"
                                src="https://overreacted.io/static/profile-pic-c715447ce38098828758e525a1128b87.jpg"
                                alt="Dan_Abromov" />
                                <i class="fa-solid fa-caret-down"></i>
                        </div>
                        <a href={{ Route('logout') }} id="logout"
                            class="bg-white text-black p-1 px-2 mx-0.5 my-1 font-bold hover:bg-gray-800 hover:text-white">Logout</a>
                    </div>
                @endif
                @guest
                    <div class="hidden md:flex space-x-4 min-w-[150px] justify-end">
                        <a href={{ Route('signup') }} id="register"
                            class="bg-black text-white p-1 px-2 mx-0.5 my-1 font-bold hover:bg-gray-800">Register</a>
                        <a href={{ Route('login') }} id="login"
                            class="bg-white text-black p-1 px-2 mx-0.5 my-1 font-bold hover:bg-gray-800 hover:text-white">Sign
                            In</a>
                    </div>
                @endguest
                {{-- Right Side Buttons --}}
            </div>
        </div>
    </div>

    <!-- /HEADER -->

    <!-- Menu Bar -->
    <div class="menu-border">
        <div class="container mx-auto px-4">
            <nav>
                {{-- Links With Menu Button --}}
                <input type="checkbox" id="sidebar-active">
                <label for="sidebar-active" class="open-sidebar-button">
                    <svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
                        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                    </svg>
                </label>
                {{-- <label id="overlay" for="sidebar-active"></label> --}}
                <div class="links-container">
                    <label for="sidebar-active" class="close-sidebar-button">
                        <svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
                            <path
                                d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                        </svg>
                    </label>

                    <!-- The <a> tags are linked to the subpages -->
                    <div class="top-menu w-full">
                        <a href={{ Route('index') }} class="active">Home</a>
                        <a href="news.html">News</a>
                        <a href="sport.html">Sport</a>
                        <a href="business.html">Business</a>
                        <a href="innovation.html">Innovation</a>
                        <a href="culture.html">Culture</a>
                        <a href="travel.html">Travel</a>
                        <a href="earth.html">Earth</a>
                    </div>
                    @if (Auth::check())
                        <div class="bottom-menu w-full mb-4 md:hidden" style="position: fixed; bottom: 0;">
                            <div
                                class="flex items-center space-x-2 cursor-pointer hover:bg-gray-300">
                                <img class="inline-block h-8 w-8 rounded-full border border-gray-500"
                                    src="https://overreacted.io/static/profile-pic-c715447ce38098828758e525a1128b87.jpg"
                                    alt="Dan_Abromov" />

                                @php
                                    // Get the first part of the name before the space
                                    $userFullName = Auth::user()->name;
                                    $firstName = explode(' ', trim($userFullName))[0];
                                @endphp

                                <span class="flex flex-col">
                                    <span
                                        class="bg-transparent text-black p-1 mx-0.5 my-1 font-bold truncate">{{ $firstName }}</span>
                                </span>
                            </div>
                            <a href={{ Route('logout') }} class="md:hidden">Logout</a>
                        </div>
                    @endif
                    @guest
                        <div class="bottom-menu w-full mb-4 md:hidden" style="position: fixed; bottom: 0; width: inherit;">
                            <a href={{ Route('signup') }} class="bg-black text-white hover:bg-gray-800">Register</a>
                            <a href={{ Route('login') }} class="">Sign In</a>
                        </div>
                    @endguest
                </div>
                {{-- Links With Menu Button --}}

                {{-- Search Bar --}}
                <div class="w-full relative flex items-center justify-end md:justify-start md:hidden">
                    <div class="relative">
                        <div
                            class="flex rounded-full border px-2 mx-2 my-2 w-full max-w-[300px] md:flex md:max-w-[600px]">
                            <input type="text"
                                class="w-full min-w-[40px] bg-[#0d1829] flex bg-transparent pl-2 text-[#cccccc] outline-0"
                                placeholder="Search...." />
                            <button type="submit" class="relative p-1 rounded-full">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </div>
                {{-- Search Bar --}}
            </nav>
        </div>
    </div>


    <!-- /Menu Bar -->

    <!-- /Menu Bar -->
