@extends('components.layout')
@section('title', $title)

@section('content')
    <!-- component -->
    {{-- @dd(request('search')) --}}

    <h1 class="text-4xl font-semibold my-4">Ini adalah halaman {{ $title }}</h1>
    <!-- component -->
    <div class="rounded-lg p-5 w-full">
        <div class="w-fit">
            <div class="flex w-full">
                <div
                    class="flex w-10 items-center justify-center rounded-tl-lg rounded-bl-lg border-2 border-gray-200 bg-white p-5">
                    <svg viewBox="0 0 20 20" aria-hidden="true"
                        class="pointer-events-none absolute w-5 fill-gray-500 transition">
                        <path
                            d="M16.72 17.78a.75.75 0 1 0 1.06-1.06l-1.06 1.06ZM9 14.5A5.5 5.5 0 0 1 3.5 9H2a7 7 0 0 0 7 7v-1.5ZM3.5 9A5.5 5.5 0 0 1 9 3.5V2a7 7 0 0 0-7 7h1.5ZM9 3.5A5.5 5.5 0 0 1 14.5 9H16a7 7 0 0 0-7-7v1.5Zm3.89 10.45 3.83 3.83 1.06-1.06-3.83-3.83-1.06 1.06ZM14.5 9a5.48 5.48 0 0 1-1.61 3.89l1.06 1.06A6.98 6.98 0 0 0 16 9h-1.5Zm-1.61 3.89A5.48 5.48 0 0 1 9 14.5V16a6.98 6.98 0 0 0 4.95-2.05l-1.06-1.06Z">
                        </path>
                    </svg>
                </div>
                <form action="/posts" method="GET" class="flex">
                    <input type="text" name="search" class="w-full bg-gray-200 pl-2 text-base font-semibold outline-0"
                        placeholder="Search..." />
                    <input type="submit" value="Search"
                        class="bg-blue-500 p-2 pointer rounded-tr-lg rounded-br-lg text-white font-semibold hover:bg-blue-800 transition-colors" />
                </form>
            </div>
        </div>
    </div>
    @if ($posts->count())
        <article class="flex my-8 bg-white transition hover:shadow-none  shadow-xl">
            <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
                <time datetime="2022-10-10"
                    class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900">
                    <span class="w-px flex-1 bg-gray-900/10"></span>
                    <span>{{ $posts[0]->created_at->diffForHumans() }}</span>
                    <span class="w-px flex-1 bg-gray-900/10"></span>
                    <span>{{ $posts[0]->category->name }}</span>
                </time>
            </div>

            <div class="block sm:basis-60 basis-48">
                <img alt="{{ $posts[0]->category->name }}"
                    src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}"
                    class="aspect-square h-full md:w-full  object-cover" />
            </div>

            <div class="flex flex-1 flex-col justify-between">
                <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                    <a href="/posts/{{ $posts[0]->slug }}">
                        <h3 class="font-bold uppercase text-gray-900">
                            {{ $posts[0]->title }}
                        </h3>
                    </a>

                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">
                        {{ $posts[0]->excerpt }}
                    </p>
                </div>

                <div class="sm:flex sm:items-end sm:justify-end">
                    <a href="/posts/{{ $posts[0]->slug }}"
                        class="block  px-5 py-3 text-center text-xs font-bold uppercase text-white transition bg-blue-700 hover:bg-blue-800 ">
                        Read Blog
                    </a>
                </div>
            </div>
        </article>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 w-full mx-auto ">
            @foreach ($posts->skip(1) as $post)
                <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
                    <a href="/posts/{{ $post->slug }}">
                        <img class="rounded-t-lg" src="https://source.unsplash.com/1200x600?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}">
                    </a>
                    <div class="p-5">
                        <p>
                            <a href="/authors/{{ $post->author->username }}" class="font-semibold text-blue-800">
                                By: {{ $post->author->name }}</a> | <a href="/categories/{{ $post->category->slug }}"
                                class="font-semibold text-blue-800">{{ $post->category->name }}</a>
                        </p>
                        <a>
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">{{ $post->title }}
                            </h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">{{ Str::limit($post->excerpt, 50) }}</p>
                        <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center"
                            href="/posts/{{ $post->slug }}">
                            Read more
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No post found.</p>
    @endif


@endsection
