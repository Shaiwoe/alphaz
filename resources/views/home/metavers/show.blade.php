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




    <div class="container mx-auto p-4 z-40">
        <div
            class="flex flex-col lg:flex-row w-full mt-32 lg:mt-44 z-40 relative text-white justify-between items-center space-y-10">

            <div id="coinBox" class="bg-coin1 w-full h-full flex justify-between p-4 overflow-hidden">

                <img class="absolute opacity-20 -left-24 -top-10 overflow-hidden w-4/12"
                    src="{{ asset(env('METAVERS_IMAGES_UPLOAD_PATH') . $metavers->icon) }}" alt="">

                <div class="flex flex-col w-full justify-center items-center space-y-8">
                    <a href="{{ route('home.prices.index') }}" class="bg-button1 p-4 rounded-full">بازگشت به لیست بازار کریپتو</a>

                    <p class="text-2xl text-white dark:text-gray-600">قیمت لحظه ای {{ $metavers->name }}</p>

                    <div id="coinBox" class="bg-coin1 p-4 flex flex-col w-full items-center justify-center space-y-6">
                        <p class="text-4xl text-white dark:text-gray-600"><span class="text-lg">$</span>
                            {{ number_format($price->quote->USD->price, 2) }} </p>

                        <img class="w-9/12 p-4" src="/image/chart.png" alt="">
                    </div>
                </div>


                <div class="flex flex-col w-full justify-center items-center space-y-10">
                    <div id="coinBox" class="bg-coin1 p-4 flex flex-col w-44 justify-center items-center space-y-4">
                        <p class="text-white dark:text-gray-600">تغییرات ساعتی</p>
                        <p class="bg-button1 p-1 w-24 text-center rounded-lg">
                            {{ number_format($price->quote->USD->percent_change_1h, 2) }}</p>
                    </div>

                    <div id="coinBox" class="bg-coin1 p-4 flex flex-col w-44 justify-center items-center space-y-4">
                        <p class="text-white dark:text-gray-600">تغییرات روزانه</p>
                        <p class="bg-button1 p-1 w-24 text-center rounded-lg">
                            {{ number_format($price->quote->USD->percent_change_24h, 2) }}</p>
                    </div>

                    <div id="coinBox" class="bg-coin1 p-4 flex flex-col w-44 justify-center items-center space-y-4">
                        <p class="text-white dark:text-gray-600">تغییرات هفتگی</p>
                        <p class="bg-button1 p-1 w-24 text-center rounded-lg">
                            {{ number_format($price->quote->USD->percent_change_7d, 2) }}</p>
                    </div>
                </div>


                <div class="flex flex-col w-full justify-center items-center space-y-4 relative">

                    <div class="flex flex-col gap-8 items-center">
                        <div class="flex gap-2 items-center">
                            <p class="text-2xl">رمز ارز</p>
                            <p class="text-2xl">{{ $metavers->name }}</p>
                            <img class="w-20" src="{{ asset(env('METAVERS_IMAGES_UPLOAD_PATH') . $metavers->icon) }}"
                                alt="">
                        </div>


                        <div class="w-full text-center text-xl bg-button1 p-2 rounded-full">
                            <p>{{ number_format($price->quote->USD->price, 2) }}</p>
                        </div>

                        <div class="flex gap-2 bg-button1 w-full justify-center items-center p-2 rounded-full">


                            <p class="mt-2">{{ $metavers->site }}</p>


                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                            </svg>
                        </div>
                    </div>
                </div>


            </div>


        </div>


        <div id="coinBox" class="bg-coin1 flex flex-col mt-24 p-8 justify-center text-white dark:text-gray-600">
            <p>{{ $metavers->body }}</p>
        </div>

    </div>






    <!-- footer  -->
    @include('components/footer')



    @include('sweetalert::alert')

</body>



</html>
