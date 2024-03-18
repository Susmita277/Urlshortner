@extends('Backend.layout.app')
@section('content')
    <div class="w-full flex justify-center mt-14">
        <form action="{{route('admin.url.store')}}" method="POST" class="w-[70%]">
            @csrf
            <h1 class="font-bold text-3xl">Create new</h1>
            <div class="mt-7">
                <label for="original_url" class="opacity-50 font-bold mt-2">Destination</label>
                <input type="url" name="backend_url"
                    class="border border-border-color mt-2 outline-none p-2 rounded-sm w-full ">
                <span class=" text-danger-color">
                    @error('backend_url')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mt-7">
                <label for="title" class="opacity-50 font-bold mt-2">Title</label>
                <input type="text" name=title
                    class="border border-border-color  mt-2 outline-none p-2 rounded-sm w-full">
                <span class="text-danger text-red-500">
                    @error('title')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="flex gap-6 mt-7">
                <button type="submit" class=" bg-[#189cbc] text-white text-base px-5 py-2 rounded-sm">Create</button>
                 <a href="{{route('admin.url.index')}}"><button type="button" class="text-base px-5 py-2 rounded-sm border border-primary-color text-primary-color">Go Back</button></a>
            </div>
        </form>
    </div>
@endsection
