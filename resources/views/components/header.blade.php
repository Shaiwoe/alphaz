<div class="flex">
    <div class=" flex">
        <div id="" class=" bg-menu dark:bg-white fixed w-full p-3 z-40">

            <div class="mx-auto flex items-center sm:w-full md:w-10/12 xl:w-10/12 xl2:w-10/12">

                <div class="flex w-full justify-start gap-3 md:gap-10 items-center z-50 text-white">
                    <div class="hidden md:flex gap-10 text-xs md:text-base text-white dark:text-gray-700">
                        <ul class="flex gap-12 md:gap-6">
                            <li>
                                <a href="{{ route('home.index') }}">صفحه اصلی</a>
                            </li>
                            <li>
                                <a href="{{ route('home.faq') }}">سوالات متدوال</a>
                            </li>
                            <li>
                                <a href="{{ route('home.about') }}">درباره ما</a>
                            </li>
                            <li>
                                <a href="{{ route('home.contact') }}">ارتباط با ما </a>
                            </li>
                        </ul>
                    </div>

                    <div class="flex gap-4">
                        <button id="theme-toggle" type="button"
                            class="menu-dark dark:bg-icon-light dark:text-gray-700 p-3 rounded-full">
                            <svg id="theme-toggle-dark-icon" class="hidden xl:w-7 md:w-5 xl:h-7 md:h-5"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="19.962" height="19.962"
                                viewBox="0 0 19.962 19.962">
                                <path class="stroke-white dark:stroke-dark8" id="moon"
                                    d="M21,12.79A9,9,0,1,1,11.21,3,7,7,0,0,0,21,12.79Z" transform="translate(-2.038 -2)"
                                    fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                            </svg>

                            <svg id="theme-toggle-light-icon" class="hidden xl:w-7 md:w-5 xl:h-7 md:h-5"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <circle class="stroke-white dark:stroke-dark8" id="Ellipse_212" data-name="Ellipse 212"
                                    cx="5" cy="5" r="5" transform="translate(7 7)"
                                    fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                                <line class="stroke-white dark:stroke-dark8" id="Line_2" data-name="Line 2"
                                    y2="2" transform="translate(12 1)" fill="none" stroke="#000"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <line class="stroke-white dark:stroke-dark8" id="Line_3" data-name="Line 3"
                                    y2="2" transform="translate(12 21)" fill="none" stroke="#000"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <line class="stroke-white dark:stroke-dark8" id="Line_4" data-name="Line 4"
                                    x2="1.42" y2="1.42" transform="translate(4.22 4.22)" fill="none"
                                    stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <line class="stroke-white dark:stroke-dark8" id="Line_5" data-name="Line 5"
                                    x2="1.42" y2="1.42" transform="translate(18.36 18.36)" fill="none"
                                    stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <line class="stroke-white dark:stroke-dark8" id="Line_6" data-name="Line 6"
                                    x2="2" transform="translate(1 12)" fill="none" stroke="#000"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <line class="stroke-white dark:stroke-dark8" id="Line_7" data-name="Line 7"
                                    x2="2" transform="translate(21 12)" fill="none" stroke="#000"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <line class="stroke-white dark:stroke-dark8" id="Line_8" data-name="Line 8"
                                    y1="1.42" x2="1.42" transform="translate(4.22 18.36)" fill="none"
                                    stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                                <line class="stroke-white dark:stroke-dark8" id="Line_9" data-name="Line 9"
                                    y1="1.42" x2="1.42" transform="translate(18.36 4.22)" fill="none"
                                    stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                            </svg>


                        </button>




                        @if (Route::has('login'))
                            <div class="flex  rounded-md md:gap-4 items-center">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="w-12">
                                        <img class="rounded-full" src="/image/profile/18.jpg" alt="profile image">
                                    </a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="menu-dark dark:bg-icon-light dark:text-gray-700  p-3 rounded-full">
                                        <svg class="xl:w-7 md:w-5 xl:h-7 md:h-5" xmlns="http://www.w3.org/2000/svg"
                                            width="18" height="20" viewBox="0 0 18 20">
                                            <g id="user_1_" data-name="user (1)" transform="translate(1 1)">
                                                <path class="stroke-white dark:stroke-dark8" id="Path_5803"
                                                    data-name="Path 5803" d="M20,21V19a4,4,0,0,0-4-4H8a4,4,0,0,0-4,4v2"
                                                    transform="translate(-4 -3)" fill="none" stroke="#fff"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                <circle class="stroke-white dark:stroke-dark8" id="Ellipse_210"
                                                    data-name="Ellipse 210" cx="4" cy="4" r="4"
                                                    transform="translate(4)" fill="none" stroke="#fff"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            </g>
                                        </svg>
                                    </a>

                                @endauth
                            </div>
                        @endif
                    </div>



                    <div class="flex md:hidden z-50">

                        <!-- drawer init and toggle -->
                        <div class="">
                            <button class="menu-dark dark:bg-icon-light dark:text-gray-700 rounded-full p-2"
                                type="button" data-drawer-target="drawer-right-example"
                                data-drawer-show="drawer-right-example" data-drawer-placement="right"
                                aria-controls="drawer-right-example">


                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>

                            </button>
                        </div>

                        <!-- drawer component -->
                        <div id="drawer-right-example"
                            class="fixed top-0 right-0 z-50 h-screen p-4 overflow-y-auto transition-transform translate-x-full w-full bg-indigo-1 dark:bg-white"
                            tabindex="-1" aria-labelledby="drawer-right-label">

                            <button type="button" data-drawer-hide="drawer-right-example"
                                aria-controls="drawer-right-example"
                                class="text-gray-100 dark:text-gray-700  bg-transparent hover:bg-gray-200 hover:text-gray-900  text-sm p-1.5 absolute top-[4%] left-[50%] border-2 border-white dark:border-gray-700 rounded-full inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close menu</span>
                            </button>

                            <form class="mt-20 z-40">
                                <label for="default-search"
                                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-7 h-7 text-gray-500 dark:text-gray-400"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                    <input type="search" id="default-search"
                                        class="block w-full p-4 text-center pl-10 text-sm md:text-lg text-gray-100 rounded-full bg-form1 placeholder-gray-100 dark:placeholder-gray-700"
                                        placeholder=" جستجو در محتوا سایت" required>
                                </div>
                            </form>

                            <ul class="flex flex-col w-full gap-8 mt-16 px-20 text-white dark:text-gray-700">
                                <a class="flex gap-6 w-full border-b border-white dark:border-gray-700 text-lg"
                                    href="{{ route('home.index') }}">
                                    <i class="fa-solid fa-house"></i>
                                    <li class="">خانه</li>
                                </a>
                                <a class="flex gap-6 w-full border-b border-white dark:border-gray-700 text-lg"
                                    hrefroute('home.coins.index') <i class="fa-solid fa-chart-simple"></i>
                                    <li class="">مارکت</li>
                                </a>
                                <a class="flex gap-6 w-full border-b border-white dark:border-gray-700 text-lg"
                                    href="{{ route('home.articles.index') }}">
                                    <i class="fa-solid fa-paste"></i>
                                    <li class="">مقاله ها</li>
                                </a>
                                <a class="flex gap-6 w-full border-b border-white dark:border-gray-700 text-lg"
                                    href="{{ route('home.videos.index') }}">
                                    <i class="fa-solid fa-film"></i>
                                    <li class="">ویدیو ها</li>
                                </a>
                                <a class="flex gap-6 w-full border-b border-white dark:border-gray-700 text-lg"
                                    href="{{ route('home.books.index') }}">
                                    <i class="fa-solid fa-book-open"></i>
                                    <li class="">کتاب ها</li>
                                </a>
                                <a class="flex gap-6 w-full border-b border-white dark:border-gray-700 text-lg"
                                    href="{{ route('home.padcasts.index') }}">
                                    <i class="fa-solid fa-microphone"></i>
                                    <li class="">پادکست ها</li>
                                </a>

                                <a class="flex gap-6 w-full border-b border-white dark:border-gray-700 text-lg"
                                    href="{{ route('home.contact') }}">
                                    <i class="fa-solid fa-envelope"></i>
                                    <li class="">ارتباط با ما</li>
                                </a>

                                <a class="flex gap-6 w-full border-b border-white dark:border-gray-700 text-lg"
                                    href="{{ route('home.faq') }}">
                                    <i class="fa-solid fa-envelope"></i>
                                    <li class="">سوالات متداول</li>
                                </a>

                                <a class="flex gap-6 w-full border-b border-white dark:border-gray-700 text-lg"
                                    href="{{ route('home.about') }}">
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                    <li class="">درباره ما</li>
                                </a>
                            </ul>

                        </div>

                    </div>

                </div>

                <div class="flex w-full justify-end z-40">
                    <a href="{{ route('home.index') }}" class="z-40">
                        <img id="" class="logo_dark_el hidden w-40 md:w-60" src="/image/logo-white.png"
                            alt="">
                        <img id="" class="logo_light_el hidden w-40 md:w-60" src="/image/logo-dark.png"
                            alt="">
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
