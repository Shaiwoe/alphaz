<div class="md:w-3/12 lg:w-2/12 relative z-30 hidden md:flex p-4" style="direction: ltr">
    <div class=" overflow-y-auto rounded-3xl w-full self-center">
        <div class="bg-coin1 shadow-xl z-40 w-full rounded-3xl coinBox dark:bg-slate-200" style="direction: rtl">
            <div class="flex flex-col w-full items-center pt-4">

                <div class="flex items-center">
                    <a href="{{ route('profile.edit') }}" class="flex justify-center items-center">
                        <img class="rounded-full" src="/image/profile2.png" alt="">
                    </a>

                    <div class="flex flex-col space-y-3 mr-3">
                        <p class="text-sm text-white dark:text-zinc-900 ">{{ Auth::user()->name }}

                        </p>

                        <a href="{{ route('profile.edit') }}" class="text-sm text-gray-400 dark:text-zinc-900">تنظیمات
                            کاربری</a>
                    </div>
                </div>

                <ul class="flex flex-col text-white dark:text-zinc-900 mt-8 space-y-4 text-sm w-full px-3">

                    <li
                        class="flex items-center gap-4 dark:text-zinc-900 hover:bg-purple2 dark:hover:bg-slate-300 border border-white dark:border-zinc-900 rounded-full p-2">
                        <svg class="sm:h-5 sm:w-5 mr-3" viewBox="0 0 18 18">
                            <path class="fill-white dark:fill-zinc-900" id="grid_2_" data-name="grid (2)"
                                d="M38.911,40.357H33.446A1.446,1.446,0,0,1,32,38.911V33.446A1.446,1.446,0,0,1,33.446,32h5.464a1.446,1.446,0,0,1,1.446,1.446v5.464A1.446,1.446,0,0,1,38.911,40.357Zm9.643,0H43.089a1.446,1.446,0,0,1-1.446-1.446V33.446A1.446,1.446,0,0,1,43.089,32h5.464A1.446,1.446,0,0,1,50,33.446v5.464A1.446,1.446,0,0,1,48.554,40.357ZM38.911,50H33.446A1.446,1.446,0,0,1,32,48.554V43.089a1.446,1.446,0,0,1,1.446-1.446h5.464a1.446,1.446,0,0,1,1.446,1.446v5.464A1.446,1.446,0,0,1,38.911,50Zm9.643,0H43.089a1.446,1.446,0,0,1-1.446-1.446V43.089a1.446,1.446,0,0,1,1.446-1.446h5.464A1.446,1.446,0,0,1,50,43.089v5.464A1.446,1.446,0,0,1,48.554,50Z"
                                transform="translate(-32 -32)" fill="#fff" />
                        </svg>

                        <a href="{{ route('managers') }}">داشبورد</a>
                    </li>


                    @can('Webinar')
                        <li
                            class="flex items-center gap-4 dark:text-zinc-900 hover:bg-purple2 dark:hover:bg-slate-300 border border-white dark:border-zinc-900 rounded-full p-2">
                            <svg class="sm:h-5 sm:w-5 mr-3" viewBox="0 0 18 18">
                                <g id="easel" transform="translate(-32 -32)">
                                    <rect class="fill-white dark:fill-zinc-900" id="Rectangle_143" data-name="Rectangle 143"
                                        width="13.745" height="9" rx="1" transform="translate(34 35)"
                                        fill="#fff" />
                                    <path class="fill-white dark:fill-zinc-900" id="Path_5867" data-name="Path 5867"
                                        d="M48.071,33.286H41.643v-.643a.643.643,0,0,0-1.286,0v.643H33.929A1.931,1.931,0,0,0,32,35.214v8.357A1.931,1.931,0,0,0,33.929,45.5h1.719L34.6,49.18a.643.643,0,1,0,1.236.354L36.985,45.5h3.372v1.929a.643.643,0,0,0,1.286,0V45.5h3.372l1.153,4.034A.643.643,0,1,0,47.4,49.18L46.352,45.5h1.719A1.931,1.931,0,0,0,50,43.571V35.214A1.931,1.931,0,0,0,48.071,33.286Zm.643,10.286a.643.643,0,0,1-.643.643H33.929a.643.643,0,0,1-.643-.643V35.214a.643.643,0,0,1,.643-.643H48.071a.643.643,0,0,1,.643.643Z"
                                        fill="#fff" />
                                </g>
                            </svg>



                            <a href="{{ route('webinars.index') }}">وبینار</a>
                        </li>
                    @endcan

                    @can('Manager')
                        <div
                            class="flex items-center gap-4 dark:text-zinc-900 hover:bg-purple2 dark:hover:bg-slate-300 border border-white dark:border-zinc-900 rounded-full p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-3">
                                <path
                                    d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                            </svg>


                            <button id="dropdownOffsetButton" data-dropdown-toggle="dropdownOffset1"
                                data-dropdown-offset-distance="35" data-dropdown-offset-skidding="50"
                                data-dropdown-placement="bottom"
                                class="text-white dark:text-zinc-900 flex gap-4 items-center w-full justify-between"
                                type="button">
                                کاربران
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                        </div>
                        <!-- Dropdown menu -->
                        <div id="dropdownOffset1"
                            class="z-50 bg-dark6 rounded-b-3xl drop-shadow-lg border-solid border-x-2 border-green  hidden dropdown_menu_dash  divide-y divide-gray-100 rounded shadow w-40">
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
                        <div
                            class="flex items-center gap-4 dark:text-zinc-900 hover:bg-purple2 dark:hover:bg-slate-300 border border-white dark:border-zinc-900 rounded-full p-2">

                            <svg class="sm:h-7 sm:w-7 mr-3" viewBox="0 0 512 512">
                                <path class="fill-white dark:fill-zinc-900"
                                    d="M459.94 53.25a16.06 16.06 0 00-23.22-.56L424.35 65a8 8 0 000 11.31l11.34 11.32a8 8 0 0011.34 0l12.06-12c6.1-6.09 6.67-16.01.85-22.38zM399.34 90L218.82 270.2a9 9 0 00-2.31 3.93L208.16 299a3.91 3.91 0 004.86 4.86l24.85-8.35a9 9 0 003.93-2.31L422 112.66a9 9 0 000-12.66l-9.95-10a9 9 0 00-12.71 0z" />
                                <path class="fill-white dark:fill-zinc-900"
                                    d="M386.34 193.66L264.45 315.79A41.08 41.08 0 01247.58 326l-25.9 8.67a35.92 35.92 0 01-44.33-44.33l8.67-25.9a41.08 41.08 0 0110.19-16.87l122.13-121.91a8 8 0 00-5.65-13.66H104a56 56 0 00-56 56v240a56 56 0 0056 56h240a56 56 0 0056-56V199.31a8 8 0 00-13.66-5.65z" />
                            </svg>
                            <button id="dropdownOffsetButton" data-dropdown-toggle="dropdownOffset"
                                data-dropdown-offset-distance="15" data-dropdown-offset-skidding="55"
                                data-dropdown-placement="bottom"
                                class="text-white dark:text-zinc-900 flex gap-4 items-center w-full justify-between "
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
                            class="z-50 bg-dark6 rounded-b-3xl drop-shadow-lg border-solid border-x-2 border-green hidden dropdown_menu_dash divide-y divide-gray-100 rounded shadow w-40">
                            <ul class="py-1 text-gray-100" aria-labelledby="dropdownDefault">
                                <li>
                                    <a href="{{ route('articles.index') }}"
                                        class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">لیست
                                        مقالات</a>
                                </li>
                                <li>
                                    <a href="{{ route('articles.create') }}"
                                        class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">مقاله
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
                        <div
                            class="flex items-center gap-4 dark:text-zinc-900 hover:bg-purple2 dark:hover:bg-slate-300 border border-white dark:border-zinc-900 rounded-full p-2">

                            <svg class="sm:h-7 sm:w-7 mr-3" viewBox="0 0 512 512">
                                <path class="fill-white dark:fill-zinc-900"
                                    d="M464 384.39a32 32 0 01-13-2.77 15.77 15.77 0 01-2.71-1.54l-82.71-58.22A32 32 0 01352 295.7v-79.4a32 32 0 0113.58-26.16l82.71-58.22a15.77 15.77 0 012.71-1.54 32 32 0 0145 29.24v192.76a32 32 0 01-32 32zM268 400H84a68.07 68.07 0 01-68-68V180a68.07 68.07 0 0168-68h184.48A67.6 67.6 0 01336 179.52V332a68.07 68.07 0 01-68 68z" />
                            </svg>
                            <button id="dropdownOffsetButton" data-dropdown-toggle="dropdownOffsetV"
                                data-dropdown-offset-distance="15" data-dropdown-offset-skidding="55"
                                data-dropdown-placement="bottom"
                                class="text-white dark:text-zinc-900 flex gap-4 items-center w-full justify-between"
                                type="button">
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
                            class="z-50 bg-dark6 rounded-b-3xl drop-shadow-lg border-solid border-x-2 border-green  hidden dropdown_menu_dash  divide-y divide-gray-100 rounded shadow w-40">
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

                                <li>
                                    <a href="{{ route('tavs.index') }}"
                                        class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">تگ
                                        ها
                                    </a>
                                </li>

                            </ul>
                        </div>
                    @endcan

                    @can('Padcast')
                        {{-- padcast  --}}
                        <div
                            class="flex items-center gap-4 dark:text-zinc-900 hover:bg-purple2 dark:hover:bg-slate-300 border border-white dark:border-zinc-900 rounded-full p-2">

                            <svg class="sm:h-7 sm:w-7 mr-3" viewBox="0 0 512 512">
                                <path class="stroke-white dark:stroke-zinc-900" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                    d="M192 448h128M384 208v32c0 70.4-57.6 128-128 128h0c-70.4 0-128-57.6-128-128v-32M256 368v80" />
                                <path class="fill-white dark:fill-zinc-900"
                                    d="M256 320a78.83 78.83 0 01-56.55-24.1A80.89 80.89 0 01176 239V128a79.69 79.69 0 0180-80c44.86 0 80 35.14 80 80v111c0 44.66-35.89 81-80 81z" />
                            </svg>
                            <button id="dropdownOffsetButton" data-dropdown-toggle="dropdownOffsetP"
                                data-dropdown-offset-distance="15" data-dropdown-offset-skidding="55"
                                data-dropdown-placement="bottom"
                                class="text-white dark:text-zinc-900 flex gap-4 items-center w-full justify-between"
                                type="button">
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
                            class="z-50 bg-dark6 rounded-b-3xl drop-shadow-lg border-solid border-x-2 border-green  hidden dropdown_menu_dash  divide-y divide-gray-100 rounded shadow w-40">
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

                                <li>
                                    <a href="{{ route('taps.index') }}"
                                        class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">تگ
                                        ها
                                    </a>
                                </li>

                            </ul>
                        </div>
                    @endcan

                    @can('Book')
                        {{-- books  --}}
                        <div
                            class="flex items-center gap-4 dark:text-zinc-900 hover:bg-purple2 dark:hover:bg-slate-300 border border-white dark:border-zinc-900 rounded-full p-2">

                            <svg class="sm:h-7 sm:w-7 mr-3" viewBox="0 0 512 512">
                                <path class="fill-white dark:fill-zinc-900"
                                    d="M202.24 74C166.11 56.75 115.61 48.3 48 48a31.36 31.36 0 00-17.92 5.33A32 32 0 0016 79.9V366c0 19.34 13.76 33.93 32 33.93 71.07 0 142.36 6.64 185.06 47a4.11 4.11 0 006.94-3V106.82a15.89 15.89 0 00-5.46-12A143 143 0 00202.24 74zM481.92 53.3A31.33 31.33 0 00464 48c-67.61.3-118.11 8.71-154.24 26a143.31 143.31 0 00-32.31 20.78 15.93 15.93 0 00-5.45 12v337.13a3.93 3.93 0 006.68 2.81c25.67-25.5 70.72-46.82 185.36-46.81a32 32 0 0032-32v-288a32 32 0 00-14.12-26.61z" />
                            </svg>
                            <button id="dropdownOffsetButton" data-dropdown-toggle="dropdownOffsetB"
                                data-dropdown-offset-distance="15" data-dropdown-offset-skidding="55"
                                data-dropdown-placement="bottom"
                                class="text-white dark:text-zinc-900 flex gap-4 items-center w-full justify-between"
                                type="button">
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
                            class="z-50 bg-dark6 rounded-b-3xl drop-shadow-lg border-solid border-x-2 border-green  hidden dropdown_menu_dash  divide-y divide-gray-100 rounded shadow w-40">
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

                                <li>
                                    <a href="{{ route('tabs.index') }}"
                                        class="block px-4 py-2 hover:border-r-8 hover:border-green ease-in-out duration-300">تگ
                                        ها
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @endcan




                    @can('Banner')
                        <li
                            class="flex items-center gap-4 dark:text-zinc-900 hover:bg-purple2 dark:hover:bg-slate-300 border border-white dark:border-zinc-900 rounded-full p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                            </svg>
                            <a href="{{ route('banners.index') }}">بنر ها</a>
                        </li>
                    @endcan




                    <form method="POST" action="{{ route('logout') }}"
                        class="flex items-center gap-4 dark:text-zinc-900 hover:bg-purple2 dark:hover:bg-slate-300 border border-white dark:border-zinc-900 rounded-full p-2 ">
                        @csrf

                        <svg class="sm:h-6 sm:w-6 mr-3" viewBox="0 0 512 512">
                            <path class="fill-white dark:fill-zinc-900"
                                d="M160 256a16 16 0 0116-16h144V136c0-32-33.79-56-64-56H104a56.06 56.06 0 00-56 56v240a56.06 56.06 0 0056 56h160a56.06 56.06 0 0056-56V272H176a16 16 0 01-16-16zM459.31 244.69l-80-80a16 16 0 00-22.62 22.62L409.37 240H320v32h89.37l-52.68 52.69a16 16 0 1022.62 22.62l80-80a16 16 0 000-22.62z" />
                        </svg>

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('خروج') }}

                        </x-dropdown-link>
                    </form>






                </ul>

                <a href="{{ route('maps') }}" class="text-sm text-white my-3 dark:text-zinc-900">1.2.2 ver</a>
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

</div>
