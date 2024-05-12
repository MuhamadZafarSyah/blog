@extends('components.layout')

@section('title', $title)

@section('content')
    <main class="min-h-[90vh] mb-10 overflow-x-hidden">
        <div class="flex mt-8 flex-col items-center justify-center bg-[#FEFEFE]">
            <div class=" flex flex-col bg-white shadow-2xl px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-3xl w-50 max-w-md">
                <div class="font-medium self-center text-xl sm:text-3xl text-gray-800">
                    Register
                </div>
                <div class="mt-3">
                    @if (session()->has('status'))
                        <div style="bottom: 10px; right: 20px;"
                            class="Toast alert alert-success fixed right-0 max-w-xs bg-teal-500 border border-gray-200 rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700"
                            role="alert">
                            <div class="flex p-4">
                                <div class="flex-shrink-0">
                                    <svg class="flex-shrink-0 size-4 text-white dark:text-blue-500 mt-0.5"
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                </div>
                                <div class="ms-3">
                                    <p class="text-sm text-white">
                                        {{ session('status') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                    <form action="/register" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-2 gap-x-6">
                            <div class="w-full">
                                <div class="flex flex-col mb-5">
                                    <label for="name" class="mb-1 text-xs tracking-wide text-gray-600">Name:</label>
                                    <div class="relative">
                                        <div
                                            class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                            <i class="fas fa-user text-blue-500"></i>
                                        </div>

                                        <input type="text" name="name" value="{{ old('name') }}"
                                            class="peer-required: @error('name') is-invalid
                                    @enderror text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
                                            placeholder="Enter your name" required />
                                        @error('name')
                                            <div class="absolute text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex flex-col mb-5">
                                    <label for="username" class="mb-1 text-xs tracking-wide text-gray-600">Username:</label>
                                    <div class="relative">
                                        <div
                                            class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                            <i class="fas fa-user text-blue-500"></i>
                                        </div>
                                        <input type="text" name="username" value="{{ old('username') }}"
                                            class=" @error('username') is-invalid
                                    @enderror text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
                                            placeholder="Enter your username" required />
                                        @error('username')
                                            <div class="absolute text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex flex-col mb-5">
                                    <div class="flex flex-col w-fit mx-auto justify-center mb-6">
                                        <label for="password"
                                            class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">Password:</label>
                                        <div class="relative">
                                            <div
                                                class=" inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                                <span>
                                                    <i class="fas fa-lock text-blue-500"></i>
                                                </span>
                                            </div>

                                            <input id="password" type="password" name="password"
                                                class=" @error('password') is-invalid
                                        @enderror text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
                                                placeholder="Enter your password" required />
                                            @error('password')
                                                <div class="absolute text-xs text-red-500">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="flex flex-col mb-5">
                                    <label for="email" class="mb-1 text-xs tracking-wide text-gray-600">E-Mail:</label>
                                    <div class="relative">
                                        <div
                                            class=" inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                            <i class="fas fa-at text-blue-500"></i>
                                        </div>

                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class=" @error('email') is-invalid
                                    @enderror text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
                                            placeholder="Enter your email" required />
                                        @error('email')
                                            <div class="absolute text-[0.69rem] text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex flex-col mb-5">
                                    <label for="class" class="mb-1 text-xs tracking-wide text-gray-600">Class:</label>
                                    <select id="class" name="class"
                                        class="text-sm placeholder-gray-500 pl-3 pr-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400">
                                        <option selected class="text-xs sm:text-sm tracking-wide text-gray-600">X-PPLG
                                        </option>
                                        <option>XI-PPLG</option>
                                        <option>X-DKV</option>
                                        <option>XI-DKV</option>
                                        <option>X-PFTV</option>
                                        <option>XI-PFTV</option>
                                        <option>other</option>
                                    </select>
                                </div>
                                <div class="-mt-2">
                                    <label class="mb-1 text-xs tracking-wide text-gray-600" for="image">Profile
                                        Picture</label>
                                    <img id="img-preview" class="mb-2 max-w-8 overflow-hidden rounded-full object-cover">

                                    <input onchange="previewImage()"
                                        class="@error('image')
                            border-red-700
                             @enderror block w-full rounded-2xl  text-xs text-gray-900 cursor-pointer border-2 p-1 border-gray-400 dark:text-gray-400 focus:outline-none  dark:placeholder-gray-400"
                                        id="image" name="image" type="file">
                                    <p class="text-xs text-gray-600" id="file_input_help">
                                        PNG, JPG or
                                        JPEG (MAX.
                                        1mb).</p>
                                    @error('image')
                                        <div class="absolute text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        {{-- SUBMIT --}}
                        <div class="flex w-full">
                            <button type="submit" id="register"
                                class=" flex mt-2 items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-blue-500 hover:bg-blue-600 rounded-2xl py-2 w-full transition duration-150 ease-in">
                                <span class="mr-2 uppercase">Register</span>
                                <span>
                                    <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="flex justify-center items-center mt-6">
                <a href="/login" class=" inline-flex items-center text-gray-700 font-medium text-xs text-center">
                    <span class="ml-2">You have an account?
                        <a href="/login" class="text-xs ml-2 text-blue-500 font-semibold">Login here</span></a>
                </a>
            </div>
        </div>
    </main>
@endsection
