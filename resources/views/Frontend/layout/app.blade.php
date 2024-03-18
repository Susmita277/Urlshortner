<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Url Shortner</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
        href="/css/app-wa-462d1fe84b879d730fe2180b0e0354e0.css?vsn=d">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
    @vite('resources/css/app.css')
</head>

<body class="font-poppins ">
    <div class="flex justify-between px-14 py-2 border-b">
        <div>
            <img src="https://bit.ly/49RIXaA" alt="" class="w-12 h-12">
        </div>
        <div class="flex items-center justify-between">
            <ul class="flex justify-between">
                <li class="text-base font-bold opacity-50 px-4 "><a href="{{route('url.store')}}">HOME</a></li>
                <li class="text-base font-bold px-4 opacity-50 "><a href="#">PAYOUT RATES</a></li>
                <li class="text-base font-bold px-4 opacity-50 "><a href="#">BLOG</a></li>
                <li class="text-base font-bold px-4 opacity-50 "><a href="#">FAQ</a></li>
            </ul>
        </div>
        <div>
            <ul class="flex justify-between items-center">
                <li class="text-base font-bold  px-4 text-primary-color"><a href="{{route('home.login')}}">LOGIN</a></li>
                <li><a href="{{route('home.register')}}"><button
                            class="px-4 py-2 bg-primary-color rounded-sm text-white text-base">Register</button></a>
                </li>
            </ul>
        </div>
    </div>
    @yield('content')
</body>

</html>
