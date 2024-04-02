<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/04158e9780.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
        href="/css/app-wa-02670e9412103b5852dcbe140d278c49.css?vsn=d">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display&family=Poppins:ital@0;1&family=Roboto&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class=" w-full flex ">
        <div class="w-[15%] bg-sidebar-color h-screen sidebar relative">
            <div class="fixed top-0 left-0 right-0 ">
                <div class=" pl-8 py-2 border-b-2">
                    <img src="data:image/png;base64,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" alt="" class="w-12 h-12">
                </div>
                <div class="pl-8">
                    <ul class="gap-6 pt-3 ">
                        <li class=" list-none  py-2  hover:text-secondary-color">
                            <span><a href="{{route('dashboard')}}" class="text-base opacity-70 font-bold hover:text-primary-color"> <i
                                        class="fa-sharp fa-regular fa-house pr-3"></i>
                                    Home </a></span>
                        </li>
                        <li class=" list-none  py-2  hover:text-secondary-color">
                            <span><a href="{{ route('admin.url.index') }}"
                                    class="text-base opacity-70 font-bold hover:text-primary-color"> <i
                                        class="fa-sharp fa-solid fa-link pr-3"></i>
                                    Links </a></span>
                        </li>
                        <li class=" list-none  py-2  hover:text-secondary-color">
                            <span><a href="#" class="text-base opacity-70 font-bold hover:text-primary-color"> <i
                                        class="fa-solid fa-gear pr-3"></i>
                                    Settings </a></span>
                        </li>
                </div>
            </div>
        </div>

        <div class="maincontainer w-[85%] border-l-2 ">
            <div class="nav bg-white text-black flex justify-between px-8 py-2 border-b-2 sticky top-0 z-10">
                <div class=" flex items-center"><i class="allow-full-width fa-solid fa-bars w-12"></i></div>
                <div class="flex items-center gap-5 ">
                    <form action="{{ route('admin.url.index') }}" method="GET"
                        class="w-[350px] items-center flex px-5 rounded-sm bg-body-color hover:border hover:border-primary-color">
                        <i class="fa-sharp fa-regular fa-magnifying-glass text-md "></i>
                        <input type="text" class="bg-transparent border-0 outline-none focus:ring-0"
                            placeholder="Search here..." name="search" value="{{$search??''}}">
                    </form>
                    <button
                        class="text-base border-none bg-primary-color px-3 py-2 rounded-sm text-white">Upgrade</button>
                    <div class="profile flex items-center gap-3 hover:bg-body-color relative">
                        <div class="profile  h-12 w-12 rounded-full cursor-pointer bg-transparent">
                            <img src="data:image/jpeg;base64,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"
                                alt="">
                        </div>
                        <h1 class="font-bold text-base opacity-70 ">{{auth()->user()->name}}</h1>
                        <i class="fa-duotone fa-caret-down"></i>

                        <div class=" profilecontent absolute top-12  bg-white w-[200px] border hidden ">
                            <form action="{{ route('logout') }}" method="Post">
                                @csrf
                                <button
                                    class="rounded-sm px-5 py-2 outline-none border-none font-bold text-base opacity-[60%]">Sign
                                    Out</button>
                            </form>
                            <a href="{{route('user.profile')}}"><button
                            class="rounded-sm px-5 py-2 outline-none border-none font-bold text-base opacity-[60%]">Update profile</button></a>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('url.js') }}"></script>
</body>

</html>
