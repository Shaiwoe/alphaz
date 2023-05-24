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

<body class="bg-indigo-1 dark:bg-white1">


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


    <div class="flex justify-between  relative space-x-4">
        <!-- nav left -->
        @include('components/nav')
        <!-- main -->
        <div class="flex flex-col w-full justify-center items-center lg:w-10/12 gap-10 mt-28 h-full  p-4 ">

            @foreach ($webinars as $webinar)
                <div class="flex flex-col w-10/12 gap-12 bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 p-4" id="coinBox">

                    <div class="flex justify-center items-center">
                        <p class="text-5xl">{{ $webinar->timer }}</p>
                    </div>

                    <div class="flex flex-col gap-10 " >
                        <div>
                            <img class="rounded-t-xl w-full h-full max-h-72"
                                src="{{ asset(env('WEBINARS_IMAGES_UPLOAD_PATH') . $webinar->primary_image) }}"
                                alt="">
                        </div>

                        <div class="flex flex-col space-y-4">
                            <p class="text-3xl text-white dark:text-gray-600">{{ $webinar->title }}</p>

                            <p class="text-white dark:text-gray-600 text-sm">{!! $webinar->body !!}</p>


                            <div class="flex  gap-8 ">

                                <a class="w-44 bg-coin1 text-center rounded-lg p-1" href="">زمان : {{ $webinar->time }}</a>
                                <a class="w-44 bg-coin1 text-center rounded-lg p-1" href="">تاریخ : {{ $webinar->date }}</a>
                                <a class="w-44 bg-button1 text-center rounded-lg p-1" href="">ثبت نام در وبینار</a>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>

</body>

</html>
