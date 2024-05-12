 <!-- Sidebar -->
 <div
     class="fixed z-50 flex flex-col top-14 left-0 w-14 hover:w-64 focus:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none  sidebar">
     <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
         <ul class="flex flex-col py-4 space-y-1">
             <li class="px-5 hidden md:block">
                 <div class="flex flex-row items-center h-8">
                     <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                 </div>
             </li>
             <li>
                 <a href="/dashboard"
                     class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6 {{ Request::is('dashboard') ? 'bg-gray-600 border-gray-800' : '' }}">
                     <span class="inline-flex justify-center items-center ml-4">
                         <span class="inline-flex justify-center items-center ">
                             <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                                 </path>
                             </svg>
                         </span>
                     </span>
                     <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                 </a>
             </li>
             <li>
                 <a href="/dashboard/posts"
                     class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6 {{ Request::is('dashboard/posts*') ? 'bg-gray-600 border-gray-800' : '' }}">
                     <span class="inline-flex justify-center items-center ml-4">
                         <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="white" stroke="currentColor"
                             viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                             <path
                                 d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z" />
                         </svg>
                     </span>
                     <span class="ml-2 text-sm tracking-wide truncate">Posts</span>
                     <span
                         class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
                 </a>
             </li>
             <li>
                 <a href="/"
                     class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6 ">
                     <span class="inline-flex justify-center items-center ml-4">
                         <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                             </path>
                         </svg>
                     </span>
                     <span class="ml-2 text-sm tracking-wide truncate">Home</span>
                 </a>
             </li>
             @can('onlyAdmin')
                 <li class="px-5 hidden md:block">
                     <div class="flex flex-row items-center h-8">
                         <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Administrator</div>
                     </div>
                 </li>
                 <li>
                     <a href="/dashboard/admin"
                         class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6 {{ Request::is('dashboard/admin*') ? 'bg-gray-600 border-gray-800' : '' }}">
                         <span class="inline-flex justify-center items-center ml-4">
                             <span class="inline-flex justify-center items-center ">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 448 512"
                                     fill="white">
                                     <path
                                         d="M248 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V56H168c-13.3 0-24 10.7-24 24s10.7 24 24 24h32v40H59.6C26.7 144 0 170.7 0 203.6c0 8.2 1.7 16.3 4.9 23.8L59.1 352h52.3L49 208.2c-.6-1.5-1-3-1-4.6c0-6.4 5.2-11.6 11.6-11.6H224 388.4c6.4 0 11.6 5.2 11.6 11.6c0 1.6-.3 3.2-1 4.6L336.5 352h52.3l54.2-124.6c3.3-7.5 4.9-15.6 4.9-23.8c0-32.9-26.7-59.6-59.6-59.6H248V104h32c13.3 0 24-10.7 24-24s-10.7-24-24-24H248V24zM101.2 432H346.8l16.6 32H84.7l16.6-32zm283.7-30.7c-5.5-10.6-16.5-17.3-28.4-17.3H91.5c-12 0-22.9 6.7-28.4 17.3L36.6 452.5c-3 5.8-4.6 12.2-4.6 18.7C32 493.8 50.2 512 72.8 512H375.2c22.5 0 40.8-18.2 40.8-40.8c0-6.5-1.6-12.9-4.6-18.7l-26.5-51.2z" />
                                 </svg>
                             </span>
                         </span>
                         <span class="ml-2 text-sm tracking-wide truncate">onlyAdmin</span>
                     </a>
                 </li>
             @endcan
         </ul>

     </div>
 </div>
 <!-- ./Sidebar -->
