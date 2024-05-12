@extends('components.layout')
@section('title', $title)

@section('content')
    <!-- component -->
    <!-- This is an example component -->
    <h1 class="text-4xl font-semibold my-4">Ini adalah blog dengan category {{ $category }}</h1>
    <div class="grid grid-cols-3 gap-4 w-full mx-auto">
        @foreach ($posts as $post)
            <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
                <a href="/posts/{{ $post->slug }}">
                    <img class="rounded-t-lg" src="https://source.unsplash.com/1200x600?{{ $category->name }}" alt="">
                </a>
                <div class="p-5">
                    <p>
                        <a href="/authors/{{ $post->author->id }}" class="font-semibold text-blue-800">
                            By: {{ $post->author->name }}</a> |
                        {{ $post->category->name }}
                    </p>
                    <a href="/posts/{{ $post->slug }}">
                        <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">{{ $post->title }}
                        </h5>
                    </a>
                    <p class="font-normal text-gray-700 mb-3">{{ Str::limit($post->body, 50) }}</p>
                    <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center"
                        href="/posts/{{ $post->slug }}">
                        Read more
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
