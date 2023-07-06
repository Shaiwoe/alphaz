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
            <div class="flex flex-col space-y-8 w-full items-center justify-center">
                <div class=" flex flex-col lg:flex-row gap-4 w-10/12 items-center justify-center">
                    <div class="flex flex-col space-y-10 items-center justify-center">
                        <img id="" class="logo_dark_el hidden w-full lg:w-5/12" src="/image/logo-white.png"
                            alt="" />
                        <img id="" class="logo_light_el hidden w-full lg:w-5/12" src="/image/logo-dark.png"
                            alt="" />

                        <div class="flex gap-20">
                            <div
                                class="flex lg:flex-col lg:text-xl justify-center items-center text-white dark:text-gray-600 space-y-4 text-sm">
                                {!! $googleQR !!}
                                <p class="bg-slate-900 text-white p-2 rounded-lg font-medium">{{ $googleSecretKey }}</p>
                            </div>

                            <div class="flex flex-col space-y-10">
                                <p class="text-white dark:text-gray-700 text-3xl">راه اندازی احرازهویت دو مرحله‌ای</p>

                                <div class="flex flex-col space-y-4 ">
                                    <p class="text-white dark:text-gray-700 text-lg">برنامه احرازهویت دو مرحله‌ای دلخواه
                                        خود را دانلود کنید.</p>
                                    <p class="text-gray-400 dark:text-gray-500">اگر در حال حاضر یک اپلیکیشن احرازهویت دو
                                        مرحله‌ای ندارید, ما به شما <a
                                            href="https://support.google.com/accounts/answer/1066447"
                                            class="text-button2">Google Authenticator</a> را پیشنهاد می‌دهیم.</p>
                                </div>


                                <div class="flex flex-col space-y-4">
                                    <p class="text-white dark:text-gray-700 text-lg">با استفاده از اپلیکیشن خود کد QR
                                        مورد نظر را اسکن کنید.</p>
                                    <p class="text-gray-400 dark:text-gray-500">اگر قابلیت اسکن کردن کد QR را ندارید
                                        می‌توانید از کد 2FA زیر کد QR استفاده کنید.</p>
                                </div>


                                <form method="POST" action="{{ route('profile.accept') }} class="flex gap-4">
                                    @csrf

                                    <button type="submit"
                                        class="bg-button2 hover:bg-button1 p-2 rounded-lg text-white w-1/2 text-center">
                                        تکمیل راه اندازی
                                    </button>
                                </form>

                                <a href="{{ route('profile.edit') }}"
                                    class="bg-red hover:bg-red-o p-2 rounded-lg text-white w-1/2 text-center">انصراف
                                    راه اندازی</a>

                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

</body>

</html>
