<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <title>Alpharency | ارز دیجیتال</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body class="bg-indigo-1 dark:bg-white1">


    {{-- header  --}}
    @include('components/header')

    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute top-0 left-0">
            <img src="/image/tinified/1.png" alt="">
        </div>
    </div>




    <div class="light dark:opacity-40 relative w-full ">
        <div class="absolute top-96 left-0">
            <img src="/image/tinified/3.png" alt="">
        </div>
    </div>




    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute right-0">
            <img src="/image/tinified/5.png" alt="">
        </div>
    </div>


    <div class="sm:p-8 sm:w-full md:w-10/12 xl:w-10/12 xl2:w-9/12 mx-auto p-4 z-50">
        <div
            class="flex flex-col md:flex-row w-full mt-32 lg:mt-44 z-40 relative text-white justify-between items-center space-y-10 mb-12 lg:mb-32">

            <div class="w-full lg:w-4/12 space-y-10 relative text-white dark:text-zinc-900">

                <p class="lg:text-4xl text-2xl z-40 flex justify-center">نمای بازار کریپتو</p>
                <p class="z-40 text-justify">در این صفحه می‌توانید به صورت لحظه‌ای از آخرین قیمت ارز
                    دیجیتال محبوبتان آگاه شوید و
                    با
                    مقایسه قیمت ارزهای دیجیتال مختلف اقدام به خرید و فروش ارز دیجیتال مورد نظر خود نمایید. در این صفحه
                    می‌توانید به صورت لحظه‌ای از آخرین قیمت ارز دیجیتال محبوبتان آگاه شوید و با مقایسه قیمت ارزهای
                    دیجیتال
                    مختلف اقدام به خرید و فروش ارز دیجیتال مورد نظر خود نمایید.در این صفحه می‌توانید به صورت لحظه‌ای از
                    آخرین قیمت ارز دیجیتال محبوبتان آگاه شوید و با مقایسه قیمت ارزهای دیجیتال مختلف اقدام به خرید و فروش
                    ارز
                    دیجیتال مورد نظر خود نمایید.
                </p>
            </div>

            <div id="ex1" class="w-full lg:w-8/12 flex lg:justify-end relative">
                <img class="lg:w-8/12  dark:brightness-50" src="/image/crypto.svg" alt="">

                <div>
                    <img id="ex1-layer" class="w-3/12 lg:w-2/12 absolute top-[40%] left-[1%]" src="/image/E1.svg"
                        alt="">
                    <img id="ex2-layer" class="w-3/12 lg:w-2/12 absolute top-[70%] right-[20%] lg:right-[30%]"
                        src="/image/E2.svg" alt="">
                    <img class="animate-bounce w-3/12 lg:w-2/12 absolute top-[7%] left-[50%] lg:left-[30%]"
                        src="/image/E3.svg" alt="">
                </div>
            </div>


        </div>

        {{-- coin box  --}}
        <div class="container mx-auto text-gray-100">
            <div class="flex flex-col">
                <div id="coinBox" class="bg-coin1 dark:bg-white dark:filter-none dark:shadow-2xl p-2 md:p-6">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-8">

                        @foreach ($coins as $coin)
                            @if ($coin->symbol == 'BTC')
                                <div
                                    class="bg-indigo-1 dark:bg-coin2 text-white dark:text-zinc-900 p-2 rounded-3xl flex flex-col justify-center items-center xl:space-y-3">


                                    <img src="/assets/{{ $coin->symbol }}.png"
                                        class="rounded-full w-10 lg:w-16 lg:-mt-10">

                                    <p class="lg:text-2xl font-bold">BTC</p>
                                    <div class="flex items-center gap-2">
                                        @if ($coin->percent_change_1h > 0)
                                            <td class="p-2 text-green">
                                                <div class="flex items-center gap-2">
                                                    <svg class="w-3 h-3 " viewBox="0 0 15 13">
                                                        <path class="fill-green" data-name="Polygon 2"
                                                            d="M5.768,3A2,2,0,0,1,9.232,3l4.037,7a2,2,0,0,1-1.732,3H3.463A2,2,0,0,1,1.73,10Z"
                                                            transform="translate(15 13) rotate(180)" fill="#fff" />
                                                    </svg>
                                                    <p class="lg:text-xl">
                                                        {{ number_format($coin->price, 2) }}
                                                    </p>
                                                </div>
                                            </td>
                                        @else
                                            <td class="p-2 text-red">
                                                <div class="flex items-center gap-2">
                                                    <svg class="w-3 h-3 " viewBox="0 0 15 13">
                                                        <path class="fill-red" data-name="Polygon 2"
                                                            d="M5.768,3A2,2,0,0,1,9.232,3l4.037,7a2,2,0,0,1-1.732,3H3.463A2,2,0,0,1,1.73,10Z"
                                                            transform="translate(15 13) rotate(180)" fill="#fff" />
                                                    </svg>
                                                    <p class="lg:text-xl">
                                                        {{ number_format($coin->price, 2) }}
                                                    </p>
                                                </div>
                                            </td>
                                        @endif
                                    </div>



                                    <p class="text-xs shadow-2xl">جزئیات بیشتر</p>
                                    <div class=""></div>
                                </div>
                            @endif

                            @if ($coin->symbol == 'ETH')
                                <div
                                    class="bg-indigo-1 dark:bg-coin2 text-white dark:text-zinc-900 p-2 rounded-3xl flex flex-col justify-center items-center xl:space-y-3">

                                    <img src="/assets/{{ $coin->symbol }}.png"
                                        class="rounded-full w-10 lg:w-16 lg:-mt-10">

                                    <p class="lg:text-2xl font-bold">ETH</p>
                                    <div class="flex items-center gap-2">
                                        @if ($coin->percent_change_1h > 0)
                                            <svg class="w-3 h-3 " viewBox="0 0 15 13">
                                                <path class="fill-green" data-name="Polygon 2"
                                                    d="M5.768,3A2,2,0,0,1,9.232,3l4.037,7a2,2,0,0,1-1.732,3H3.463A2,2,0,0,1,1.73,10Z"
                                                    transform="translate(15 13) rotate(180)" fill="#fff" />
                                            </svg>
                                        @else
                                            <svg class="w-3 h-3 " viewBox="0 0 15 13">
                                                <path class="fill-red" data-name="Polygon 2"
                                                    d="M5.768,3A2,2,0,0,1,9.232,3l4.037,7a2,2,0,0,1-1.732,3H3.463A2,2,0,0,1,1.73,10Z"
                                                    transform="translate(15 13) rotate(180)" fill="#fff" />
                                            </svg>
                                        @endif
                                        <p class="lg:text-xl">{{ number_format($coin->price, 2) }}</p>
                                    </div>
                                    <div>
                                        <p class="text-xs">جزئیات بیشتر</p>
                                    </div>
                                </div>
                            @endif

                            @if ($coin->symbol == 'XRP')
                                <div
                                    class="bg-indigo-1 dark:bg-coin2 text-white dark:text-zinc-900 p-2 rounded-3xl flex flex-col justify-center items-center xl:space-y-3">

                                    <img src="/assets/{{ $coin->symbol }}.png"
                                        class="rounded-full w-10 lg:w-16 lg:-mt-10">

                                    <p class="lg:text-2xl font-bold">XRP</p>
                                    <div class="flex items-center gap-2">
                                        @if ($coin->percent_change_1h > 0)
                                            <svg class="w-3 h-3 " viewBox="0 0 15 13">
                                                <path class="fill-green" data-name="Polygon 2"
                                                    d="M5.768,3A2,2,0,0,1,9.232,3l4.037,7a2,2,0,0,1-1.732,3H3.463A2,2,0,0,1,1.73,10Z"
                                                    transform="translate(15 13) rotate(180)" fill="#fff" />
                                            </svg>
                                        @else
                                            <svg class="w-3 h-3 " viewBox="0 0 15 13">
                                                <path class="fill-red" data-name="Polygon 2"
                                                    d="M5.768,3A2,2,0,0,1,9.232,3l4.037,7a2,2,0,0,1-1.732,3H3.463A2,2,0,0,1,1.73,10Z"
                                                    transform="translate(15 13) rotate(180)" fill="#fff" />
                                            </svg>
                                        @endif
                                        <p class="lg:text-xl">{{ number_format($coin->price, 2) }}</p>
                                    </div>
                                    <p class="text-xs">جزئیات بیشتر</p>
                                </div>
                            @endif

                            @if ($coin->symbol == 'BNB')
                                <div
                                    class="bg-indigo-1 dark:bg-coin2 text-white dark:text-zinc-900 p-2 rounded-3xl flex flex-col justify-center items-center xl:space-y-3">

                                    <img src="/assets/{{ $coin->symbol }}.png"
                                        class="rounded-full w-10 lg:w-16 lg:-mt-10">

                                    <p class="lg:text-2xl font-bold">BNB</p>
                                    <div class="flex items-center gap-2">
                                        @if ($coin->percent_change_1h > 0)
                                            <svg class="w-3 h-3 " viewBox="0 0 15 13">
                                                <path class="fill-green" data-name="Polygon 2"
                                                    d="M5.768,3A2,2,0,0,1,9.232,3l4.037,7a2,2,0,0,1-1.732,3H3.463A2,2,0,0,1,1.73,10Z"
                                                    transform="translate(15 13) rotate(180)" fill="#fff" />
                                            </svg>
                                        @else
                                            <svg class="w-3 h-3 " viewBox="0 0 15 13">
                                                <path class="fill-red" data-name="Polygon 2"
                                                    d="M5.768,3A2,2,0,0,1,9.232,3l4.037,7a2,2,0,0,1-1.732,3H3.463A2,2,0,0,1,1.73,10Z"
                                                    transform="translate(15 13) rotate(180)" fill="#fff" />
                                            </svg>
                                        @endif
                                        <p class="lg:text-xl">{{ number_format($coin->price, 2) }}</p>
                                    </div>
                                    <p class="text-xs">جزئیات بیشتر</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>



        <div class="flex flex-row  mt-20 z-40 relative">
            <div class="md:basis-1/2 sm:basis-auto self-center text-2xl font-bold text-white dark:text-zinc-900">قیمت لحظه ای ارز های دیجیتال</div>

            {{-- <div class="basis-1/2" style="text-align: -webkit-left;">
                <div class="switch-button">
                    <input class="switch-button-checkbox" type="checkbox">
                    <label class="switch-button-label" for="">
                        <span class="switch-button-label-span">تتر
                        </span>
                    </label>
                </div>
            </div> --}}

        </div>



        <div class="w-full mt-10 tab_wrap tab_area z-40 relative">
            <div class="btn_area clearfix z-40">
                <button
                    class="btn_tab_s btn_tab float-right p-3 backdrop-filter rounded-t-2xl ml-4 text-white act flex"
                    data-depth="0" data-idx="0">لیست تمام ارزها
                    <svg class="xl2:w-7 xl2:h-7 sm:w-5 md:w-5 ml-3 mr-3" viewBox="0 0 18.071 23">
                        <path class="fill-white" data-name="Path 5877"
                            d="M21.973,11.5H14.786a2.464,2.464,0,0,1-2.464-2.464V1.848a.205.205,0,0,0-.205-.205H7.393A3.286,3.286,0,0,0,4.107,4.929V21.357a3.286,3.286,0,0,0,3.286,3.286h11.5a3.286,3.286,0,0,0,3.286-3.286V11.705A.205.205,0,0,0,21.973,11.5ZM17.25,19.714H9.036a.821.821,0,1,1,0-1.643H17.25a.821.821,0,1,1,0,1.643Zm0-4.107H9.036a.821.821,0,1,1,0-1.643H17.25a.821.821,0,1,1,0,1.643Z"
                            transform="translate(-4.107 -1.643)" fill="#fff" />
                        <path class="fill-white" id="Path_5878" data-name="Path 5878"
                            d="M21.522,9.682,14.139,2.3a.1.1,0,0,0-.175.072V9.036a.821.821,0,0,0,.821.821H21.45a.1.1,0,0,0,.072-.175Z"
                            transform="translate(-4.107 -1.643)" fill="#fff" />
                    </svg>
                </button>
                {{-- <button class="btn_tab_s btn_tab float-right p-3 rounded-t-2xl mx-4 text-white flex" data-depth="0"
                    data-idx="1">لیست من
                    <svg class="xl2:w-7 xl2:h-7 sm:w-5 md:w-5 ml-3 mr-3" viewBox="0 0 24.638 23">
                        <path class="stroke-white dark:stroke-dark8"
                            d="M35.442,54.982a.821.821,0,0,1-.482-.154l-6.6-4.786-6.6,4.786A.821.821,0,0,1,20.5,53.9l2.575-7.626L16.4,41.7a.821.821,0,0,1,.462-1.5h8.233l2.484-7.646a.821.821,0,0,1,1.563,0L31.624,40.2h8.233a.821.821,0,0,1,.465,1.5l-6.676,4.574L36.219,53.9a.821.821,0,0,1-.777,1.084Z"
                            transform="translate(-16.041 -31.985)" fill="#fff" />
                    </svg>
                </button>

                <button class="btn_tab_s btn_tab float-left p-3 rounded-t-2xl text-white flex" data-depth="0"
                    data-idx="3">جستجو در نام ارز ها

                    <svg class="xl2:w-7 xl2:h-7 sm:w-5 md:w-5 ml-3 mr-3" viewBox="0 0 23.101 23.101">
                        <g id="search" transform="translate(1.388 1.388)">
                            <circle class="stroke-white dark:stroke-dark8" id="Ellipse_211" data-name="Ellipse 211"
                                cx="9.5" cy="9.5" r="9.5" transform="translate(-0.388 -0.388)"
                                fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" />
                            <line class="stroke-white dark:stroke-dark8" id="Line_1" data-name="Line 1"
                                x1="4.94" y1="4.94" transform="translate(15.36 15.36)" fill="none"
                                stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </g>
                    </svg>
                </button> --}}
            </div>

            <div class="content_area dark:bg-white dark:shadow-xl px-6 z-40 relative act dark-backdrop-filter-none rounded-tl-3xl rounded-b-3xl overflow-hidden" data-depth="0" data-idx="0">

                <div class="flex flex-col space-y-10 z-40">

                    <div class="w-full flex h-full mt-4">
                        <div class="overflow-x-auto w-full">

                            <table class="w-full text-right text-gray-500">
                                <thead
                                    class="text-sm text-gray-200 dark:text-gray-800 uppercase bg-coin1 rounded-full">
                                    <tr>
                                        {{-- <th scope="col" class="text-xs lg:text-sm p-2 rounded-r-full">
                                            #
                                        </th> --}}
                                        <th scope="col" class="inline-flex text-xs lg:text-sm p-2 rounded-r-full">
                                            نام ارز
                                        </th>
                                        <th scope="col" class="text-xs lg:text-sm p-2">
                                            قیمت تتر
                                        </th>
                                        <th scope="col" class="text-xs lg:text-sm p-2">
                                            قیمت تومان
                                        </th>
                                        <th scope="col" class="text-xs lg:text-sm p-2 font-sans ">
                                            1h %
                                        </th>
                                        <th scope="col" class="text-xs lg:text-sm p-2 font-sans ">
                                            24h%
                                        </th>
                                        <th scope="col" class="text-xs lg:text-sm p-2 font-sans ">
                                            7d %
                                        </th>
                                        <th scope="col" class="text-xs lg:text-sm p-2">
                                            ارزش بازار
                                        </th>

                                        <th scope="col" class="text-xs lg:text-sm p-2 font-sans ">
                                            Volume(24h)
                                        </th>

                                        <th scope="col" class="text-xs flex lg:text-sm p-2">
                                            نمودار <span class="font-sans">(7d)</span>
                                        </th>
                                        <th scope="col" class="text-xs lg:text-sm p-2 rounded-l-full">
                                            توضیحات بیشتر
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $coin)
                                        <tr class=" border-b border-gray-600 dark:border-gray-400 items-center">
                                            {{-- <td>
                                                <svg class="xl2:w-7 xl2:h-7 sm:w-5 md:w-5 ml-3 mr-3 -mt-2"
                                                    viewBox="0 0 24.638 23">
                                                    <path class="stroke-white dark:stroke-dark8 fill-none"
                                                        d="M35.442,54.982a.821.821,0,0,1-.482-.154l-6.6-4.786-6.6,4.786A.821.821,0,0,1,20.5,53.9l2.575-7.626L16.4,41.7a.821.821,0,0,1,.462-1.5h8.233l2.484-7.646a.821.821,0,0,1,1.563,0L31.624,40.2h8.233a.821.821,0,0,1,.465,1.5l-6.676,4.574L36.219,53.9a.821.821,0,0,1-.777,1.084Z"
                                                        transform="translate(-16.041 -31.985)" fill="#fff" />
                                                </svg>
                                            </td> --}}
                                            <td
                                                class="flex gap-1 lg:gap-4 items-center space-x-5 lg:p-2 mt-2 text-gray-200 text-base">

                                                <img src="/assets/{{ $coin->symbol }}.png"
                                                    class="w-8 h-8 rounded-full">
                                                <a href="{{ route('home.coins.show', ['symbol' => $coin->symbol]) }}" class="text-xs lg:text-base text-gray-200 dark:text-zinc-900 mt-1">
                                                    {{ $coin->name }}</a>
                                            </td>




                                            @if ($coin->percent_change_1h > 0)
                                                <td class="p-2 text-green-400">
                                                    <div class="flex items-center gap-2">
                                                        <svg class="w-3 h-3 rotate-180" viewBox="0 0 15 13">
                                                            <path class="fill-green" data-name="Polygon 2"
                                                                d="M5.768,3A2,2,0,0,1,9.232,3l4.037,7a2,2,0,0,1-1.732,3H3.463A2,2,0,0,1,1.73,10Z"
                                                                transform="translate(15 13) rotate(180)"
                                                                fill="#fff" />
                                                        </svg>
                                                        <p>
                                                            {{ number_format($coin->price, 2) }}
                                                        </p>
                                                    </div>
                                                </td>
                                            @else
                                                <td class="p-2 text-red-400">
                                                    <div class="flex items-center gap-2">
                                                        <svg class="w-3 h-3 " viewBox="0 0 15 13">
                                                            <path class="fill-red" data-name="Polygon 2"
                                                                d="M5.768,3A2,2,0,0,1,9.232,3l4.037,7a2,2,0,0,1-1.732,3H3.463A2,2,0,0,1,1.73,10Z"
                                                                transform="translate(15 13) rotate(180)"
                                                                fill="#fff" />
                                                        </svg>
                                                        <p>
                                                            {{ number_format($coin->price, 2) }}
                                                        </p>
                                                    </div>
                                                </td>
                                            @endif

                                            @if ($coin->percent_change_1h > 0)
                                                <td class="p-2 text-green-400">
                                                    <div class="flex items-center">
                                                        <svg class="w-3 h-3 rotate-180" viewBox="0 0 15 13">
                                                            <path class="fill-green" data-name="Polygon 2"
                                                                d="M5.768,3A2,2,0,0,1,9.232,3l4.037,7a2,2,0,0,1-1.732,3H3.463A2,2,0,0,1,1.73,10Z"
                                                                transform="translate(15 13) rotate(180)"
                                                                fill="#fff" />
                                                        </svg>
                                                        <p>
                                                            {{ number_format($coin->price_ir, 0) }}
                                                        </p>
                                                    </div>
                                                </td>
                                            @else
                                                <td class="p-2 text-red-400">
                                                    <div class="flex items-center">
                                                        <svg class="w-3 h-3 " viewBox="0 0 15 13">
                                                            <path class="fill-red" data-name="Polygon 2"
                                                                d="M5.768,3A2,2,0,0,1,9.232,3l4.037,7a2,2,0,0,1-1.732,3H3.463A2,2,0,0,1,1.73,10Z"
                                                                transform="translate(15 13) rotate(180)"
                                                                fill="#fff" />
                                                        </svg>
                                                        <p>
                                                            {{ number_format($coin->price_ir, 0) }}
                                                        </p>
                                                    </div>
                                                </td>
                                            @endif



                                            @if ($coin->percent_change_1h < 0)
                                                <td class="p-2 text-white dark:text-zinc-900 ">
                                                    <p class="bg-red-o text-center rounded-md">
                                                        {{ number_format($coin->percent_change_1h, 2) }}
                                                    </p>
                                                </td>
                                            @else
                                                <td class="p-2 text-white dark:text-zinc-900 ">
                                                    <p class="bg-green-o text-center rounded-md">
                                                        {{ number_format($coin->percent_change_1h, 2) }}
                                                    </p>
                                                </td>
                                            @endif

                                            @if ($coin->percent_change_24h < 0)
                                                <td class="p-2 text-gray-300 dark:text-zinc-900">
                                                    <p class="bg-red-o text-center rounded-md">
                                                        {{ number_format($coin->percent_change_24h, 2) }}
                                                    </p>
                                                </td>
                                            @else
                                                <td class="p-2 text-gray-300 dark:text-zinc-900">
                                                    <p class="bg-green-o text-center rounded-md">
                                                        {{ number_format($coin->percent_change_24h, 2) }}
                                                    </p>
                                                </td>
                                            @endif

                                            @if ($coin->percent_change_7d < 0)
                                                <td class="p-2 text-gray-300 dark:text-zinc-900">
                                                    <p class="bg-red-o text-center rounded-md">
                                                        {{ number_format($coin->percent_change_7d, 2) }}
                                                    </p>
                                                </td>
                                            @else
                                                <td class="p-2 text-gray-300 dark:text-zinc-900">
                                                    <p class="bg-green-o text-center rounded-md">
                                                        {{ number_format($coin->percent_change_7d, 2) }}
                                                    </p>
                                                </td>
                                            @endif
                                            <th class="p-2 text-gray-300 dark:text-zinc-900">
                                                {{ number_format($coin->market_cap, 3) }}
                                            </th>

                                            <td class="p-2 text-gray-300 dark:text-zinc-900">
                                                {{ number_format($coin->volume_24h, 3) }}
                                            </td>

                                            @if ($coin->percent_change_7d < 0)
                                                <td class="p-2 text-gray-300 dark:text-zinc-900">

                                                    <img src="/image/chart-r.png" alt="">

                                                </td>
                                            @else
                                                <td class="p-2 text-gray-300 dark:text-zinc-900">

                                                    <img src="/image/chart-g.png" alt="">

                                                </td>
                                            @endif




                                            <td class="flex justify-end p-2 text-center">
                                                <a href="{{ route('home.coins.show', ['symbol' => $coin->symbol]) }}"
                                                    class="flex gap-2 text-white bg-green py-2 px-4 rounded-full  text-xs items-center">
                                                    مشاهده
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>

                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>



            {{-- <div class="content_area rounded-b-2xl z-40" data-depth="0" data-idx="1">Second tab content</div> --}}
            {{-- <div class="content_area rounded-b-2xl pt-4 z-40 text-center" data-depth="0" data-idx="3">
                <label for="default-search"
                    class="text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative mx-auto w-6/12">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-7 h-7 text-gray-100 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>

                    <input type="search" name="search" id="search-input" value=""
                        class="block w-full p-4 text-center pl-10 text-xs lg:text-lg text-gray-100 rounded-full bg-form1 placeholder-gray-100 dark:placeholder-gray-700"
                        placeholder="برای جستجو در کتاب ها کلمه مورد نظر را تایپ کنید" required>
                </div>
            </div> --}}

            <div class="flex justify-center items-center space-x-5 mt-10 overflow-hidden">

                @foreach ($pages as $page)
                    <a href="{{ route('home.coins.index', ['page' => $page]) }}"
                        class="bg-green rounded-lg text-white text-sm text-center px-5 py-2 m-5">
                        {{ $page }}
                    </a>
                @endforeach
            </div>


        </div>
    </div>


    <script>
        function findParent(el, className) {
            let check = el.parentNode.classList.contains(className);

            if (check === true) {
                return el.parentNode;
            } else {
                return findParent(el.parentNode, className);
            }
        }

        function bindingTabEvent(wrap) {
            let wrapEl = document.querySelectorAll(wrap);

            wrapEl.forEach(function(tabArea) {
                let btn = tabArea.querySelectorAll('.btn_tab');

                btn.forEach(function(item) {
                    item.addEventListener('click', function() {
                        let parent = findParent(this, 'tab_area');
                        let idx = this.dataset['idx'];
                        let depth = this.dataset['depth'];
                        let btnArr = parent.querySelectorAll('.btn_tab[data-depth="' + depth +
                            '"]');
                        let contentArr = parent.querySelectorAll('.content_area[data-depth="' +
                            depth + '"]');

                        btnArr.forEach(function(btn) {
                            btn.classList.remove('act');
                        });
                        this.classList.add('act');
                        contentArr.forEach(function(content) {
                            content.classList.remove('act');
                        });
                        parent.querySelector('.content_area[data-idx="' + idx + '"][data-depth="' +
                            depth + '"]').classList.add('act');
                    });
                });
            });
        }

        bindingTabEvent('.tab_wrap');
    </script>






    <!-- footer  -->
    @include('components/footer')

    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute bottom-[100%]">
            <img src="/image/tinified/6.png" alt="">
        </div>
    </div>

    @include('sweetalert::alert')

</body>



</html>
