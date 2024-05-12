@extends('dashboard.components.layout')

@section('dashboard_content')
    @include('dashboard.components.header')
    @include('dashboard.components.sidebar')

    <!-- component -->
    <section class="mt-20 ml-14  ">
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
                <a
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
                        <p class="font-semibold text-gray-400 text-xs"> {{ $post->created_at->diffForHumans() }} </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="px-4 lg:px-0 mt-12 mb-6 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
            <article class="border-l-4 pl-4 mb-6 w-fit px-10 rounded max-w-screen-md">
                {!! $post->body !!}
            </article>
            <a href="/dashboard/posts/" type="button"
                class="py-2 w-fit  px-3 flex items-center text-sm font-medium text-center text-white focus:outline-none bg-green-500  rounded-lg border">
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"
                    class="w-4 h-4 mr-2 -ml-0.5">
                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" />
                </svg>
                Back to my posts
            </a>
        </div>

    </section>
@endsection
