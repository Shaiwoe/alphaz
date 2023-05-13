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
        <div class="flex flex-col lg:flex-row w-full mt-32 lg:mt-44 z-40 relative text-white justify-between items-center space-y-10">

            <div id="coinBox" class="bg-coin1 w-full h-full flex justify-between p-4">

                <div class="flex flex-col w-full justify-center items-center space-y-8">
                    <p class="bg-button1 p-4 rounded-full">بازگشت به لیست بازار کریپتو</p>

                    <p class="text-2xl">قیمت لحظه ای {{  $market->name  }}</p>

                    <div  id="coinBox" class="bg-coin1 p-4 flex flex-col w-full items-center justify-center space-y-6">
                        {{-- <p class="text-4xl">{{ number_format($price->data->USD[0]->quote->USD->price, 2) }}</p> --}}

                        <img class="w-9/12 p-4" src="/image/chart.png" alt="">
                    </div>
                </div>


                <div class="flex flex-col w-full justify-center items-center space-y-10">
                    <div id="coinBox" class="bg-coin1 p-4 flex flex-col w-44 justify-center items-center">
                        <p>تغییرات ساعتی</p>
                        <p></p>
                    </div>

                    <div id="coinBox" class="bg-coin1 p-4 flex flex-col w-44 justify-center items-center">
                        <p>تغییرات روزانه</p>
                        <p></p>
                    </div>

                    <div id="coinBox" class="bg-coin1 p-4 flex flex-col w-44 justify-center items-center">
                        <p>تغییرات هفتگی</p>
                        <p></p>
                    </div>
                </div>


                <div class="flex flex-col w-full justify-center items-center space-y-4 relative">
                    <img class="absolute opacity-20 left-1 w-11/12" src="{{  asset(env('MARKET_IMAGES_UPLOAD_PATH') . $market->icon)  }}" alt="">
                    <div class="flex flex-col gap-8 items-center">
                        <div class="flex gap-2 items-center">
                            <p class="text-2xl">رمز ارز</p>
                            <p class="text-2xl">{{ $market->name }}</p>
                            <img class="w-20" src="{{  asset(env('MARKET_IMAGES_UPLOAD_PATH') . $market->icon)  }}" alt="">
                        </div>


                        <div>
                            <p></p>
                        </div>

                        <div class="flex flex-col gap-2 bg-button1 w-full justify-center items-center p-2 rounded-full">
                            <a href="{{ url('https://google.com') }}">آدرس وبسایت</a>
                            <p>{{ $market->site }}</p>

                        </div>
                    </div>
                </div>


            </div>


        </div>

    </div>






    <!-- footer  -->
    @include('components/footer')



    @include('sweetalert::alert')

</body>



</html>
