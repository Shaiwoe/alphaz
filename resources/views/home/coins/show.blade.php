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

            <div class="bg-indigo-1  w-full flex gap-8">

                <div class="w-full flex flex-col space-y-8 justify-center items-center p-8 border-l-4 border-coin1">
                    <a href="{{ route('home.coins.index') }}"
                        class="bg-button2 p-3 rounded-full w-56 text-center">بازگشت به لیست بازار کریپتو</a>

                    <p class="text-3xl"> قیمت لحظه ای {{ $coin->name }}</p>

                    <div class="bg-coin1 p-8 w-full flex flex-col space-y-10 justify-center items-center"
                        id="coinBox">

                        @if ($coin->percent_change_1h > 0)
                            <td class="px-4 py-4 text-green-400">
                                <div class="flex items-center gap-2">
                                    <svg class="w-3 h-3 " viewBox="0 0 15 13">
                                        <path class="fill-green" data-name="Polygon 2"
                                            d="M5.768,3A2,2,0,0,1,9.232,3l4.037,7a2,2,0,0,1-1.732,3H3.463A2,2,0,0,1,1.73,10Z"
                                            transform="translate(15 13) rotate(180)" fill="#fff" />
                                    </svg>
                                    <p class="text-2xl">
                                        {{ number_format($coin->price, 2) }}
                                    </p>
                                </div>
                            </td>
                        @else
                            <td class="px-4 py-4 text-red-400">
                                <div class="flex items-center gap-2">
                                    <svg class="w-3 h-3 " viewBox="0 0 15 13">
                                        <path class="fill-red" data-name="Polygon 2"
                                            d="M5.768,3A2,2,0,0,1,9.232,3l4.037,7a2,2,0,0,1-1.732,3H3.463A2,2,0,0,1,1.73,10Z"
                                            transform="translate(15 13) rotate(180)" fill="#fff" />
                                    </svg>
                                    <p class="text-2xl">
                                        {{ number_format($coin->price, 2) }}
                                    </p>
                                </div>
                            </td>
                        @endif

                        @if ($coin->percent_change_7d < 0)
                            <div class="w-full flex justify-center items-center">

                                <img class="w-6/12" src="/image/chart-r.png" alt="">

                            </div>
                        @else
                            <div class="w-full flex justify-center items-center">

                                <img class="w-6/12" src="/image/chart-g.png" alt="">

                            </div>
                        @endif
                    </div>
                </div>

                <div class="w-5/12  flex flex-col space-y-8  p-8 border-l-4 border-coin1">
                    <div class="w-full  bg-coin1 p-6 flex flex-col space-y-4 justify-center items-center"
                        id="coinBox">
                        <p>تغییرات ساعتی</p>

                        @if ($coin->percent_change_1h < 0)
                            <div
                                class="flex justify-center items-center w-8/12  bg-red-o py-1  rounded-2xl text-white dark:text-gray-700 ">
                                <p>
                                    {{ number_format($coin->percent_change_1h, 2) }}
                                </p>
                            </div>
                        @else
                            <div
                                class="flex justify-center items-center w-8/12  bg-green-o py-1  rounded-2xl text-white dark:text-gray-700 ">
                                <p>
                                    {{ number_format($coin->percent_change_1h, 2) }}
                                </p>
                            </div>
                        @endif
                    </div>

                    <div class="w-full  bg-coin1 p-6 flex flex-col space-y-4 justify-center items-center"
                        id="coinBox">
                        <p>تغییرات روزانه</p>

                        @if ($coin->percent_change_24h < 0)
                            <div
                                class="flex justify-center items-center w-8/12  bg-red-o py-1  rounded-2xl text-white dark:text-gray-700 ">
                                <p>
                                    {{ number_format($coin->percent_change_24h, 2) }}
                                </p>
                            </div>
                        @else
                            <div
                                class="flex justify-center items-center w-8/12  bg-green-o py-1  rounded-2xl text-white dark:text-gray-700 ">
                                <p>
                                    {{ number_format($coin->percent_change_24h, 2) }}
                                </p>
                            </div>
                        @endif
                    </div>

                    <div class="w-full  bg-coin1 p-6 flex flex-col space-y-4 justify-center items-center"
                        id="coinBox">
                        <p>تغییرات هفتگی</p>

                        @if ($coin->percent_change_7d < 0)
                            <div
                                class="flex justify-center items-center w-8/12  bg-red-o py-1  rounded-2xl text-white dark:text-gray-700 ">
                                <p>
                                    {{ number_format($coin->percent_change_7d, 2) }}
                                </p>
                            </div>
                        @else
                            <div
                                class="flex justify-center items-center w-8/12  bg-green-o py-1  rounded-2xl text-white dark:text-gray-700 ">
                                <p>
                                    {{ number_format($coin->percent_change_7d, 2) }}
                                </p>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="w-full flex flex-col space-y-8 p-8 relative overflow-hidden">
                    <div class="w-10/12 absolute -top-20 -left-20 opacity-25 blur-md ">
                        <img class="w-full" src="/assets/{{ $coin->symbol }}.png" />
                    </div>

                    <div class="w-full flex flex-col justify-center items-center space-y-12 text-left">
                        <div class="w-full flex justify-center items-center gap-8">
                            <div class="flex flex-col space-y-6 text-3xl">
                                <p>{{ $coin->symbol }}</p>

                                <p>{{ $coin->name }} <span>( {{ $coin->symbol }} )</span></p>

                            </div>
                            <img class="w-3/12" src="/assets/{{ $coin->symbol }}.png" />
                        </div>

                        <div class="flex flex-col space-y-2 w-full justify-center items-center text-2xl">
                            <p class="bg-coin1 p-2 w-6/12 text-center" id="coinBox">
                                {{ number_format($coin->price_ir, 0) }} <span class="mx-2"> تومان </span></p>
                            <p class="bg-coin1 p-2 w-6/12 text-center" id="coinBox">
                                {{ number_format($coin->price, 2) }} <span class="mx-2"> تتر </span></p>
                        </div>

                        <div class="w-full flex gap-4 ">
                            <p class="bg-button2 p-2 rounded-full w-44 text-center">GitHub</p>
                            <p class="bg-button2 p-2 rounded-full w-44 text-center">Whitepaper</p>
                            <p class="bg-button2 p-2 rounded-full w-44 text-center">Website</p>
                        </div>

                    </div>
                </div>

            </div>

            <div class="bg-box dark:bg-white  w-full flex  p-4 rounded-lg">

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

            <div class="w-full flex flex-col  space-y-12 bg-coin1 p-4 z-40" id="coinBox">
                <p class="text-center text-xl">
                    مقالات مرتبط
                </p>

                <div class="flex flex-col lg:flex-row w-full gap-4">
                    @foreach ($articles as $article)
                        <div class="flex  w-full bg-box" id="coinBox">
                            <div class="flex gap-8 justify-center items-center text-center flex-col space-y-4 w-full">
                                <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                    <img class="rounded-t-xl w-full h-36"
                                        src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $article->primary_image) }}"
                                        alt="">
                                </a>

                                <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}"
                                    class="w-full text-sm text-white dark:text-gray-700">
                                    {{ $article->title }}
                                </a>
                                <p class="w-full text-sm text-white dark:text-gray-700">
                                    {{ Str::limit($article->description, 80) }}
                                </p>
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
