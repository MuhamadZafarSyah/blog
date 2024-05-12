@extends('dashboard.components.layout')

@section('dashboard_content')
    @include('dashboard.components.header')
    @include('dashboard.components.sidebar')

    <main class="bg-[#FEFEFE] h-full ml-14 mt-10  md:ml-64">
        <div class="md:ml-4 mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <h1 class="text-2xl font-bold sm:text-3xl text-black">Edit Post!</h1>
                <p class="mt-4 text-black">
                    buatlah postingan menarik di Zet | Blog setiap harinya
                </p>
            </div>

            <form action="/dashboard/posts/{{ $post->id }}" method="POST" class=" mb-0 mt-8 max-w-2xl space-y-4"
                enctype="multipart/form-data">
                @method('put')
                @csrf
                <div>
                    <label for="title" class="text-black font-medium">Title</label>

                    <div class="relative">
                        <input type="text" name="title" required value="{{ old('title', $post->title) }}"
                            class="@error('title')
                                   border-red-700 border
                                    @enderror
                             w-full rounded-lg border-gray-500 border p-4 pe-12 text-sm shadow-sm"
                            placeholder="Judul postingan kamu.." />

                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                <path fill-rule="evenodd"
                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        @error('title')
                            <div class="absolute text-xs text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="category"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Category</label>
                    <select id="category" name="id_category"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        @foreach ($categories as $category)
                            @if (old('id_category', $post->id_category) == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-black" for="image">Post image</label>
                    @if ($post->image)
                        <img id="img-preview" src="/storage/{{ $post->image }}" class="mb-2 w-1/2 -z-50 object-cover">
                    @else
                        <img id="img-preview" class="mb-2 w-1/2 -z-50 object-cover">
                    @endif
                    <input onchange="previewImage()"
                        class="@error('image')
                        border-red-700 border
                         @enderror block w-full p-1 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer dark:text-gray-400 focus:outline-none  dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="file_input_help" id="image" name="image" type="file">
                    <p class="mt-1 text-sm text-gray-900" id="file_input_help">PNG, JPG or JPEG (MAX.
                        1mb).</p>
                    @error('image')
                        <div class="absolute text-xs text-red-500">{{ $message }}</div>
                    @enderror

                </div>

                <div>
                    <label for="body" class="block mb-2 text-sm font-medium text-black">Body</label>
                    <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                    <trix-editor input="body"></trix-editor>
                    @error('body')
                        <div class="absolute text-xs text-red-500">{{ $message }}</div>
                    @enderror
                    <p class="text-gray-500 italic">note: enter ketika sudah di ujung box</p>
                </div>

                <div class="flex items-center justify-between ">
                    <button type="submit"
                        class="inline-block rounded-lg bg-blue-500 px-5  py-3 text-sm font-medium text-white">
                        Update Post
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection
