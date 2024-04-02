@extends('Frontend.layout.app')
@section('content')
    <div class="w-full text-center px-20 relative bg-cover py-24 bg-[url('https://cdn.wallpapersafari.com/41/84/TCjaIb.jpg')]">
        <p class=" font-bold text-2xl">SHORTEN YOUR URLs </p>
        <p class="font-bold text-white text-5xl mt-4">AMPLIFY YOUR REACH!"</p>
        <p class="text-xl mt-4 text-gray-500 text-center px-40">Discover our innovative URL generator—shorten links swiftly
            for easy sharing.
            Simplify communication, boost engagement—try it today!</p>
    </div>

    <div class=" absolute top-96 w-full flex justify-center items-center pb-20">
        <div class=" bg-body-color  rounded-md w-2/3 p-20 h-fit text-center ">
            <h1 class=" text-3xl font-bold">Shorten URL Is Just Simple</h1>
            <form action="{{route('url.store')}}" method="POST" class="flex justify-between mt-6">
                @csrf
                <input placeholder="Your URL here" type="url" class="border-primary-color outline-none bg-transparent w-5/6 rounded-sm border-4 py-2 px-3" name="original_url">
                <button type="submit" class="px-3 py-1 text-white bg-primary-color text-base rounded-sm">Shorten <i class="fa-sharp fa-thin fa-rocket-launch px-1"></i></button>
            </form>
        </div>
    </div>
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

@endsection
