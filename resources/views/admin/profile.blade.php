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

<body class="bg-indigo-1 dark:bg-white1 h-[100vh] overflow-hidden">


    {{-- header  --}}
    @include('components/header')

    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute top-0 left-0">
            <img src="/image/tinified/1.png" alt="">
        </div>
    </div>


    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute top-[100%] right-0">
            <img src="/image/tinified/2.png" alt="">
        </div>
    </div>


    <div
        class="flex justify-between dashboard_back dark:bg-white dark:shadow-2xl w-11/12 mx-auto mt-28 h-[85vh] rounded-3xl overflow-hidden">
        <!-- nav left -->
        @include('components/nav')
        <!-- main -->
        <div class="flex flex-col sm:w-full md:w-9/12 lg:w-10/12 h-full m-0 overflow-hidden overflow-y-auto p-4">
            <!-- main  -->
            <div class="flex flex-col space-y-8 w-full items-center">
                <div class=" flex flex-col lg:flex-row gap-4 w-10/12 items-center">
                    <div class="flex flex-col space-y-10">
                        <img id="" class="logo_dark_el hidden w-full lg:w-9/12" src="/image/logo-white.png"
                            alt="" />
                        <img id="" class="logo_light_el hidden w-full lg:w-9/12" src="/image/logo-dark.png"
                            alt="" />

                        <div
                            class="flex lg:flex-col lg:text-5xl text-white dark:text-gray-600 lg:space-y-8 text-sm gap-2">
                            <p>در حال بروزرسانی هستیم</p>
                            <p>منتظر خبرهای خوب باشید</p>
                        </div>
                    </div>

                    <div>
                        <img src="image/soon.svg" alt="">
                    </div>
                </div>


            </div>
        </div>
    </div>

</body>

</html>
