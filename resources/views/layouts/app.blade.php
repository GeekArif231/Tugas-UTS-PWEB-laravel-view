<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        </style>
    <style>
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 font-poppins">
    <header class="lg:px-16 px-4 bg-gradient-to-br from-blue-500 to-indigo-600 flex flex-wrap items-center py-4 shadow-md">
        <div class="flex-1 flex justify-between items-center font-semibold">
            <a href="#" class="text-xl">@yield('header')</a>
        </div>

        <label for="menu-toggle" class="pointer-cursor md:hidden block">
        <svg class="fill-current text-gray-900"
            xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
            <title>menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
            <nav>
                <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                    <li><a class="md:p-4 py-3 px-0 block text-black" href="#">AboutUs</a></li>
                    <li><a class="md:p-4 py-3 px-0 block text-black" href="#">Treatments</a></li>
                    <li><a class="md:p-4 py-3 px-0 block text-black" href="#">Blog</a></li>
                    <li><a class="md:p-4 py-3 px-0 block md:mb-0 mb-2 text-black" href="#">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container mx-auto py-6">
        @yield('content')
    </div>
</body>
</html>
