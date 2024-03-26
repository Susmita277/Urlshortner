@extends('Frontend.layout.app')
@section('content')
    <div class=" flex justify-center items-center w-full bg-body-color">
        <form action="{{route('user.login')}}" method="POST" class="w-[30%] rounded-sm bg-white my-10 h-fit p-8">
            @csrf
            <h1 class="text-bold text-3xl my-4  ">Welcome!</h1>
            @if (Session::has('success'))
                <div class="alert alert-success text-[#59ce72] ">
                    {{ Session::get('success') }}</div>
            @endif
            @if (Session::has('fail'))
                <div class="alert alert-danger text-[#fe0000]">
                    {{ Session::get('fail') }}</div>
            @endif
            <div class="mt-4">
                <label for="email" class="opacity-50 font-bold ">Email</label>
                <input type="email" name=email
                    class="border-2 border-border-color mt-1 outline-none px-4 py-1 rounded-sm w-full">
                <span class="text-danger text-red-500">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mt-4">
                <label for="password" class="opacity-50 font-bold"> Password</label> <br>
                <input type="password" name=password value=""
                    class="border-2 border-border-color mt-1 outline-none px-4 py-1 rounded-sm w-full">
                <span class="text-danger text-red-500">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mt-4"> <button type="submit"
                    class="bg-primary-color rounded-sm text-white px-4 py-2 ">Login</button>
                <p class="mt-2 text-sm opacity-80">If you are unable to login please register first</p>
                <a href="{{route('user.register')}}" class="mt-2 text-md text-link-color">register</a>
            </div>
        </form>
    </div>
@endsection
