@extends('Backend.layout.app')
@section('content')
    <div class=" bg-body-color h-full p-10 ">
        <div>
            <div class="flex items-center">
                <h1 class="font-bold text-xl opacity-70  ">ANALYTICS FOR THE URL : </h1>
                <p class="pt-1 px-1 text-base font-semibold opacity-60"> {{ $url->original_url }}</p>
            </div>
            <div class="flex items-center mt-4">
                <h1 class="font-bold text-xl opacity-70  ">SHORT URL : </h1>
                <p class="pt-1 px-1 text-base font-semibold opacity-60"> {{ $url->short_url }}</p>
            </div>
            <div class="flex items-center mt-4">
                <h1 class="font-bold text-xl opacity-70  ">VISITORS COUNT : </h1>
                <p class="pt-1 px-1 text-base font-semibold opacity-60"> {{ $url->visitor_count }}</p>
            </div>
        </div>
        <div>
            <table class=" border-collapse mt-7 w-full  ">
                <thead class="text-sm ">
                    <tr class=" border   ">
                        <th class="py-3   px-3 border-l opacity-70">S.N</th>
                        <th class=" py-3 px-3  border-l opacity-70">IP</th>
                        <th class=" py-3  px-3 border-l opacity-70">USER AGENT</th>
                    </tr>
                </thead>
                <tbody class=" text-sm ">
                    @foreach ($url->visitor as $visitor)
                        <tr class=" border ">
                            <td class="py-3 px-3 border-l">{{ $loop->iteration}}</td>
                            <td class="py-3 px-3 border-l">{{ $visitor->ip }}</td>
                            <td class="py-3 px-3 border-l">{{ $visitor->user_agent }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
