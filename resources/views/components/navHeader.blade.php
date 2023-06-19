<header class="w-full flex justify-between bg-dark2 shadow-sm p-4 px-3  rounded-lg items-center">

    <div class="flex w-full items-center h-8 gap-2">
        <img class="w-10" src="/image/profile2.png" alt="">
        <p class="hidden md:flex text-sm">سلام کاربر گرامی , خوش امدید</p>
    </div>

    <div class="flex w-full justify-end text-white gap-4 items-center">

        <div class="hidden md:block w-24 bg-green-500 py-1 px-2 rounded-md text-center">
            <a class="text-center" href="{{ route('home.index') }}">بازگشت</a>
        </div>


        <div class="flex sm:hidden z-50">

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
                class="fixed top-0 right-0 z-50 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white2 w-64 dark:bg-dark2"
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

                <ul class="flex flex-col text-white mt-12 gap-y-4 text-lg">
                    <li class="flex items-center gap-2 hover:border-l-8 border-yellow-400  p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <a href="{{ route('dashboard') }}">داشبورد</a>
                    </li>

                    @can('Chart')
                        <li class="flex items-center gap-2 hover:border-l-8 border-yellow-400  p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                            </svg>

                            <a href="{{ route('charts.index') }}">آمار سایت</a>
                        </li>
                    @endcan

                    @can('Manager')
                        <div class="flex p-2 gap-2 text-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                            <button id="dropdownOffsetButton" data-dropdown-toggle="dropdownOffset1"
                                data-dropdown-offset-distance="15" data-dropdown-offset-skidding="55"
                                data-dropdown-placement="left"
                                class="text-white flex gap-4 items-center w-full justify-between" type="button">
                                کاربران
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                        </div>
                        <!-- Dropdown menu -->
                        <div id="dropdownOffset1" class="z-50 hidden bg-dark2 divide-y divide-gray-100 rounded shadow w-64">
                            <ul class="py-1 text-gray-100" aria-labelledby="dropdownDefault">
                                <li>
                                    <a href="{{ route('users.index') }}"
                                        class="block px-4 py-2 hover:bg-yellow-500 hover:rounded-md">لیست کاربران</a>
                                </li>
                                <li>
                                    <a href="{{ route('permissions.index') }}"
                                        class="block px-4 py-2 hover:bg-yellow-500 hover:rounded-md">مجوز ها</a>
                                </li>
                                <li>
                                    <a href="{{ route('roles.index') }}"
                                        class="block px-4 py-2 hover:bg-yellow-500 hover:rounded-md">نقش ها</a>
                                </li>
                            </ul>
                        </div>
                    @endcan


                    @can('New')
                        {{-- article  --}}
                        <div class="flex p-2 gap-2 text-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                            <button id="dropdownOffsetButton" data-dropdown-toggle="dropdownOffset"
                                data-dropdown-offset-distance="15" data-dropdown-offset-skidding="55"
                                data-dropdown-placement="left"
                                class="text-white flex gap-4 items-center w-full justify-between" type="button">
                                اخبار
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                        </div>

                        <!-- Dropdown menu -->
                        <div id="dropdownOffset"
                            class="z-50 hidden bg-dark2 divide-y divide-gray-100 rounded shadow w-64">
                            <ul class="py-1 text-gray-100" aria-labelledby="dropdownDefault">
                                <li>
                                    <a href="{{ route('articles.index') }}"
                                        class="block px-4 py-2 hover:bg-yellow-500 hover:rounded-md">لیست اخبار</a>
                                </li>
                                <li>
                                    <a href="{{ route('articles.create') }}"
                                        class="block px-4 py-2 hover:bg-yellow-500 hover:rounded-md">اخبار جدید</a>
                                </li>
                                <li>
                                    <a href="{{ route('categories.index') }}"
                                        class="block px-4 py-2 hover:bg-yellow-500 hover:rounded-md">دسته بندی</a>
                                </li>
                                <li>
                                    <a href="{{ route('tags.index') }}"
                                        class="block px-4 py-2 hover:bg-yellow-500 hover:rounded-md">تگ ها</a>
                                </li>
                            </ul>
                        </div>
                    @endcan


                    @can('Video')
                        {{-- video  --}}
                        <div class="flex p-2 gap-2 text-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round"
                                    d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                            <button id="dropdownOffsetButton" data-dropdown-toggle="dropdownOffsetV"
                                data-dropdown-offset-distance="15" data-dropdown-offset-skidding="55"
                                data-dropdown-placement="left"
                                class="text-white flex gap-4 items-center w-full justify-between" type="button">
                                ویدیو ها
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                        </div>
                        <!-- Dropdown menu -->
                        <div id="dropdownOffsetV"
                            class="z-50 hidden bg-dark2 divide-y divide-gray-100 rounded shadow w-64">
                            <ul class="py-1 text-gray-100" aria-labelledby="dropdownDefault">
                                <li>
                                    <a href="{{ route('videos.index') }}"
                                        class="block px-4 py-2 hover:bg-yellow-500 hover:rounded-md">لیست ویدیو ها</a>
                                </li>
                                <li>
                                    <a href="{{ route('videos.create') }}"
                                        class="block px-4 py-2 hover:bg-yellow-500 hover:rounded-md">ویدیو جدید</a>
                                </li>
                                <li>
                                    <a href="{{ route('catevorys.index') }}"
                                        class="block px-4 py-2 hover:bg-yellow-500 hover:rounded-md">دسته بندی</a>
                                </li>

                            </ul>
                        </div>
                    @endcan

                    @can('Padcast')
                        {{-- padcast  --}}
                        <div class="flex p-2 gap-2 text-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z" />
                            </svg>
                            <button id="dropdownOffsetButton" data-dropdown-toggle="dropdownOffsetP"
                                data-dropdown-offset-distance="15" data-dropdown-offset-skidding="55"
                                data-dropdown-placement="left"
                                class="text-white flex gap-4 items-center w-full justify-between" type="button">
                                پادکست ها
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                        </div>
                        <!-- Dropdown menu -->
                        <div id="dropdownOffsetP"
                            class="z-50 hidden bg-dark2 divide-y divide-gray-100 rounded shadow w-64">
                            <ul class="py-1 text-gray-100" aria-labelledby="dropdownDefault">
                                <li>
                                    <a href="{{ route('padcasts.index') }}"
                                        class="block px-4 py-2 hover:bg-yellow-500 hover:rounded-md">لیست پادکست ها</a>
                                </li>
                                <li>
                                    <a href="{{ route('padcasts.create') }}"
                                        class="block px-4 py-2 hover:bg-yellow-500 hover:rounded-md">پادکست جدید</a>
                                </li>
                                <li>
                                    <a href="{{ route('cateporys.index') }}"
                                        class="block px-4 py-2 hover:bg-yellow-500 hover:rounded-md">دسته بندی</a>
                                </li>

                            </ul>
                        </div>
                    @endcan

                    @can('Book')
                        {{-- books  --}}
                        <div class="flex p-2 gap-2 text-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                            <button id="dropdownOffsetButton" data-dropdown-toggle="dropdownOffsetB"
                                data-dropdown-offset-distance="15" data-dropdown-offset-skidding="55"
                                data-dropdown-placement="left"
                                class="text-white flex gap-4 items-center w-full justify-between" type="button">
                                کتابخونه ها
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                        </div>
                        <!-- Dropdown menu -->
                        <div id="dropdownOffsetB"
                            class="z-50 hidden bg-dark2 divide-y divide-gray-100 rounded shadow w-64">
                            <ul class="py-1 text-gray-100" aria-labelledby="dropdownDefault">
                                <li>
                                    <a href="{{ route('books.index') }}"
                                        class="block px-4 py-2 hover:bg-yellow-500 hover:rounded-md">لیست کتاب ها</a>
                                </li>
                                <li>
                                    <a href="{{ route('books.create') }}"
                                        class="block px-4 py-2 hover:bg-yellow-500 hover:rounded-md">کتاب جدید</a>
                                </li>
                                <li>
                                    <a href="{{ route('cateborys.index') }}"
                                        class="block px-4 py-2 hover:bg-yellow-500 hover:rounded-md">دسته بندی</a>
                                </li>
                            </ul>
                        </div>
                    @endcan


                    @can('Comment')
                        <li class="flex items-center gap-2 cursor-pointer hover:border-l-8 border-yellow-400 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                            </svg>
                            <a href="#">کامنت ها</a>
                        </li>
                    @endcan

                    @can('Banner')
                        <li class="flex items-center gap-2 cursor-pointer hover:border-l-8 border-yellow-400 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                            </svg>
                            <a href="{{ route('banners.index') }}">بنر ها</a>
                        </li>
                    @endcan

                    <li
                        class="flex items-center gap-2 cursor-pointer text-yellow-400 hover:border-l-8 border-yellow-400 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                        </svg>
                        <a href="#">عضویت ویژه</a>
                    </li>

                </ul>

            </div>

        </div>

        <form class="hidden md:block" method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                                    this.closest('form').submit();">
                {{ __('خروج') }}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                </svg>
            </x-dropdown-link>
        </form>

        <form class="block sm:hidden" method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                                    this.closest('form').submit();">
                {{ __('') }}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                </svg>
            </x-dropdown-link>
        </form>

    </div>
</header>
