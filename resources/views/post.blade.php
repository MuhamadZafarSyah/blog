@extends('components.layout')
@section('title', 'blog')

@section('content')
    <!-- component -->
    <main class="max-w-screen-lg mx-auto">
        <!-- component -->
        <div class="max-w-screen-xl mx-auto ">
            <main class="mt-10">
                <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
                    <div class="absolute left-0 bottom-0 w-full h-full z-10"
                        style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                    @if ($post->image)
                        <img src="/storage/{{ $post->image }}" alt="/storage/{{ $post->image }}"
                            class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                            class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
                    @endif
                    <div class="p-4 absolute bottom-0 left-0 z-20">
                        <a href="/posts?category={{ $post->category->slug }}"
                            class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{ $post->category->name }}</a>
                        <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                            {{ $post->title }}
                        </h2>
                        <div class="flex mt-3">
                            @if (auth()->user()->image)
                                <img class="h-10 w-10 rounded-full mr-2 object-cover  object-cover"
                                    src="/storage/{{ auth()->user()->image }}" alt="/storage/{{ auth()->user()->image }}" />
                            @else
                                <img class="h-10 w-10 rounded-full mr-2 object-cover "
                                    src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg"
                                    alt="profile-picture" />
                            @endif
                            <div>
                                <p class="font-semibold text-gray-200 text-sm"> {{ $post->author->username }} </p>
                                <p class="font-semibold text-gray-400 text-xs"> {{ $post->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
                    <article class="border-l-4  pl-4 mb-6 rounded">
                        {!! $post->body !!}
                    </article>
                </div>
            </main>
        </div>
    </main>
@endsection
