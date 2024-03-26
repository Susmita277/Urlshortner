@extends('Frontend.layout.app')
@section('content')
    <div class=" flex justify-center items-center w-full bg-body-color">
        <form action="{{route('user.register')}}" method="POST" class="w-[30%] rounded-sm bg-white my-10 h-fit p-8">
            @csrf
            <h1 class="text-bold text-3xl my-4 ">Create Your Account</h1>
            @if (Session::has('success'))
                <div class="alert alert-success text-[#59ce72] ">
                    {{ Session::get('success') }}</div>
            @endif
            @if (Session::has('fail'))
                <div class="alert alert-danger text-[#fe0000]">
                    {{ Session::get('fail') }}</div>
            @endif

            <div class="mt-2">
                <label for="name" class=" opacity-50 font-bold ">Username</label>
                <input type="text" name=name class="border-2 border-border-color mt-1 outline-none px-4 py-1 rounded-sm w-full " value="{{old('name')}}">
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mt-4">
                <label for="name" class="opacity-50 font-bold ">Email</label>
                <input type="email" name=email class="border-2 border-border-color mt-1 outline-none px-4 py-1 rounded-sm w-full" value="{{old('email')}}">
                <span class="text-danger text-red-500">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mt-4">
                <label for="confirmed password" class="opacity-50 font-bold"> Password</label> <br>
                <input type="password" name=password value=""
                    class="border-2 border-border-color mt-1 outline-none px-4 py-1 rounded-sm w-full">
                <span class="text-danger text-red-500">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mt-4">
                <label for="confirmed_password" class="opacity-50 font-bold"> Confirm password</label> <br>
                <input type="password" name=confirmed_password value=""
                    class="border-2 border-border-color mt-1 outline-none px-4 py-1 rounded-sm w-full">
            </div>
            <div class="mt-4"> <button type="submit" class="bg-primary-color rounded-sm text-white px-4 py-2 ">Register</button>
                <p class="mt-2 text-sm opacity-80" >If you registered then process to</p>
                <a href="{{route('user.login')}}" class="mt-2 text-md text-link-color">login</a>
            </div>
        </form>
    </div>
@endsection
