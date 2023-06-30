<div class="md:w-3/12 lg:w-2/12 relative z-30 hidden md:flex p-4" style="direction: ltr">
    <div class="overflow-y-auto h-full rounded-3xl w-full self-center">
        <div class="bg-coin1 shadow-xl z-40 w-full rounded-3xl coinBox dark:bg-slate-200" style="direction: rtl">
            <div class="flex flex-col w-full items-center pt-4">

                <div class="flex items-center gap-4">
                    <a href="{{ route('profile.edit') }}" class="flex justify-center items-center">
                        <img class="rounded-full w-14" src="/image/profile/18.jpg" alt="">
                    </a>

                    <div class="flex flex-col space-y-1 mr-3">
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

                        <a href="{{ route('dashboard') }}">داشبورد</a>
                    </li>



                    <li
                        class="flex items-center gap-4 dark:text-zinc-900 hover:bg-purple2 dark:hover:bg-slate-300 border border-white dark:border-zinc-900 rounded-full p-2">

                        <svg class="sm:h-6 sm:w-6 mr-3" viewBox="0 0 512 512">
                            <path class="fill-white dark:fill-zinc-900"
                                d="M394 480a16 16 0 01-9.39-3L256 383.76 127.39 477a16 16 0 01-24.55-18.08L153 310.35 23 221.2a16 16 0 019-29.2h160.38l48.4-148.95a16 16 0 0130.44 0l48.4 149H480a16 16 0 019.05 29.2L359 310.35l50.13 148.53A16 16 0 01394 480z" />
                        </svg>

                        <a href="{{ route('wishlist') }}">لیست مورد علاقه ها</a>
                    </li>

                    <li
                        class="flex items-center gap-4 dark:text-zinc-900 hover:bg-purple2 dark:hover:bg-slate-300 border border-white dark:border-zinc-900 rounded-full p-2">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="w-6 h-6 sm:h-6 sm:w-6 mr-3">
                            <path class="stroke-white fill-white" stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>

                        <a href="{{ route('wishlist') }}">لیست پسندیده ها</a>
                    </li>

                    <li
                        class="flex items-center gap-4 dark:text-zinc-900 hover:bg-purple2 dark:hover:bg-slate-300 border border-white dark:border-zinc-900 rounded-full p-2">

                        <svg class="sm:h-6 sm:w-6 mr-3" viewBox="0 0 512 512">
                            <path class="fill-white dark:fill-zinc-900"
                                d="M202.24 74C166.11 56.75 115.61 48.3 48 48a31.36 31.36 0 00-17.92 5.33A32 32 0 0016 79.9V366c0 19.34 13.76 33.93 32 33.93 71.07 0 142.36 6.64 185.06 47a4.11 4.11 0 006.94-3V106.82a15.89 15.89 0 00-5.46-12A143 143 0 00202.24 74zM481.92 53.3A31.33 31.33 0 00464 48c-67.61.3-118.11 8.71-154.24 26a143.31 143.31 0 00-32.31 20.78 15.93 15.93 0 00-5.45 12v337.13a3.93 3.93 0 006.68 2.81c25.67-25.5 70.72-46.82 185.36-46.81a32 32 0 0032-32v-288a32 32 0 00-14.12-26.61z" />
                        </svg>

                        <a href="{{ route('wishlist') }}">لیست مطالعه شده ها</a>
                    </li>



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

                        <a href="{{ route('webinar') }}">اطلاع رسانی وبینار</a>
                    </li>

                    <li
                        class="flex items-center gap-4 dark:text-zinc-900 hover:bg-purple2 dark:hover:bg-slate-300 border border-white dark:border-zinc-900 rounded-full p-2">

                        <svg class="sm:h-6 sm:w-6 mr-3" viewBox="0 0 512 512">
                            <path class="fill-white dark:fill-zinc-900"
                                d="M256 368a16 16 0 01-7.94-2.11L108 285.84a8 8 0 00-12 6.94V368a16 16 0 008.23 14l144 80a16 16 0 0015.54 0l144-80a16 16 0 008.23-14v-75.22a8 8 0 00-12-6.94l-140.06 80.05A16 16 0 01256 368z" />
                            <path class="fill-white dark:fill-zinc-900"
                                d="M495.92 190.5v-.11a16 16 0 00-8-12.28l-224-128a16 16 0 00-15.88 0l-224 128a16 16 0 000 27.78l224 128a16 16 0 0015.88 0L461 221.28a2 2 0 013 1.74v144.53c0 8.61 6.62 16 15.23 16.43A16 16 0 00496 368V192a14.76 14.76 0 00-.08-1.5z" />
                        </svg>

                        <a href="{{ route('score') }}">امتیازهای من</a>
                    </li>

                    <li
                        class="flex items-center gap-4 dark:text-zinc-900 hover:bg-purple2 dark:hover:bg-slate-300 border border-white dark:border-zinc-900 rounded-full p-2">

                        <svg class="sm:h-6 sm:w-6 mr-3" viewBox="0 0 512 512">
                            <path class="fill-white dark:fill-zinc-900"
                                d="M121.72 32a4 4 0 00-3.72 5.56l2.3 5.43 40.7 94.9a4 4 0 006.88.82L243 38.4a4 4 0 00-3.2-6.4zM419.93 58.06l-41.28 96.37a4 4 0 003.68 5.57h101a4 4 0 003.4-6.11L427 57.53a4 4 0 00-7.07.53zM85 57.57l-59.71 96.32a4 4 0 003.4 6.11h101a4 4 0 003.67-5.58L92 58.1a4 4 0 00-7-.53zM393.27 32H267.82a1.94 1.94 0 00-1.56 3.11l79.92 106.46a1.94 1.94 0 003.34-.4L391.6 43l3.4-8.34a1.92 1.92 0 00-1.7-2.66zM239 448l-89.43-253.49A3.78 3.78 0 00146 192H25.7a3.72 3.72 0 00-2.95 6l216 279.81a5.06 5.06 0 006.39 1.37 5 5 0 002.39-6.08zM486.3 192H366a3.75 3.75 0 00-3.54 2.51l-98.2 278.16a5.21 5.21 0 002.42 6.31 5.22 5.22 0 006.61-1.39L489.25 198a3.72 3.72 0 00-2.95-6zM259.2 78.93l56 74.67a4 4 0 01-3.2 6.4H200a4 4 0 01-3.2-6.4l56-74.67a4 4 0 016.4 0zm-7 310.31l-67.7-191.91a4 4 0 013.77-5.33h135.46a4 4 0 013.77 5.33l-67.73 191.91a4 4 0 01-7.54 0z" />
                        </svg>

                        <a href="{{ route('vip') }}">محتوای ویژه</a>
                    </li>

                    <li
                        class="flex items-center gap-4 dark:text-zinc-900 hover:bg-purple2 dark:hover:bg-slate-300 border border-white dark:border-zinc-900 rounded-full p-2">

                        <svg class="sm:h-6 sm:w-6 mr-3" viewBox="0 0 512 512">
                            <path class="fill-white dark:fill-zinc-900"
                                d="M60.44 389.17c0 .07 0 .2-.08.38.03-.12.05-.25.08-.38zM439.9 405.6a26.77 26.77 0 01-9.59-2l-56.78-20.13-.42-.17a9.88 9.88 0 00-3.91-.76 10.32 10.32 0 00-3.62.66c-1.38.52-13.81 5.19-26.85 8.77-7.07 1.94-31.68 8.27-51.43 8.27-50.48 0-97.68-19.4-132.89-54.63A183.38 183.38 0 01100.3 215.1a175.9 175.9 0 014.06-37.58c8.79-40.62 32.07-77.57 65.55-104A194.76 194.76 0 01290.3 32c52.21 0 100.86 20 137 56.18 34.16 34.27 52.88 79.33 52.73 126.87a177.86 177.86 0 01-30.3 99.15l-.19.28-.74 1c-.17.23-.34.45-.5.68l-.15.27a21.63 21.63 0 00-1.08 2.09l15.74 55.94a26.42 26.42 0 011.12 7.11 24 24 0 01-24.03 24.03z" />
                            <path class="fill-white dark:fill-zinc-900"
                                d="M299.87 425.39a15.74 15.74 0 00-10.29-8.1c-5.78-1.53-12.52-1.27-17.67-1.65a201.78 201.78 0 01-128.82-58.75A199.21 199.21 0 0186.4 244.16C85 234.42 85 232 85 232a16 16 0 00-28-10.58s-7.88 8.58-11.6 17.19a162.09 162.09 0 0011 150.06C59 393 59 395 58.42 399.5c-2.73 14.11-7.51 39-10 51.91a24 24 0 008 22.92l.46.39A24.34 24.34 0 0072 480a23.42 23.42 0 009-1.79l53.51-20.65a8.05 8.05 0 015.72 0c21.07 7.84 43 12 63.78 12a176 176 0 0074.91-16.66c5.46-2.56 14-5.34 19-11.12a15 15 0 001.95-16.39z" />
                        </svg>

                        <a href="{{ route('question') }}">انجمن پرسش پاسخ</a>
                    </li>


                    <li
                        class="flex items-center gap-4 dark:text-zinc-900 hover:bg-purple2 dark:hover:bg-slate-300 border border-white dark:border-zinc-900 rounded-full p-2 ">

                        <svg class="sm:h-6 sm:w-6 mr-3" viewBox="0 0 512 512">
                            <circle class="fill-white dark:fill-zinc-900" cx="256" cy="256"
                                r="48" />
                            <path class="fill-white dark:fill-zinc-900"
                                d="M470.39 300l-.47-.38-31.56-24.75a16.11 16.11 0 01-6.1-13.33v-11.56a16 16 0 016.11-13.22L469.92 212l.47-.38a26.68 26.68 0 005.9-34.06l-42.71-73.9a1.59 1.59 0 01-.13-.22A26.86 26.86 0 00401 92.14l-.35.13-37.1 14.93a15.94 15.94 0 01-14.47-1.29q-4.92-3.1-10-5.86a15.94 15.94 0 01-8.19-11.82l-5.59-39.59-.12-.72A27.22 27.22 0 00298.76 26h-85.52a26.92 26.92 0 00-26.45 22.39l-.09.56-5.57 39.67a16 16 0 01-8.13 11.82 175.21 175.21 0 00-10 5.82 15.92 15.92 0 01-14.43 1.27l-37.13-15-.35-.14a26.87 26.87 0 00-32.48 11.34l-.13.22-42.77 73.95a26.71 26.71 0 005.9 34.1l.47.38 31.56 24.75a16.11 16.11 0 016.1 13.33v11.56a16 16 0 01-6.11 13.22L42.08 300l-.47.38a26.68 26.68 0 00-5.9 34.06l42.71 73.9a1.59 1.59 0 01.13.22 26.86 26.86 0 0032.45 11.3l.35-.13 37.07-14.93a15.94 15.94 0 0114.47 1.29q4.92 3.11 10 5.86a15.94 15.94 0 018.19 11.82l5.56 39.59.12.72A27.22 27.22 0 00213.24 486h85.52a26.92 26.92 0 0026.45-22.39l.09-.56 5.57-39.67a16 16 0 018.18-11.82c3.42-1.84 6.76-3.79 10-5.82a15.92 15.92 0 0114.43-1.27l37.13 14.95.35.14a26.85 26.85 0 0032.48-11.34 2.53 2.53 0 01.13-.22l42.71-73.89a26.7 26.7 0 00-5.89-34.11zm-134.48-40.24a80 80 0 11-83.66-83.67 80.21 80.21 0 0183.66 83.67z" />
                        </svg>

                        <a href="{{ route('profile.edit') }}">پروفایل کاربری</a>
                    </li>

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


                @can('New')
                    <a href="{{ route('managers') }}" class="text-sm text-white my-3 dark:text-zinc-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
                        </svg>

                    </a>
                @endcan



            </div>


        </div>
    </div>

</div>
