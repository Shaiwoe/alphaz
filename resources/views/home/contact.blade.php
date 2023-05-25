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



    <div class="p-4 lg:p-8 sm:w-full lg:w-10/12 xl:w-10/12 xl2:w-9/12 mx-auto text-white z-50 ">
        <div class=" flex flex-col lg:flex-row mt-28 lg:mt-30">
            <div class="flex-1">

                <div class="w-full xl:w-4/6  grid grid-cols-2 gap-5 md:gap-7 lg:gap-10 z-50">
                    <a  id="coinBox" href="https://www.instagram.com/alpharency/" class="flex flex-col gap-3 justify-center items-center py-10 bg-coin1 dark:bg-purple1">
                        <img id="" class="p-2 rounded-md w-20 h-20" src="image/svg/instagram.svg" alt="">
                        <p>Instagram</p>
                    </a>

                    <a id="coinBox" href="https://t.me/alpharency" class="flex flex-col gap-3 justify-center items-center py-10 bg-coin1 dark:bg-purple1">
                        <img id="" class="p-2 rounded-md w-20 h-20" src="image/svg/send.svg" alt="">
                        <p>Telegram</p>
                    </a>

                    <a id="coinBox" href="https://www.youtube.com/@alpharency" class="flex flex-col gap-3 justify-center items-center py-10 bg-coin1 dark:bg-purple1">
                        <img id="" class="p-2 rounded-md w-20 h-20" src="image/svg/youtube.svg" alt="">
                        <p>Twitter</p>
                    </a>

                    <a id="coinBox" href="https://twitter.com/alpharency" class="flex flex-col gap-3 justify-center items-center py-10 bg-coin1 dark:bg-purple1">
                        <img id="" class="p-2 rounded-md w-20 h-20" src="image/svg/twitter.svg" alt="">
                        <p>Yourube</p>
                    </a>
                </div>
            </div>
            <div class="flex-1 text-center z-30 relative self-center" style="text-align: -webkit-center;">
                <p class="text-center text-2xl z-30 xl:absolute top-0 left-0 my-8 xl:my-0">شبکه های اجتماعی ما را هم دنبال کنید</p>
                <img src="image/svg/contact-svg.svg" class="w-8/12" alt="">
            </div>
        </div>



    </div>





    <div class="sm:w-full lg:w-10/12 xl:w-10/12 xl2:w-9/12 flex mx-auto text-white dark:text-gray-700 z-30 p-4 lg:p-8">
        <form class="flex flex-col bg-coin1 dark:bg-white  dark:shadow-2xl w-full gap-12 p-4 lg:p-12 z-30" id="coinBox" action="">
            <p class="lg:text-2xl">برای ارتباط با ما پیام دهید</p>
            <div class="flex flex-col w-full gap-12 z-50">
                <div class="flex flex-col lg:flex-row w-full gap-12 z-50 text-white dark:text-gray-700">
                    <div class="flex flex-col w-full z-50">
                        <label class="text-sm lg:text-base" for="">نام و نام خانوادگی</label>
                        <input id="contact-input" class="mt-2 contact-input dark:bg-icon-light" type="text" name="" id="">

                        <label class="mt-9 text-sm lg:text-base" for="">آدرس ایمیل</label>
                        <input id="contact-input" class="mt-2 contact-input dark:bg-icon-light" type="text" name="" id="">

                        <label class="mt-9 text-sm lg:text-base" for="">عنوان تیکت</label>
                        <input id="contact-input" class="mt-2 contact-input dark:bg-icon-light" type="text" name="" id="">
                    </div>

                    <div class="flex flex-col w-full">
                        <label for="">متن تیکت</label>
                        <textarea id="contact-input" class="mt-4 contact-input dark:bg-icon-light" name="" id="" cols="30" rows="11"></textarea>
                    </div>
                </div>

                <button id="contact-button" class="p-2" type="submit">
                    ارسال پیام
                </button>
            </div>
        </form>
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
