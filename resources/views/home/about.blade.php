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

<body class="bg-indigo-1 dark:bg-white">



    {{-- header  --}}
    @include('components/header')

    @include('components/light')



    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute top-[1%] right-0">
            <img src="image/tinified/5.png" alt="">
        </div>
    </div>

    <div class="w-full flex flex-col-reverse lg:flex-row container mx-auto relative text-white dark:text-gray-700 p-8">
        <div class="w-full flex flex-col z-30 space-y-6 mt-16 lg:mt-72 bg-coin1 dark:bg-white p-8 self-center  dark:shadow-2xl"
            id="coinBox">
            <p class="text-center lg:text-3xl mt-8">کریپتو کارنسی رو با آلفارنسی اصولی یاد بگیر</p>
            <p class="leading-10 text-xs lg:text-lg text-justify">
                مجموعه آلفارنسی از سال ۲۰۱۹ فعالیت خودش را همراه با رزومه‌ای درخشان (سودهای 400 الی 1300 درصدی ) و تیم
                تحقیقاتی پروژه های IEO های پر سود ، شروع کرد . با شروع اپیدمی کرونا مجموعه آلفارنسی با برگزاری بیش از
                600 وبینار تلاش کرد که همواره مسیر آموزش دنیایی کریپتوکارنسی را برای شما عزیزان هموار سازد .
                از ابتدای سال 2021، آلفارنسی با نماد آلفا یعنی برترین در صنعتی کریپتو کارنسی(Alpha + currency ) فعالیت
                جهانی خودش را آغاز کرد و توانست با برگزاری صدها وبینار، سمینار آموزشی و تولید مستمر محتواهای کاربردی، در
                خاورمیانه نظر کاربران را جلب کند و از ژوئن 2022 به صورت تخصصی وارد حوزه‌ی متاورس و NFT شد .
                خرسندیم که توانستیم در کنار شما عزیزان رکوردهایی در خصوص وبینارهای 10 هزار نفره را نیز ثبت کنیم .
                و اما امروزه آلفارنسی سعی دارد با تولید محتوای آموزشی مفید و کاربردی در بسترهای وب سایت ، کانال تلگرام و
                صفحه اینستاگرام و البته به زودی اپلیکیشن چند منظوره آلفا با شما عزیزان را در حوزه‌های متاورس و
                کریپتوکارنسی همراهی کند .
            </p>
        </div>

        <div class="relative w-full flex justify-end z-40 mt-16 lg:mt-64">
            <img class="w-full lg:w-7/12" src="image/svg/about-svg.svg" alt="">
            <img id=""
                class="logo_dark_el hidden absolute w-6/12 top-[10%] left-[30%] animate-bounce duration-500"
                src="/image/logo-white.png" alt="">
            <img id=""
                class="logo_light_el hidden absolute w-6/12 top-[10%] left-[30%] animate-bounce duration-500"
                src="/image/logo-dark.png" alt="">
        </div>


    </div>






    <div class="flex flex-col justify-center items-center container mx-auto text-white space-y-8 p-8">
        <div class="lg:text-2xl z-50 mt-15 lg:mt-36 dark:text-black">
            <p>محتوا هایی که در آلفارنسی مشاهده میکنید</p>
        </div>



        <div class="w-full lg:w-10/12 gap-16 grid lg:grid-cols-2">

            <a href="{{ route('home.books.index') }}" id="coinBox"
                class="bg-coin1 dark:bg-purple1 w-full flex flex-col justify-center items-center p-8 space-y-4 z-40">
                <img class="w-20" src="image/book.svg" alt="">
                <p>کتاب ها</p>
                <p class="text-justify">
                    مجموعه آلفارنسی تصمیم دارد تا با معرفی و ترجمه کتاب های مطرح در حوزه ارزدیجتال و متاورس مسیر
                    علاقه مندان به کتاب را هموار سازد . همچنین در نظر دارند با تولید و تألیف کتاب‌های اختصاصی و کاربردی
                    در حوزه‌های مربوطه کنار شما عزیزان باشد تا از مطالعه‌ی دسته‌بندی شده لذت ببرید.
                </p>
            </a>

            <a href="{{ route('home.articles.index') }}" id="coinBox"
                class="bg-coin1 dark:bg-purple1 w-full flex flex-col justify-center items-center p-8 space-y-4 z-40">
                <img class="w-20" src="image/svg/article-icon.svg" alt="">
                <p>مقاله ها</p>
                <p class="text-justify">
                    اگر در حوزه کریپتوکارنسی و متاورس حرفه‌ای هستید و یا تازه به این حوزه‌ها ورود کردین، تیم محتوای
                    آلفارنسی
                    شبانه روز در تلاش هستند تا با تولیدمحتوای مبتدی ، پیشرفته ، حرفه‌ای و کاربردی ، مطالب مفید و آموزنده
                    موجود در این حوزه را در قالب مقالات در اختیار شما قرار بدهند تا به صورت کاملا دسته بندی شده محتوای
                    مورد نظر خود را پیدا کنید .
                    همچنین می توانید تمامی اخبار به روز را در بخش اخبار در منوی صفحه اصلی دنبال کنید .
                </p>
            </a>

            <a href="{{ route('home.padcasts.index') }}" id="coinBox"
                class="bg-coin1 dark:bg-purple1 w-full flex flex-col justify-center items-center p-8 space-y-4 z-40">
                <img class="w-20" src="image/svg/padcast-icon.svg" alt="">
                <p>پادکست ها</p>
                <p class="text-justify">
                    اگر طرفدار گوش دادن به پادکست هستین ، پادکست‌های مجموعه ما رو از دست ندین .
                    در تلاشیم تا به صورت مستمر اخبار و آموزش های حوزه کریپتوکارنسی و دنیای متاورس و NFT را با بالاترین
                    کیفیت ممکن به گوش شما عزیزان برسانیم تا در زمانی که وقت مطالعه ندارید از آموزش و دنبال کردن اخبار
                    نیز لذت ببرید .
                </p>
            </a>

            <a href="{{ route('home.videos.index') }}" id="coinBox"
                class="bg-coin1 dark:bg-purple1 w-full flex flex-col justify-center items-center p-8 space-y-4 z-40">
                <img class="w-20" src="image/svg/video-icon.svg" alt="">
                <p>ویدئو ها</p>
                <p class="text-justify">
                    امروزه محتوای ویدئویی طرفدار خودش را دارد . مجموعه ما در 2 سال اخیر سعی داشت تا با تولید ویدئوهای
                    آموزشی و کاربردی حرفه‌ای فرآیند یادگیری را برای شما عزیزان تسریع کند و نظر علاقه مندان این حوزه را
                    جلب کند.
                    همواره در تلاشیم تا با تولید ویدئوهای با کیفیت و مفید در کنار شما عزیزان باشیم .
                </p>
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
