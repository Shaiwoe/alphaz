<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    <title>Alpharency</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-screen flex justify-center items-center  bg-dark2">
    <div class="flex flex-col w-full text-gray-200">
        <div class="flex justify-center">
            <image class="w-1/3" src="/image/404.svg" alt="">
        </div>
        <div class="flex flex-col w-full justify-center items-center gap-4">
            <p class="text-4xl">صفحه مورد نظر در دسترس نمی‌باشد</p>
            <p>متاسفانه خطایی هنگام انتقال درخواست شما رخ داده است</p>
            {{-- <a href="{{ redirect()->back() }}" class="bg-yellow-400 py-2 px-8 rounded-lg text-center text-black mt-4">بازگشت</a> --}}
        </div>
    </div>
</body>
</html>
