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
    <title>Alpharency</title>
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


    <div class="sm:p-8 sm:w-full lg:w-10/12 xl:w-10/12 xl2:w-9/12 mx-auto p-4 z-40">
        <div class="flex flex-col lg:flex-row w-full mt-32 lg:mt-32 z-40 relative text-white items-center justify-between  space-y-10">

            <div class="w-full lg:w-6/12  space-y-10 relative text-white dark:text-gray-700">

                <p class="lg:text-4xl text-2xl z-40 flex justify-center">نمای بازار متاورس</p>
                <p class="hidden lg:block z-40">در این صفحه می‌توانید به صورت لحظه‌ای از آخرین قیمت ارز دیجیتال محبوبتان آگاه شوید و
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

            <div id="ex1" class="w-full  flex relative">
                <div class="flex w-full justify-end">
                    <img class="w-full" src="/image/meta1.png" alt="">
                </div>

                <div>
                    <img  class="w-4/12 lg:w-3/12 absolute top-[13%]  right-[20%]" src="/image/meta2.png" alt="">
                </div>
            </div>


        </div>




        <div class="flex flex-col mt-20 lg:mt-32 space-y-10 z-40">

            <div id="coinBox" class="w-full bg-coin1 flex p-2 lg:p-8 z-40 relative h-full">
                <div class="relative overflow-x-auto w-full sm:rounded-lg">

                    <table class="w-full  text-right text-gray-500">
                        <thead class=" text-sm text-gray-200 dark:text-gray-800 uppercase ">
                            <tr>
                                <th scope="col" class="text-xs lg:text-base px-4 py-3">
                                    نام ارز
                                </th>
                                <th scope="col" class="text-xs lg:text-base px-4 py-3">
                                    قیمت تتر
                                </th>
                                <th scope="col" class="text-xs lg:text-base px-4 py-3 font-sans ">
                                    1h %
                                </th>
                                <th scope="col" class="text-xs lg:text-base px-4 py-3 font-sans ">
                                    24h %
                                </th>
                                <th scope="col" class="text-xs lg:text-base px-4 py-3 font-sans ">
                                    7d %
                                </th>
                                <th scope="col" class="text-xs lg:text-base px-4 py-3  ">
                                    ارزش بازار
                                </th>

                                <th scope="col" class="text-xs lg:text-base px-4 py-3 font-sans ">
                                    Volume(24h)
                                </th>

                                <th scope="col" class="text-xs lg:text-base px-4 py-3">
                                    نمودار
                                </th>
                                <th scope="col" class="text-xs lg:text-base flex justify-end px-4 py-3 ">
                                    توضیحات بیشتر
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($coins as $coin)
                                <tr class=" border-b border-gray-600 dark:border-gray-400 items-center">

                                    <td class="flex gap-1 lg:gap-2 items-center lg:px-4 py-4 mt-2 text-gray-200 text-base">
                                        <a href="">
                                            <img class="rounded-full w-7 lg:w-9 "
                                                src="{{ asset(env('METAVERS_IMAGES_UPLOAD_PATH') . $coin->icon) }}"
                                                alt="">
                                        </a>
                                        <p class="text-xs lg:text-base text-gray-200 dark:text-gray-700">{{ $coin->name }}</p>
                                    </td>

                                    <td class="px-4 py-4 text-green-400">
                                        {{ number_format($coin->quote->USD->price, 2) }}
                                    </td>
                                    <td class="px-4 py-4 text-gray-300 dark:text-gray-700 ">
                                        {{ number_format($coin->quote->USD->percent_change_1h, 2) }}
                                    </td>
                                    <td class="px-4 py-4 text-gray-300 dark:text-gray-700">
                                        {{ number_format($coin->quote->USD->percent_change_24h, 2) }}
                                    </td>
                                    <td class="px-4 py-4 text-gray-300 dark:text-gray-700">
                                        {{ number_format($coin->quote->USD->percent_change_7d, 2) }}
                                    </td>
                                    <th class="px-4 py-4 text-gray-300 dark:text-gray-700">
                                        {{ number_format($coin->quote->USD->market_cap, 3) }}
                                    </th>

                                    <td class="px-4 py-4 text-gray-300 dark:text-gray-700">
                                        {{ number_format($coin->quote->USD->volume_24h, 3) }}
                                    </td>
                                    <td class="px-4 py-4">
                                        <img src="/image/chart.png" alt="">
                                    </td>
                                    <td class="flex justify-end px-4 py-4 text-center">
                                        <a href="{{ route('home.metavers.show', ['metavers' => $coin->id, 'slug' => $coin->slug]) }}"
                                            class="flex gap-2 text-white bg-button1 py-2 px-4 rounded-full  text-xs items-center">
                                            مشاهده بیشتر
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
