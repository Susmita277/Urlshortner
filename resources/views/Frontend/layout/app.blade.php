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
            <img src="data:image/png;base64,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" alt="" class="w-12 h-12">
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
                <li class="text-base font-bold  px-4 text-primary-color"><a href="{{route('user.login')}}">LOGIN</a></li>
                <li><a href="{{route('user.register')}}"><button
                            class="px-4 py-2 bg-primary-color rounded-sm text-white text-base">Register</button></a>
                </li>
            </ul>
        </div>
    </div>
    @yield('content')
</body>

</html>
