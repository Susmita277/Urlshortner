@extends('Backend.layout.app')
@section('content')
    @if ($urls->isNotEmpty())
        <div class=" bg-body-color h-full p-10 ">
            @if (session('success'))
                <div class="alert text-success-color">
                    {{ session('success') }}
                </div>
            @endif
            <div class="border-b-2 py-4">
                <h1 class="text-3xl font-bold">Links</h1>
                <div class="flex gap-6 mt-4">
                    <button class="border bg-white px-5 py-2 opacity-70 font-bold  text-base rounded-sm">
                        <i class="fa-sharp fa-light fa-filter-list pr-2"></i>Add Filters
                    </button>
                    <a href="{{ route('admin.url.create') }}">
                        <button class="bg-primary-color text-white text-base px-5 py-2 rounded-sm">
                            <i class="fa-sharp fa-solid fa-plus pr-2"></i>Create new
                        </button>
                    </a>
                </div>
            </div>
            @foreach ($urls as $url)
                <div class="bg-white flex justify-between rounded-sm w-full h-fit mt-7 p-8">
                    <div>
                        <p class="font-bold text-xl">{{ $url->title }}</p>
                        <p class="text-primary-color text-base">
                            <a target="_blank" href="{{ $url->original_url }}">{{ $url->short_url }}</a>
                        </p>
                        <p class="text-base">{{ $url->original_url }}</p>
                        {{-- here refers formatted character --}}
                        <p class="mt-10 text-base text-dark-text-color">{{ $url->created_at->format('Y-F-d') }}</p>
                    </div>
                    <div class="flex gap-2">
                        <button type="button" class=" outline-none bg-[#f1f0f7] px-2 w-[80px] rounded-sm h-8">
                            <i class="fa-regular fa-copy pr-2"></i>Copy
                        </button>
                        <a href="{{ route('admin.url.update', ['id' => $url->id]) }}">
                            <button type="button"
                                class="outline-none items-center rounded-md border-2 border-secondary-color px-2 w-[35px] h-8">
                                <i class="fa-sharp fa-regular fa-pen"></i>
                            </button>
                        </a>
                        <a href="{{ route('admin.url.view', ['id' => $url->id]) }}">
                            <button type="button"
                                class="outline-none items-center rounded-md border-2 border-secondary-color px-2 w-[35px] h-8">
                                <i class="fa-sharp fa-regular fa-eye"></i>
                            </button>
                        </a>
                        <form action="{{ route('admin.url.destroy', ['id' => $url->id]) }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="outline-none items-center rounded-md border-2 border-secondary-color px-2 w-[35px] h-8">
                                <i class="fa-solid fa-trash text-danger-color"></i>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
            <div class="flex  items-center justify-center font-semibold opacity-90 text-base mt-24">
                <p><i class="fa-sharp fa-solid fa-dash"></i> You've reached the end of your link<i
                        class="fa-sharp fa-solid fa-dash"></i> </p>
            </div>
        </div>
    @else
        <div class="py-10">
            <div class="flex items-center justify-center">
                <img src="{{ asset('images/links-list-empty.png') }}" alt="" class="w-[400px] h-fit ">
            </div>
            <div class="flex justify-center items-center mt-4 py-5">
                <div class="justify-center">
                    <h1 class=" font-bold opacity-90 text-3xl text-center">More clicks are just a link away</h1>
                    <p class=" text-xl  mt-4 font-semibold opacity-70">Shorten long links and get attention by
                        customizing what they say.</p>
                    <a href="{{ route('admin.url.create') }}" class="mt-4 flex justify-center">
                        <button class="bg-primary-color text-white text-base px-5 py-2 rounded-sm">
                            <i class="fa-sharp fa-solid fa-plus pr-2"></i>Create a short link
                        </button>
                    </a>
                </div>
            </div>
        </div>
    @endif
@endsection
