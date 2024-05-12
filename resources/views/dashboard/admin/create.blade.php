@extends('dashboard.components.layout')

@section('dashboard_content')
    @include('dashboard.components.header')
    @include('dashboard.components.sidebar')

    <section class="bg-[#FEFEFE] h-full ml-14 mt-10 md:ml-64">
        <div class="md:ml-4 mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
            <div class="md:ml-4 mx-auto max-w-2xl">
                <h1 class="text-2xl font-bold sm:text-3xl text-black">Create Data!</h1>
                <p class="mt-4 text-black">
                    hanya admin yang bisa melakukan ini!
                </p>
            </div>

            <form action="/dashboard/admin" method="POST" class="mx-auto md:ml-4 mb-0 mt-8 max-w-2xl space-y-4">
                @csrf
                <div>
                    <label for="name" class="text-black font-medium">Category</label>

                    <div class="relative">
                        <input type="text" name="name" required value="{{ old('name') }}"
                            class="@error('name')
                                   border-red-700 border
                                    @enderror
                             w-full rounded-lg border-gray-500 border p-4 pe-12 text-sm shadow-sm"
                            placeholder="Masukan nama category .." />

                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                <path fill-rule="evenodd"
                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        @error('name')
                            <div class="absolute text-xs text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center justify-between ">
                    <button type="submit"
                        class="inline-block rounded-lg bg-blue-500 px-5  py-3 text-sm font-medium text-white">
                        Create Data
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
