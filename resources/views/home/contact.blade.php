<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Alpharency</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-indigo-1 dark:bg-white1">



    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute top-0 left-0">
            <img src="image/tinified/1.png" alt="">
        </div>
    </div>


    {{-- header  --}}
    @include('components/header')

    {{-- menu  right  --}}
    {{-- @include('components/menu-right') --}}

    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute top-[100%] right-0">
            <img src="image/tinified/2.png" alt="">
        </div>
    </div>

    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute top-[100%] left-0">
            <img src="image/tinified/3.png" alt="">
        </div>
    </div>



    <div class="w-full container flex mx-auto text-white dark:text-gray-700 z-30 p-4">
        <form class="flex flex-col bg-coin1 dark:bg-white w-full gap-12 p-4 lg:p-12 z-30 mt-28 lg:mt-56" id="coinBox" action="">
            <p class="lg:text-2xl">برای ارتباط با ما پیام دهید</p>
            <div class="flex flex-col w-full gap-12 z-50">
                <div class="flex flex-col lg:flex-row w-full gap-12 z-50 text-white dark:text-gray-700">
                    <div class="flex flex-col w-full z-50">
                        <label class="text-sm lg:text-base" for="">نام و نام خانوادگی</label>
                        <input id="contact-input" class="mt-2" type="text" name="" id="">

                        <label class="mt-9 text-sm lg:text-base" for="">آدرس ایمیل</label>
                        <input id="contact-input" class="mt-2" type="text" name="" id="">

                        <label class="mt-9 text-sm lg:text-base" for="">عنوان تیکت</label>
                        <input id="contact-input" class="mt-2" type="text" name="" id="">
                    </div>

                    <div class="flex flex-col w-full">
                        <label for="">متن تیکت</label>
                        <textarea id="contact-input" class="mt-4" name="" id="" cols="30" rows="11"></textarea>
                    </div>
                </div>

                <button id="contact-button" class="p-2" type="submit">
                    ارسال پیام
                </button>
            </div>
        </form>
    </div>


    <div class="flex flex-col container mx-auto p-4 lg:p-8 text-white dark:text-gray-700 z-50">
        <p class="text-center lg:text-2xl z-30 mt-12">شبکه های اجتماعی ما را هم دنبال کنید</p>
        <div id="coinBox" class="grid grid-cols-2 lg:grid-cols-4 gap-8 z-50 p-8 mt-8 bg-coin1 dark:bg-white ">

            <a href="https://www.instagram.com/alpharency/" class="flex flex-col gap-3 justify-center items-center">
                <img id="contact-icon" class="p-2 rounded-md w-14 h-14" src="image/svg/instagram.svg" alt="">
                <p>instagram</p>
            </a>

            <a href="https://t.me/alpharency" class="flex flex-col gap-3 justify-center items-center">
                <img id="contact-icon" class="p-2 rounded-md w-14 h-14" src="image/svg/send.svg" alt="">
                <p>telegram</p>
            </a>

            <a href="https://www.youtube.com/@alpharency" class="flex flex-col gap-3 justify-center items-center">
                <img id="contact-icon" class="p-2 rounded-md w-14 h-14" src="image/svg/youtube.svg" alt="">
                <p>twitter</p>
            </a>

            <a href="https://twitter.com/alpharency" class="flex flex-col gap-3 justify-center items-center">
                <img id="contact-icon" class="p-2 rounded-md w-14 h-14" src="image/svg/twitter.svg" alt="">
                <p>yourube</p>
            </a>
        </div>
    </div>


    <!-- top footer  -->
    @include('components/top-footer')



    <!-- footer  -->
    @include('components/footer')

    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute bottom-[100%]">
            <img src="image/tinified/6.png" alt="">
        </div>
    </div>

</body>

</html>
