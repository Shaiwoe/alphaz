<!-- header  -->
<div class="container w-full mx-auto flex items-center p-4 sm:p-8 text-white">


    <div class="flex w-full ">
        <a href="{{ route('home.index') }}" class="z-40">
            <img id="theme-toggle-light-icon-2"  class="hidden w-10/12 md:w-72" src="/image/logo-dark.png" alt="">
            <img id="theme-toggle-dark-icon-2" class="hidden w-10/12 md:w-72" src="/image/logo-white.png" alt="">
        </a>
    </div>

    <div class="hidden md:flex w-full justify-center items-center text-black dark:text-white">
        <ul class="flex w-full gap-8">
            <a href="{{ route('home.index') }}">
                <li class="hover:border-b-2 border-yellow-400">خانه</li>
            </a>
            <a href="{{ route('home.articles.index') }}">
                <li class="hover:border-b-2 border-yellow-400">مقالات</li>
            </a>
            <a href="{{ route('home.videos.index') }}">
                <li class="hover:border-b-2 border-yellow-400">ویدیو ها</li>
            </a>
            <a href="{{ route('home.padcasts.index') }}">
                <li class="hover:border-b-2 border-yellow-400">پادکست ها</li>
            </a>
            <a href="{{ route('home.books.index') }}">
                <li class="hover:border-b-2 border-yellow-400">کتاب ها</li>
            </a>
            <a href="{{ route('home.contact') }}">
                <li class="hover:border-b-2 border-yellow-400">تماس با ما</li>
            </a>

        </ul>
    </div>



    <div class="flex w-full justify-end gap-4 items-center z-50">




        <div class="flex md:hidden z-50">

            <!-- drawer init and toggle -->
            <div class="text-center justify-end flex">
                <button class="text-white bg-white2 dark:bg-dark2 p-2 rounded-full" type="button"
                    data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example"
                    data-drawer-placement="right" aria-controls="drawer-right-example">


                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                </button>
            </div>

            <!-- drawer component -->
            <div id="drawer-right-example"
                class="fixed top-0 right-0 z-50 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white2 w-40 dark:bg-dark2"
                tabindex="-1" aria-labelledby="drawer-right-label">

                <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example"
                    class="text-gray-400  bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 left-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>

                <ul class="flex flex-col w-full gap-8 mt-16 px-2">
                    <a href="{{ route('home.index') }}">
                        <li class="hover:border-b-2 border-yellow-400">خانه</li>
                    </a>
                    <a href="{{ route('home.articles.index') }}">
                        <li class="hover:border-b-2 border-yellow-400">مقالات</li>
                    </a>
                    <a href="{{ route('home.videos.index') }}">
                        <li class="hover:border-b-2 border-yellow-400">ویدیو ها</li>
                    </a>
                    <a href="{{ route('home.padcasts.index') }}">
                        <li class="hover:border-b-2 border-yellow-400">پادکست ها</li>
                    </a>
                    <a href="{{ route('home.books.index') }}">
                        <li class="hover:border-b-2 border-yellow-400">کتاب ها</li>
                    </a>
                    <a href="{{ route('home.about') }}">
                        <li class="hover:border-b-2 border-yellow-400">درباره ما</li>
                    </a>
                    <a href="{{ route('home.contact') }}">
                        <li class="hover:border-b-2 border-yellow-400">تماس با ما</li>
                    </a>
                </ul>

            </div>

        </div>

        {{-- <button class="hidden xl:flex bg-white2 dark:bg-dark2 p-2 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802" />
            </svg>

        </button> --}}

        {{-- dark mode  --}}
        <button id="theme-toggle" type="button" class="bg-white2 dark:bg-dark2 p-2 rounded-full">
            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>
            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
        </button>

        @if (Route::has('login'))
            <div class="flex  rounded-md md:gap-4 items-center">
                @auth
                    <a href="{{ url('/dashboard') }}" class="relative">
                        <img class="w-10 h-10 rounded-full" src="/image/profile2.png" alt="profile image">
                        <span
                            class="top-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="sm:hidden bg-dark2 rounded-full p-2 text-yellow-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </a>
                    <a href="{{ route('login') }}"
                        class="hidden md:block bg-white2 dark:bg-dark2 rounded-md px-4 py-1">ورود</a>
                    <a href="{{ route('register') }}" class="hidden md:block bg-yellow-500 rounded-md px-4 py-1">ثبت
                        نام</a>
                @endauth
            </div>
        @endif
    </div>


</div>
