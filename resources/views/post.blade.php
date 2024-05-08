@extends('components.layout')
@section('title', 'blog')

@section('content')
    <!-- component -->
    <!-- This is an example component -->
    <h1 class="text-4xl font-semibold my-4">Ini adalah postingan dengan judul {{ $post->title }}</h1>
    <!-- component -->
    <div class="max-w-screen-xl mx-auto ">
        <main class="mt-10">
            <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
                <div class="absolute left-0 bottom-0 w-full h-full z-10"
                    style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                <img src="https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80"
                    class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
                <div class="p-4 absolute bottom-0 left-0 z-20">
                    <a href="/categories/{{ $post->category->slug }}"
                        class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{ $post->category->name }}</a>
                    <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                        {{ $post->title }}
                    </h2>
                    <div class="flex mt-3">
                        <img src="https://randomuser.me/api/portraits/men/97.jpg"
                            class="h-10 w-10 rounded-full mr-2 object-cover" />
                        <div>
                            <p class="font-semibold text-gray-200 text-sm"> {{ $post->author->username }} </p>
                            <p class="font-semibold text-gray-400 text-xs"> 14 Aug </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
                <article class="border-l-4 border-gray-500 pl-4 mb-6 italic rounded">
                    {!! $post->body !!}
                </article>
            </div>
        </main>
        <!-- main ends here -->


    </div>
@endsection
