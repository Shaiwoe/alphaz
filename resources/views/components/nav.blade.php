<div class="w-2/12 px-5 py-4  relative z-50 hidden md:block">
    <div class="bg-coin1  shadow-xl rounded-lg z-50 lg:mt-24  w-full" id="coinBox">
        <div class="flex flex-col">

            <div class="flex gap-4 items-center">
                <a href="{{ route('home.index') }}" class="flex justify-center items-center mt-8 px-4">
                    <img class="" src="/image/profile2.png" alt="">
                </a>

                <div class="flex flex-col space-y-3 mt-8">
                    <p class="text-sm text-white dark:text-gray-600 ">{{ $users->name }} , خوش آمدی</p>

                    <p class="text-sm text-gray-400 dark:text-gray-600">پروفایل کاربری</p>
                </div>
            </div>

            <ul class="flex flex-col text-white dark:text-gray-600 mt-4 space-y-6 text-lg px-4 py-16">
                <li class="flex items-center gap-4 hover:border-2 border border-white rounded-full p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 013.75 9.375v-4.5zM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 01-1.125-1.125v-4.5zM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0113.5 9.375v-4.5z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 6.75h.75v.75h-.75v-.75zM6.75 16.5h.75v.75h-.75v-.75zM16.5 6.75h.75v.75h-.75v-.75zM13.5 13.5h.75v.75h-.75v-.75zM13.5 19.5h.75v.75h-.75v-.75zM19.5 13.5h.75v.75h-.75v-.75zM19.5 19.5h.75v.75h-.75v-.75zM16.5 16.5h.75v.75h-.75v-.75z" />
                    </svg>

                    <a href="{{ route('dashboard') }}">داشبورد</a>
                </li>

                @can('Prices')
                    <li
                        class="flex items-center gap-4 text-white dark:text-gray-600 hover:border-2 border border-white rounded-full  p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                        </svg>

                        <a href="{{ route('markets.index') }}">مارکت</a>
                    </li>
                @endcan

                @can('Metavers')
                    <li
                        class="flex items-center gap-4 text-white dark:text-gray-600 hover:border-2 border border-white rounded-full  p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                        </svg>


                        <a href="{{ route('metavers.index') }}">متاورس</a>
                    </li>
                @endcan

                @can('Webinar')
                    <li
                        class="flex items-center gap-4 text-white dark:text-gray-600 hover:border-2 border border-white rounded-full  p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                        </svg>


                        <a href="{{ route('webinars.index') }}">وبینار</a>
                    </li>
                @endcan

                @can('Manager')
                    <div class="flex items-center  gap-4 hover:border-2 border border-white rounded-full  p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                        <button id="dropdownOffsetButton" data-dropdown-toggle="dropdownOffset1"
                            data-dropdown-offset-distance="35" data-dropdown-offset-skidding="50"
                            data-dropdown-placement="left"
                            class="text-white dark:text-gray-600 flex gap-4 items-center w-full justify-between"
                            type="button">
                            کاربران
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </div>
                    <!-- Dropdown menu -->
                    <div id="dropdownOffset1"
                        class="z-50 bg-dark6 rounded-bl-3xl rounded-tl-3xl drop-shadow-lg border-solid border-l-2 border-green  hidden dropdown_menu_dash  divide-y divide-gray-100 rounded shadow w-40">
                        <ul class="py-1 text-gray-100" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="{{ route('users.index') }}"
                                    class="block px-4 py-2 hover:bg-coin1 hover:rounded-md">لیست کاربران</a>
                            </li>
                            <li>
                                <a href="{{ route('permissions.index') }}"
                                    class="block px-4 py-2 hover:bg-coin1 hover:rounded-md">مجوز ها</a>
                            </li>
                            <li>
                                <a href="{{ route('roles.index') }}"
                                    class="block px-4 py-2 hover:bg-coin1 hover:rounded-md">نقش ها</a>
                            </li>
                        </ul>
                    </div>
                @endcan


                @can('New')
                    {{-- article  --}}
                    <div class="flex items-center gap-4 hover:border-2 border border-white rounded-full  p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                        <button id="dropdownOffsetButton" data-dropdown-toggle="dropdownOffset"
                            data-dropdown-offset-distance="15" data-dropdown-offset-skidding="55"
                            data-dropdown-placement="left"
                            class="text-white dark:text-gray-600 flex gap-4 items-center w-full justify-between"
                            type="button">
                            مقالات
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </div>

                    <!-- Dropdown menu -->
                    <div id="dropdownOffset"
                        class="z-50 bg-dark6 rounded-bl-3xl rounded-tl-3xl drop-shadow-lg border-solid border-l-2 border-green  hidden dropdown_menu_dash  divide-y divide-gray-100 rounded shadow w-40">
                        <ul class="py-1 text-gray-100" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="{{ route('articles.index') }}"
                                    class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">لیست
                                    مقالات</a>
                            </li>
                            <li>
                                <a href="{{ route('articles.create') }}"
                                    class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">اخبار
                                    جدید</a>
                            </li>
                            <li>
                                <a href="{{ route('categories.index') }}"
                                    class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">دسته
                                    بندی</a>
                            </li>
                            <li>
                                <a href="{{ route('tags.index') }}"
                                    class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">تگ
                                    ها</a>
                            </li>

                            <li>
                                <a href="{{ route('comments.index') }}"
                                    class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">کامنت
                                    ها</a>
                            </li>
                        </ul>
                    </div>
                @endcan


                @can('Video')
                    {{-- video  --}}
                    <div class="flex items-center gap-4 hover:border-2 border border-white rounded-full  p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round"
                                d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                        <button id="dropdownOffsetButton" data-dropdown-toggle="dropdownOffsetV"
                            data-dropdown-offset-distance="15" data-dropdown-offset-skidding="55"
                            data-dropdown-placement="left"
                            class="text-white dark:text-gray-600 flex gap-4 items-center w-full justify-between"
                            type="button">
                            ویدیو ها
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </div>
                    <!-- Dropdown menu -->
                    <div id="dropdownOffsetV"
                        class="z-50 bg-dark6 rounded-bl-3xl rounded-tl-3xl drop-shadow-lg border-solid border-l-2 border-green  hidden dropdown_menu_dash  divide-y divide-gray-100 rounded shadow w-40">
                        <ul class="py-1 text-gray-100" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="{{ route('videos.index') }}"
                                    class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">لیست
                                    ویدیو ها</a>
                            </li>
                            <li>
                                <a href="{{ route('videos.create') }}"
                                    class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">ویدیو
                                    جدید</a>
                            </li>
                            <li>
                                <a href="{{ route('catevorys.index') }}"
                                    class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">دسته
                                    بندی</a>
                            </li>

                        </ul>
                    </div>
                @endcan

                @can('Padcast')
                    {{-- padcast  --}}
                    <div class="flex items-center gap-4 hover:border-2 border border-white rounded-full  p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z" />
                        </svg>
                        <button id="dropdownOffsetButton" data-dropdown-toggle="dropdownOffsetP"
                            data-dropdown-offset-distance="15" data-dropdown-offset-skidding="55"
                            data-dropdown-placement="left"
                            class="text-white dark:text-gray-600 flex gap-4 items-center w-full justify-between"
                            type="button">
                            پادکست ها
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </div>
                    <!-- Dropdown menu -->
                    <div id="dropdownOffsetP"
                        class="z-50 bg-dark6 rounded-bl-3xl rounded-tl-3xl drop-shadow-lg border-solid border-l-2 border-green  hidden dropdown_menu_dash  divide-y divide-gray-100 rounded shadow w-40">
                        <ul class="py-1 text-gray-100" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="{{ route('padcasts.index') }}"
                                    class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">لیست
                                    پادکست ها</a>
                            </li>
                            <li>
                                <a href="{{ route('padcasts.create') }}"
                                    class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">پادکست
                                    جدید</a>
                            </li>
                            <li>
                                <a href="{{ route('cateporys.index') }}"
                                    class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">دسته
                                    بندی</a>
                            </li>

                        </ul>
                    </div>
                @endcan

                @can('Book')
                    {{-- books  --}}
                    <div class="flex items-center gap-4 hover:border-2 border border-white rounded-full  p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <button id="dropdownOffsetButton" data-dropdown-toggle="dropdownOffsetB"
                            data-dropdown-offset-distance="15" data-dropdown-offset-skidding="55"
                            data-dropdown-placement="left"
                            class="text-white dark:text-gray-600 flex gap-4 items-center w-full justify-between"
                            type="button">
                            کتابخونه ها
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </div>
                    <!-- Dropdown menu -->
                    <div id="dropdownOffsetB"
                        class="z-50 bg-dark6 rounded-bl-3xl rounded-tl-3xl drop-shadow-lg border-solid border-l-2 border-green  hidden dropdown_menu_dash  divide-y divide-gray-100 rounded shadow w-40">
                        <ul class="py-1 text-gray-100" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="{{ route('books.index') }}"
                                    class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">لیست
                                    کتاب ها</a>
                            </li>
                            <li>
                                <a href="{{ route('books.create') }}"
                                    class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">کتاب
                                    جدید</a>
                            </li>
                            <li>
                                <a href="{{ route('cateborys.index') }}"
                                    class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">دسته
                                    بندی</a>
                            </li>
                        </ul>
                    </div>
                @endcan




                @can('Banner')
                    <li class="flex items-center gap-4 hover:border-2 border border-white rounded-full  p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <a href="{{ route('banners.index') }}">بنر ها</a>
                    </li>
                @endcan


                <li class="flex items-center gap-4 hover:border-2 border border-white rounded-full  p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                    </svg>


                    <a href="{{ route('maps') }}">رودمپ آلفارنسی</a>
                </li>


                <li class="flex items-center gap-4 hover:border-2 border border-white rounded-full  p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>

                    <a href="{{ route('wishlist') }}">لیست مورد علاقه ها</a>
                </li>

                <li class="flex items-center gap-4 hover:border-2 border border-white rounded-full  p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                    </svg>

                    <a href="{{ route('question') }}">انجمن پرسش پاسخ</a>
                </li>

                <li class="flex items-center gap-4 hover:border-2 border border-white rounded-full  p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                    </svg>

                    <a href="{{ route('webinar') }}">اطلاع رسانی وبینار</a>
                </li>

                <li class="flex items-center gap-4 hover:border-2 border border-white rounded-full  p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                    </svg>

                    <a href="{{ route('score') }}">امتیازهای من</a>
                </li>

                <li class="flex items-center gap-4 hover:border-2 border border-white rounded-full  p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                    </svg>

                    <a href="{{ route('vip') }}">محتوای ویژه</a>
                </li>

                <li class="flex items-center gap-4 hover:border-2 border border-white rounded-full  p-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                    <a href="{{ route('profile') }}">پروفایل</a>
                </li>

                <form method="POST" action="{{ route('logout') }}"
                    class="flex items-center gap-4 hover:border-2 border border-white rounded-full  p-2 ">
                    @csrf
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M5.636 5.636a9 9 0 1012.728 0M12 3v9" />
                    </svg>

                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                            this.closest('form').submit();">
                        {{ __('خروج') }}

                    </x-dropdown-link>
                </form>






            </ul>
        </div>
        {{-- <div class="flex flex-col gap-3 absolute bottom-1 p-2">

            <a href="/dashboard/profile"
                class="flex text-white  items-center gap-4 py-4 px-4 border-t border-gray-600 w-full">
                <image class="w-8" src="/image/profile2.png" alt="">
                پروفایل
            </a>
        </div> --}}

    </div>
</div>
