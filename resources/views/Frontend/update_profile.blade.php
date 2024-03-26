@extends('Backend.layout.app')
@section('content')
    <div class=" flex justify-center items-center w-full bg-body-color">
        <form action="{{ route('user.profile') }}" method="POST" class="w-[30%] rounded-sm bg-white my-10 h-fit p-8">
            @csrf
            <h1 class="text-bold text-3xl my-4  ">Update Your Profile</h1>
            @if (Session::has('success'))
                <div class="alert alert-success text-[#59ce72] ">
                    {{ Session::get('success') }}</div>
            @endif
            @if (Session::has('fail'))
                <div class="alert alert-danger text-[#fe0000]">
                    {{ Session::get('fail') }}</div>
            @endif
            <div class="mt-4">
                <label for="name" class="opacity-50 font-bold ">Name</label>
                <input type="name" name="name"
                    class="border-2 border-border-color mt-1 outline-none px-4 py-1 rounded-sm w-full" value="{{auth()->user()->name}}">
                <span class="text-danger text-red-500">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mt-4">
                <label for="email" class="opacity-50 font-bold"> Email</label> <br>
                <input type="email" name="email"
                    class="border-2 border-border-color mt-1 outline-none px-4 py-1 rounded-sm w-full" value="{{auth()->user()->email}}">
                <span class="text-danger text-red-500">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <button type="submit" class=" mt-5 bg-[#189cbc] text-white rounded-sm px-4 py-2 ">Update</button>
        </form>
    </div>
@endsection
