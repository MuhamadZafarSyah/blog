@extends('components.layout')
@section('title', $title)

@section('content')
    <!-- component -->
    <!-- This is an example component -->
    <h1 class="text-4xl font-semibold my-4">Ini adalah halaman categories </h1>
    <div class="md:flex mt-8 md:-mx-4">
        @foreach ($categories as $category)
            <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2"
                style="background-image: url('https://source.unsplash.com/1200x600?{{ $category->name }}')">
                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white font-semibold">{{ $category->name }}</h2>
                        <button
                            class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                            <a href="/categories/{{ $category->slug }}"><span>See Post</span></a>
                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>



@endsection
