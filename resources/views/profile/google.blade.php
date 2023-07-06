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
                            <div id="myInput"
                                class="flex lg:flex-col lg:text-xl justify-center items-center text-white dark:text-gray-600 space-y-4 text-sm">
                                {!! $googleQR !!}

                                <button onclick="myFunction()"
                                    class="flex gap-4 bg-slate-900 text-white px-8 py-2 rounded-lg font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
                                    </svg>

                                    {{ $googleSecretKey }}
                                </button>

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


                                <p class="bg-yellow-400 text-gray-400 dark:text-gray-500">
                                    لطفا بعد از فعال سازی در اپلیکیشن تکمیل راه اندازی انجام دهید
                                </p>




                                <div class="flex flex-col gap-4">
                                    <form method="POST" action="{{ route('profile.accept') }}">
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
    </div>


    <script>
        function myFunction() {
            // Get the text field
            var copyText = document.getElementById("myInput");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>

</body>

</html>
