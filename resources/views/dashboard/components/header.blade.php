<!-- Header -->
<div class="fixed w-full top-0 flex items-center justify-between  text-white z-50">
    <div
        class="flex items-center justify-start md:justify-center pl-3 w-48 h-14 bg-blue-800 dark:bg-gray-800 border-none">
        @if (auth()->user()->image)
            <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md  object-cover" src="/storage/{{ auth()->user()->image }}"
                alt="/storage/{{ auth()->user()->image }}" />
        @else
            <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md "
                src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" alt="profile-picture" />
        @endif
        <span class="">{{ auth()->user()->username }}</span>
    </div>
    <div class="flex w-full justify-end items-center h-14 bg-blue-800 dark:bg-gray-800 header-right">
        <a href="/dashboard/posts/create" type="button"
            class="py-2 px-3 flex w-fit mr-2 items-center text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Create New Post
        </a>
        @can('onlyAdmin')
            <a href="/dashboard/admin/create" type="button"
                class="py-2 px-3 flex w-fit items-center text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                New Data
            </a>
        @endcan
        <ul class="flex items-center">
            <li>
                <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
            </li>
            <li>
                <form action="/logout" method="POST" class="mb-0">
                    @csrf
                    <button class="flex items-center mr-4 hover:text-blue-100">
                        <span class="inline-flex mr-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg>
                        </span>
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>
<!-- ./Header -->
