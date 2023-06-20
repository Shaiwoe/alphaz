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
    <title>Alpharency | {{ $coin->name }}</title>
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


    <div class="sm:p-8 sm:w-full lg:w-10/12 xl:w-10/12 xl2:w-10/12 mx-auto p-4 z-50">




        <div class="flex flex-col w-full mt-32 lg:mt-44 z-40 relative text-white  space-y-10 mb-12 lg:mb-32">



            <div
                class="bg-footer dark:bg-white overflow-hidden w-full md:flex sm:block dark:shadow-2xl dark:backdrop-brightness-100">

                <div
                    class="w-full flex flex-col space-y-8 justify-center items-center md:p-8 sm:p-3 md:border-l-4 border-coin1 dark:border-zinc-200">
                    <a href="{{ route('home.coins.index') }}"
                        class="bg-button2 p-3 rounded-full text-center flex items-center">
                        <svg class="xl2:w-7 xl2:h-7 sm:w-5 md:w-5 ml-3" viewBox="0 0 512 512">
                            <path fill="none" stroke="currentColor" class="stroke-white" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="32"
                                d="M262.62 336L342 256l-79.38-80M330.97 256H170" />
                            <path d="M256 448c106 0 192-86 192-192S362 64 256 64 64 150 64 256s86 192 192 192z"
                                fill="none" class="stroke-white" stroke="currentColor" stroke-miterlimit="10"
                                stroke-width="32" />
                        </svg>
                        بازگشت به لیست بازار کریپتو</a>

                    <p class="text-3xl dark:text-stone-900"> قیمت لحظه ای {{ $coin->name }}</p>



                    <div class="flex flex-col justify-center items-center space-y-4 w-full h-full">

                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container w-full h-full rounded-3xl overflow-hidden dark:hidden">
                            <div class="tradingview-widget-container__widget"></div>



                            <!-- TradingView Widget END -->
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js"
                                async>
                                {
                                    "symbol": "{{ $coin->symbol }}USDT",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "dark",
                                    "isTransparent": false,
                                    "autosize": false,
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                        <div
                            class="tradingview-widget-container w-full h-full rounded-3xl overflow-hidden hidden dark:flex">
                            <div class="tradingview-widget-container__widget"></div>



                            <!-- TradingView Widget END -->
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js"
                                async>
                                {
                                    "symbol": "{{ $coin->symbol }}USDT",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "light",
                                    "isTransparent": false,
                                    "autosize": false,
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->



                    </div>
                </div>

                <div
                    class="w-5/12  md:flex sm:table-cell flex-col md:space-y-8 sm:space-y-2  md:p-8 sm:p-3 md:border-l-4 border-coin1 dark:border-zinc-200 self-center">
                    <div
                        class="coinBox dark:bg-zinc-200 w-full  bg-coin1 p-6 flex flex-col space-y-4 justify-center items-center">
                        <p class="dark:text-stone-900">تغییرات ساعتی</p>

                        @if ($coin->percent_change_1h < 0)
                            <div
                                class="flex justify-center items-center w-8/12  bg-red-o py-1  rounded-2xl text-white dark:text-zinc-900 ">
                                <p>
                                    {{ number_format($coin->percent_change_1h, 2) }}
                                </p>
                            </div>
                        @else
                            <div
                                class="flex justify-center items-center w-8/12  bg-green-o py-1  rounded-2xl text-white dark:text-zinc-900 ">
                                <p>
                                    {{ number_format($coin->percent_change_1h, 2) }}
                                </p>
                            </div>
                        @endif
                    </div>

                    <div
                        class="coinBox dark:bg-zinc-200 w-full  bg-coin1 p-6 flex flex-col space-y-4 justify-center items-center">
                        <p class="dark:text-stone-900">تغییرات روزانه</p>

                        @if ($coin->percent_change_24h < 0)
                            <div
                                class="flex justify-center items-center w-8/12  bg-red-o py-1  rounded-2xl text-white dark:text-zinc-900 ">
                                <p>
                                    {{ number_format($coin->percent_change_24h, 2) }}
                                </p>
                            </div>
                        @else
                            <div
                                class="flex justify-center items-center w-8/12  bg-green-o py-1  rounded-2xl text-white dark:text-zinc-900 ">
                                <p>
                                    {{ number_format($coin->percent_change_24h, 2) }}
                                </p>
                            </div>
                        @endif
                    </div>

                    <div
                        class=" coinBox dark:bg-zinc-200 w-full  bg-coin1 p-6 flex flex-col space-y-4 justify-center items-center">
                        <p class="dark:text-stone-900">تغییرات هفتگی</p>

                        @if ($coin->percent_change_7d < 0)
                            <div
                                class="flex justify-center items-center w-8/12  bg-red-o py-1  rounded-2xl text-white dark:text-zinc-900 ">
                                <p>
                                    {{ number_format($coin->percent_change_7d, 2) }}
                                </p>
                            </div>
                        @else
                            <div
                                class="flex justify-center items-center w-8/12  bg-green-o py-1  rounded-2xl text-white dark:text-zinc-900 ">
                                <p>
                                    {{ number_format($coin->percent_change_7d, 2) }}
                                </p>
                            </div>
                        @endif
                    </div>
                </div>

                <div
                    class="w-full flex flex-col md:space-y-8 sm:space-y-4 md:p-8 sm:p-3 relative rounded-3xl overflow-hidden">
                    <div class="w-10/12 absolute -top-20 -left-20 opacity-25 blur-md ">
                        <img class="w-full rounded-full" src="/assets/{{ $coin->symbol }}.png" />
                    </div>

                    <div class="w-full flex flex-col justify-center items-center space-y-12 text-left">
                        <div class="w-full flex justify-center items-center gap-8">
                            <div class="flex flex-col space-y-6 text-3xl">
                                <p>{{ $coin->symbol }}</p>

                                <p>{{ $coin->name }} <span>( {{ $coin->symbol }} )</span></p>

                            </div>
                            <img class="w-3/12 rounded-full" src="/assets/{{ $coin->symbol }}.png" />
                        </div>

                        <div class="flex flex-col space-y-2 w-full justify-center items-center text-2xl">
                            <p
                                class="bg-footer-dark2 dark:text-zinc-900  dark:bg-zinc-200 dark:backdrop-filter-none p-2 md:w-6/12 sm:w-12/12 text-center">
                                {{ number_format($coin->price_ir, 0) }} <span class="mx-2"> تومان </span></p>
                            <p
                                class="bg-footer-dark2 dark:text-zinc-900  dark:bg-zinc-200 dark:backdrop-filter-none p-2 md:w-6/12 sm:w-12/12 text-center">
                                {{ number_format($coin->price, 2) }} <span class="mx-2"> تتر </span></p>
                            <p
                                class="bg-footer-dark2 dark:text-zinc-900  dark:bg-zinc-200 dark:backdrop-filter-none p-2 md:w-6/12 sm:w-12/12 text-center">
                                ---- <span class="mx-2"> دلار </span></p>
                        </div>

                        <div class="w-full grid grid-cols-2 gap-4 ">
                            <p class="bg-button2 p-2 rounded-full text-center items-center flex">
                                <svg class="xl2:w-7 xl2:h-7 sm:w-5 md:w-5 ml-3" viewBox="0 0 31.023 31.023">
                                    <g id="search-circle" transform="translate(-64 -64)">
                                        <path class="fill-whit" id="Path_5883" data-name="Path 5883"
                                            d="M79.512,64A15.512,15.512,0,1,0,95.023,79.512,15.529,15.529,0,0,0,79.512,64Zm7.377,22.889a1.293,1.293,0,0,1-1.827,0L81.6,83.428A7.116,7.116,0,1,1,83.428,81.6l3.46,3.461A1.293,1.293,0,0,1,86.889,86.889Z"
                                            fill="#fff" />
                                        <circle class="fill-whit" id="Ellipse_261" data-name="Ellipse 261"
                                            cx="4.222" cy="4.222" r="4.222"
                                            transform="translate(73.308 73.308)" fill="#fff" />
                                    </g>
                                </svg>

                                GitHub
                            </p>
                            <p class="bg-button2 p-2 rounded-full text-center items-center flex">
                                <svg class="xl2:w-7 xl2:h-7 sm:w-5 md:w-5 ml-3" viewBox="0 0 31.023 31.023">
                                    <g id="newspaper" transform="translate(-32 -32)">
                                        <path class="fill-white" id="Path_5879" data-name="Path 5879"
                                            d="M417.656,112h-1.65a.006.006,0,0,0-.006.006v21.045a2.216,2.216,0,1,0,4.432,0V114.776A2.776,2.776,0,0,0,417.656,112Z"
                                            transform="translate(-357.409 -74.46)" fill="#fff" />
                                        <path class="fill-whit" id="Path_5880" data-name="Path 5880"
                                            d="M56.376,58.591V34.77A2.77,2.77,0,0,0,53.606,32H34.77A2.77,2.77,0,0,0,32,34.77V59.145a3.878,3.878,0,0,0,3.878,3.878H59.62a.079.079,0,0,0,.021-.156A4.44,4.44,0,0,1,56.376,58.591ZM36.432,38.648A1.108,1.108,0,0,1,37.54,37.54h4.432a1.108,1.108,0,0,1,1.108,1.108V43.08a1.108,1.108,0,0,1-1.108,1.108H37.54a1.108,1.108,0,0,1-1.108-1.108Zm14.4,18.836H37.571a1.13,1.13,0,0,1-1.138-1.055,1.108,1.108,0,0,1,1.107-1.161H50.8a1.13,1.13,0,0,1,1.138,1.055,1.108,1.108,0,0,1-1.107,1.161Zm0-4.432H37.571A1.13,1.13,0,0,1,36.433,52a1.108,1.108,0,0,1,1.107-1.161H50.8a1.13,1.13,0,0,1,1.138,1.055,1.108,1.108,0,0,1-1.107,1.161Zm0-4.432H37.571a1.13,1.13,0,0,1-1.138-1.055A1.108,1.108,0,0,1,37.54,46.4H50.8a1.13,1.13,0,0,1,1.138,1.055,1.108,1.108,0,0,1-1.107,1.161Zm0-4.432h-4.4A1.13,1.13,0,0,1,45.3,43.133,1.108,1.108,0,0,1,46.4,41.972h4.4a1.13,1.13,0,0,1,1.138,1.055,1.108,1.108,0,0,1-1.107,1.161Zm0-4.432h-4.4A1.13,1.13,0,0,1,45.3,38.7,1.108,1.108,0,0,1,46.4,37.54h4.4a1.13,1.13,0,0,1,1.138,1.055,1.108,1.108,0,0,1-1.107,1.161Z"
                                            fill="#fff" />
                                    </g>
                                </svg>

                                Whitepaper
                            </p>
                            <p class="bg-button2 p-2 rounded-full text-center items-center flex">
                                <svg class="xl2:w-7 xl2:h-7 sm:w-5 md:w-5 ml-3" viewBox="0 0 31.02 31.02">
                                    <g id="globe" transform="translate(-32 -32)">
                                        <path id="Path_5881" data-name="Path 5881"
                                            d="M172.989,88.811a22.086,22.086,0,0,0,.808-4.666.3.3,0,0,0-.087-.227.321.321,0,0,0-.232-.093H168.4a.311.311,0,0,0-.32.3v3.8a.311.311,0,0,0,.3.3,20.232,20.232,0,0,1,4.217.783A.32.32,0,0,0,172.989,88.811Zm-1.227,2.258a19.237,19.237,0,0,0-3.331-.625.324.324,0,0,0-.243.073.3.3,0,0,0-.108.222v4.488a.306.306,0,0,0,.166.26.33.33,0,0,0,.317-.006,8.3,8.3,0,0,0,2.919-3.125c.139-.231.35-.629.477-.873a.285.285,0,0,0,0-.252A.3.3,0,0,0,171.762,91.068Zm-6.311-.613a19,19,0,0,0-3.328.607.338.338,0,0,0-.182.467c.128.245.286.558.421.792a8.259,8.259,0,0,0,2.948,3.159.33.33,0,0,0,.317.006.306.306,0,0,0,.166-.26v-4.49a.282.282,0,0,0-.1-.215A.306.306,0,0,0,165.451,90.455Zm.022-6.631h-5.08a.322.322,0,0,0-.231.093.3.3,0,0,0-.088.226,22.138,22.138,0,0,0,.8,4.666.31.31,0,0,0,.155.183.33.33,0,0,0,.245.023,20.136,20.136,0,0,1,4.217-.781.311.311,0,0,0,.3-.3V84.127a.3.3,0,0,0-.095-.215A.323.323,0,0,0,165.473,83.824ZM168.432,75a17.441,17.441,0,0,0,3.324-.629.3.3,0,0,0,.2-.162.286.286,0,0,0,0-.251c-.128-.246-.305-.6-.441-.832a8.143,8.143,0,0,0-2.948-3.164.331.331,0,0,0-.317-.005.307.307,0,0,0-.166.26v4.487a.3.3,0,0,0,.108.222A.325.325,0,0,0,168.432,75Zm-.033,6.618h5.08a.32.32,0,0,0,.23-.091.3.3,0,0,0,.089-.224,22.408,22.408,0,0,0-.8-4.692.31.31,0,0,0-.156-.181.33.33,0,0,0-.244-.022,20.681,20.681,0,0,1-4.224.825.308.308,0,0,0-.3.3v3.791A.309.309,0,0,0,168.4,81.623Zm-3.09-11.655a8.092,8.092,0,0,0-2.964,3.19c-.137.235-.3.558-.429.8a.286.286,0,0,0,0,.251.305.305,0,0,0,.2.162A16.673,16.673,0,0,0,165.44,75a.325.325,0,0,0,.243-.073.3.3,0,0,0,.108-.222V70.223a.308.308,0,0,0-.166-.258A.332.332,0,0,0,165.309,69.969Zm.187,7.271a20.48,20.48,0,0,1-4.224-.825.33.33,0,0,0-.244.022.31.31,0,0,0-.156.181,22.409,22.409,0,0,0-.8,4.692.3.3,0,0,0,.089.224.32.32,0,0,0,.23.091h5.08a.321.321,0,0,0,.224-.085.3.3,0,0,0,.1-.213V77.536A.308.308,0,0,0,165.5,77.239Z"
                                            transform="translate(-119.421 -35.214)" fill="#fff" />
                                        <path id="Path_5882" data-name="Path 5882"
                                            d="M58.477,36.543a15.51,15.51,0,1,0,0,21.934,15.51,15.51,0,0,0,0-21.934ZM42.012,59.617a15.168,15.168,0,0,1-.864-1.361c-.138-.256-.335-.641-.466-.909a.5.5,0,0,0-.714-.219c-.3.167-.692.4-.978.584a10.2,10.2,0,0,1-1.632-1.553,17.228,17.228,0,0,1,2.106-1.271c.129-.069.192-.148.151-.289a25.952,25.952,0,0,1-.976-5.69.3.3,0,0,0-.3-.289H34.412a.138.138,0,0,1-.138-.118,6.8,6.8,0,0,1-.058-.992,6.666,6.666,0,0,1,.06-.989.138.138,0,0,1,.138-.118h3.929a.271.271,0,0,0,.3-.251,25.807,25.807,0,0,1,.969-5.666.3.3,0,0,0-.152-.354,18.047,18.047,0,0,1-2.066-1.239,11.759,11.759,0,0,1,1.6-1.579c.282.186.651.4.946.562a.546.546,0,0,0,.762-.237c.13-.268.277-.566.42-.823a15.365,15.365,0,0,1,.868-1.379,12.81,12.81,0,0,1,5.521-1.221,13.139,13.139,0,0,1,5.576,1.278,14,14,0,0,1,.831,1.316c.179.323.37.718.53,1.061a.3.3,0,0,0,.41.134c.373-.2.776-.433,1.131-.667A11.865,11.865,0,0,1,57.6,38.931a16.957,16.957,0,0,1-2.012,1.2.3.3,0,0,0-.151.355,24.143,24.143,0,0,1,.959,5.636.3.3,0,0,0,.3.285l3.92,0a.138.138,0,0,1,.138.118,8.133,8.133,0,0,1,0,1.982.138.138,0,0,1-.138.119H56.685a.3.3,0,0,0-.3.289,25.439,25.439,0,0,1-.96,5.629.308.308,0,0,0,.152.359c.346.179.732.379,1.064.583s.661.421.978.647a11.959,11.959,0,0,1-1.593,1.588c-.169-.111-.37-.238-.543-.342-.119-.069-.339-.192-.46-.26a.472.472,0,0,0-.678.235c-.132.273-.334.664-.476.917a14.71,14.71,0,0,1-.855,1.352,13.338,13.338,0,0,1-11,0Z"
                                            fill="#fff" />
                                    </g>
                                </svg>

                                Website
                            </p>
                            <p class="bg-button2 p-2 rounded-full text-center items-center flex">
                                <svg class="xl2:w-7 xl2:h-7 sm:w-5 md:w-5 ml-3" viewBox="0 0 31.019 22">
                                    <path id="people"
                                        d="M36.68,91a5.036,5.036,0,0,1-3.619-1.615,6.144,6.144,0,0,1-1.68-3.813,5.112,5.112,0,0,1,1.366-3.985A5.643,5.643,0,0,1,40.6,81.6a5.1,5.1,0,0,1,1.374,3.977,6.161,6.161,0,0,1-1.68,3.813A5.023,5.023,0,0,1,36.68,91ZM40.945,85.5ZM45.2,102H28.162a1.814,1.814,0,0,1-1.422-.667,1.84,1.84,0,0,1-.34-1.612,8.267,8.267,0,0,1,3.9-5.068,13.225,13.225,0,0,1,12.761-.026,8.219,8.219,0,0,1,3.9,5.1,1.843,1.843,0,0,1-.344,1.611A1.812,1.812,0,0,1,45.2,102ZM24.466,91.25a4.774,4.774,0,0,1-4.459-4.558,4.317,4.317,0,0,1,1.163-3.351,4.706,4.706,0,0,1,6.587.008,4.284,4.284,0,0,1,1.163,3.345A4.772,4.772,0,0,1,24.466,91.25Zm4.243,1.966a10.1,10.1,0,0,0-4.243-.806,10.256,10.256,0,0,0-5.207,1.351,6.8,6.8,0,0,0-3.205,4.169A1.644,1.644,0,0,0,17.663,100h7.173a.513.513,0,0,0,.509-.411c.007-.039.016-.079.027-.118A9.055,9.055,0,0,1,29.1,94.233a.491.491,0,0,0-.041-.837c-.1-.058-.218-.118-.35-.181Z"
                                        transform="translate(-16.001 -80)" fill="#fff" />
                                </svg>

                                Community
                            </p>
                        </div>

                    </div>
                </div>

            </div>

            <div class="flex">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container w-full rounded-3xl overflow-hidden">
                    <div id="tradingview_0380e"></div>

                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                        new TradingView.widget({
                            "width": "100%",
                            "height": 610,
                            "symbol": "{{ $coin->symbol }}USDT",
                            "interval": "D",
                            "timezone": "Asia/TEHRAN",
                            "theme": "dark",
                            "style": "1",
                            "locale": "en",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": false,
                            "backgroundColor": "rgba(0, 0, 0, 1)",
                            "gridColor": "rgba(255, 255, 255, 0.06)",
                            "allow_symbol_change": true,
                            "container_id": "tradingview_0380e"
                        });
                    </script>
                </div>

                <!-- TradingView Widget END -->
            </div>

            <div class="md:flex sm:block flex-row md:gap-5 sm:space-y-12 md:space-y-0 w-full">
                <div class="basis-1/3">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container w-full rounded-3xl overflow-hidden dark:hidden">
                        <div class="tradingview-widget-container__widget"></div>

                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js"
                            async>
                            {
                                "interval": "1m",
                                "width": "100%",
                                "height": 420,
                                "isTransparent": false,
                                "symbol": "{{ $coin->symbol }}USDT",
                                "showIntervalTabs": true,
                                "locale": "en",
                                "colorTheme": "dark"
                            }
                        </script>
                    </div>
                    <div
                        class="tradingview-widget-container w-full rounded-3xl overflow-hidden hidden dark:flex dark:shadow-2xl">
                        <div class="tradingview-widget-container__widget"></div>

                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js"
                            async>
                            {
                                "interval": "1m",
                                "width": "100%",
                                "height": 420,
                                "isTransparent": false,
                                "symbol": "{{ $coin->symbol }}USDT",
                                "showIntervalTabs": true,
                                "locale": "en",
                                "colorTheme": "light"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
                <div class="basis-1/3">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container w-full rounded-3xl overflow-hidden dark:hidden">
                        <div class="tradingview-widget-container__widget"></div>

                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js"
                            async>
                            {
                                "interval": "1D",
                                "width": "100%",
                                "height": 420,
                                "isTransparent": false,
                                "symbol": "{{ $coin->symbol }}USDT",
                                "showIntervalTabs": true,
                                "locale": "en",
                                "colorTheme": "dark"
                            }
                        </script>
                    </div>
                    <div
                        class="tradingview-widget-container w-full rounded-3xl overflow-hidden hidden dark:flex dark:shadow-2xl">
                        <div class="tradingview-widget-container__widget"></div>

                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js"
                            async>
                            {
                                "interval": "1D",
                                "width": "100%",
                                "height": 420,
                                "isTransparent": false,
                                "symbol": "{{ $coin->symbol }}USDT",
                                "showIntervalTabs": true,
                                "locale": "en",
                                "colorTheme": "light"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
                <div class="basis-1/3">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container w-full rounded-3xl overflow-hidden dark:hidden">
                        <div class="tradingview-widget-container__widget"></div>

                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js"
                            async>
                            {
                                "interval": "1W",
                                "width": "100%",
                                "height": 420,
                                "isTransparent": false,
                                "symbol": "{{ $coin->symbol }}USDT",
                                "showIntervalTabs": true,
                                "locale": "en",
                                "colorTheme": "dark"
                            }
                        </script>
                    </div>
                    <div
                        class="tradingview-widget-container w-full rounded-3xl overflow-hidden hidden dark:flex dark:shadow-2xl">
                        <div class="tradingview-widget-container__widget"></div>

                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js"
                            async>
                            {
                                "interval": "1W",
                                "width": "100%",
                                "height": 420,
                                "isTransparent": false,
                                "symbol": "{{ $coin->symbol }}USDT",
                                "showIntervalTabs": true,
                                "locale": "en",
                                "colorTheme": "light"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>

            <div class="bg-box dark:bg-white dark:shadow-2xl rounded-3xl w-full flex p-4">

                <div class="text-white dark:text-gray-600 space-y-8">
                    <p class="text-2xl">رمز ارز {{ $coin->name }} </p>
                    <p class="leading-8">رمز ارز {{ $coin->name }} با نماد اختصاری {{ $coin->symbol }} یک ارز
                        دیجیتال یا شکلی از
                        دارایی دیجیتال است
                        ارزش بازار حدود {{ number_format($coin->market_cap, 3) }} میلیارد دلار، در رتبه … بازار قرار
                        داشته و سهم … درصدی از کل بازار را در اختیار دارد .

                        هر واحد از … در این لحظه با قیمت … دلار، با احتساب نرخ تتر … تومان معادل … تومان معامله می شود و
                        حجم مبادلات روزانه آن … میلیارد دلار است. قیمت در ۲۴ ساعت اخیر …% کاهش یافته است.

                        بالاترین قیمت بیت کوین در تاریخ … معادل … دلار بوده که همینک %... پایین‌تر از آن زمان قرار دارد.
                        تعداد واحدهای در گردش بیت کوین … میلیون و تعداد کل واحدهای آن … میلیون خواهد بود. در حال حاضر
                        فعال ترین صرافی که در آن بیت کوین معامله می‌شود، صرافی … با سهم %... از حجم معاملات روزانه است.
                    </p>
                </div>

            </div>

            <div class="coinBox dark:bg-white dark:shadow-2xl w-full flex flex-col  space-y-12 bg-coin1 p-4 z-40">
                <p class="text-center dark:text-zinc-900 text-xl">
                    مقالات مرتبط
                </p>

                <div class="flex flex-col lg:flex-row w-full gap-4">
                    @foreach ($articles as $article)
                        <div
                            class="bg-indigo-1 dark:bg-slate-200 dark:shadow-sm rounded-3xl flex flex-col w-full space-y-6">
                            <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                <img class="rounded-t-3xl h-full"
                                    src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $article->primary_image) }}"
                                    alt="">
                            </a>
                            <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                <p class="text-sm font-bold text-center dark:text-zinc-900">
                                    {{ Str::limit($article->title, 40) }}
                                </p>
                            </a>
                            <p class="text-center text-white text-xs font-extralight px-3 dark:text-zinc-900">
                                {{ Str::limit($article->description, 80) }}
                            </p>

                            <div class="flex justify-between items-center px-2 lg:px-4">
                                <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}"
                                    class="bg-green flex rounded-2xl p-2 text-xs mb-4 items-center gap-2">
                                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                    </svg>
                                    مشاهده مقاله
                                </a>

                                <div class="flex items-center gap-4 -mt-2">

                                    <p class="flex gap-1 items-center text-base dark:text-zinc-900">
                                        {{ $article->viewCount }}
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" class="w-5 h-5">
                                            <path class="stroke-white dark:stroke-zinc-900" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                            <path class="stroke-white dark:stroke-zinc-900" stroke-linecap="round"
                                                stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>

                                    </p>
                                </div>
                            </div>
                        </div>


                    @endforeach
                </div>
            </div>




        </div>


        <!-- top footer  -->
        @include('components/top-footer-index')




    </div>


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
