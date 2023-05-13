<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>پنل کاربری</title>
</head>
<body class="bg-dark3 text-gray-200">
        <div class="flex justify-between overflow-x-auto relative space-x-4">
            <!-- nav left -->
            @include('components/nav')
            <!-- main -->
            <div class="flex flex-col w-full h-screen overflow-y-auto p-4">
                <!-- nav header -->
                @include('components/navHeader')
                <!-- main  -->
                <div class="flex flex-col h-full w-full mt-8 space-y-16">
                    <div class="grid lg:grid-cols-4 w-full gap-10">


                        <div class="flex flex-col w-full relative shadow-lg shadow-orange-400 rounded-lg bg-dark2 p-4 justify-center items-center space-y-4 text-center">
                            <div class="absolute">
                                <image src="/image/backdrop.png" alt="">
                            </div>
                            <image class="z-10" src="/image/bitcoin.png" alt="">
                            <div class="flex flex-col z-10">
                                <p class="text-2xl">BTC</p>
                                <p class="font-medium text-orange-400">Bitcoin</p>
                            </div>
                            <div class="z-10">
                                <p class="text-green-400 text-lg">23,253</p>
                            </div>
                        </div>

                        <div class="flex flex-col w-full relative shadow-lg shadow-indigo-400 rounded-lg bg-dark2 p-4 justify-center items-center space-y-4 text-center">
                            <div class="absolute">
                                <image src="/image/backdrop.png" alt="">
                            </div>
                            <image class="z-10" src="/image/ethereum.png" alt="">
                            <div class="flex flex-col z-10">
                                <p class="text-2xl">ETH</p>
                                <p class="font-medium text-indigo-400">Ethereum</p>
                            </div>
                            <div class="z-10">
                                <p class="text-green-400 text-lg">1,622</p>
                            </div>
                        </div>

                        <div class="flex flex-col w-full relative shadow-lg shadow-yellow-400 rounded-lg bg-dark2 p-4 justify-center items-center space-y-4 text-center">
                            <div class="absolute">
                                <image src="/image/backdrop.png" alt="">
                            </div>
                            <image class="z-10" src="/image/binance.png" alt="">
                            <div class="flex flex-col z-10">
                                <p class="text-2xl">BNB</p>
                                <p class="font-medium text-yellow-400">Binance Coin</p>
                            </div>
                            <div class="z-10">
                                <p class="text-green-400 text-lg">301.84</p>
                            </div>
                        </div>

                        <div class="flex flex-col w-full relative shadow-lg shadow-blue-400 rounded-lg bg-dark2 p-4 justify-center items-center space-y-4 text-center">
                            <div class="absolute">
                                <image src="/image/backdrop.png" alt="">
                            </div>
                            <image class="z-10" src="/image/xrp.png" alt="">
                            <div class="flex flex-col z-10">
                                <p class="text-2xl">XRP</p>
                                <p class="font-medium text-blue-400">Ripple</p>
                            </div>
                            <div class="z-10">
                                <p class="text-green-400 text-lg">0.3745</p>
                            </div>
                        </div>
                    </div>



                    <div class="flex flex-col lg:flex-row w-full gap-8">
                        <div class="flex flex-col w-full rounded-md p-4 bg-dark2 space-y-6">
                            <p>آخرین ورود ها</p>
                            <hr>
                            <div class="flex flex-col gap-2 justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                  </svg>

                                <p class="text-sm">هیچ ورودی ثبت نشده است</p>
                            </div>
                        </div>

                        <div class="flex flex-col w-full rounded-md p-4 bg-dark2 space-y-6">
                            <p>آخرین اطاعیه ها</p>
                            <hr>
                            <div class="flex flex-col gap-2 justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                                  </svg>
                                <p class="text-sm">هیچ اطاعیه ثبت نشده است</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full flex flex-col bg-yellow-400 rounded-lg p-4">
                        <p class="text-center text-gray-600 text-lg">
                            کاربر گرامی به اطلاع شما میرساند مجموعه آلفارنسی در حالت بروزرسانی وبسایت میباشد و به زودی بخش عضویت ویژه فعال خواهد شد
                            با تشکر از صبر و شکیبایی شما
                        </p>
                    </div>

                </div>

            </div>
        </div>

</body>
</html>

