@extends('dashboard.components.layout')

@section('dashboard_content')

    <div
        class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
        @include('dashboard.components.header')
        @include('dashboard.components.sidebar')
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

        <div class="h-full  ml-14 mt-14 mb-10 md:ml-64 scrollbar overflow-x-auto">

            @if ($categories->count())
                <table
                    class="table text-gray-400 ml-5 scrollbar  mt-6 border-separate w-full md:w-[80%] space-y-6 text-sm overflow-x-auto mr-4">
                    <thead class="bg-gray-800 text-gray-500">
                        <tr>
                            <th class="p-3">No.</th>
                            <th class="p-3 text-left">Category Name</th>
                            <th class="p-3 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr class="bg-gray-800">
                                <td class="p-3">
                                    <div>{{ $loop->iteration }}</div>
                                </td>
                                <td class="p-3 font-bold">
                                    {{ $category->name }}
                                </td>
                                <td class="p-3 ">
                                    <div class="flex items-center space-x-4">
                                        <a href="/dashboard/admin/{{ $category->id }}/edit">
                                            <button type="button"
                                                class="py-2 px-3 flex items-center text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5"
                                                    viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                    <path fill-rule="evenodd"
                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                Edit
                                            </button>
                                        </a>
                                        <form action="/dashboard/admin/{{ $category->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" onclick="return confirm('Delete data?')"
                                                class="flex items-center text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5"
                                                    viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="ml-5 font-semibold text-gray-200 mt-5">Belum ada data..</p>
            @endif
        </div>
    </div>
@endsection
