<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/app.css')
    <title>ساخت متاورس</title>
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

    <div class="flex justify-between overflow-x-auto relative space-x-4">
        <!-- nav  -->
        @include('components/nav')
        <!-- main -->
        <div class="flex flex-col w-full lg:w-10/12  h-full  p-4 mt-24 min-h-screen">
                <div class="flex justify-between items-center">
                    <p class="text-xl">ایجاد متاورس جدید</p>
                </div>
                {{-- form create article  --}}

                <form action="{{ route('metavers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid lg:grid-cols-4 w-full gap-6  mb-6 mt-8">

                        <div class="flex flex-col w-full">
                            <label for="icon" class="block mb-2 text-sm font-medium text-white dark:text-gray-600">انتخاب
                                آیکون</label>
                            <input name="icon" id="market_icon"
                                class="flex  p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 focus:ring-yellow-400 focus:border-yellow-400"
                                type="file">
                            <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="name" class="block mb-2 text-sm font-medium text-white dark:text-gray-600 ">عنوان
                                رمز ارز</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="name" class="block mb-2 text-sm font-medium text-white dark:text-gray-600">
                                لینک ارز</label>
                            <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                                class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="symbol" class="block mb-2 text-sm font-medium text-white dark:text-gray-600">
                                نماد</label>
                            <input type="text" name="symbol" id="symbol" value="{{ old('symbol') }}"
                                class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('symbol')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="site" class="block mb-2 text-sm font-medium text-white dark:text-gray-600 ">
                                آدرس سایت</label>
                            <input type="text" name="site" id="site" value="{{ old('site') }}"
                                class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('site')" class="mt-2" />
                        </div>







                        <div class="flex flex-col w-full">
                            <label for="is_active" class="block mb-2 text-sm font-medium text-white dark:text-gray-600">وضعیت</label>
                            <select id="is_active" id="is_active" name="is_active"
                                class="flex  p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                                <option value="1">انتشار</option>
                                <option value="0">پیش نویس</option>
                            </select>
                        </div>


                    </div>

                    <div class="flex flex-col w-full mt-12">
                        <label for="chart" class="block mb-2 text-sm font-medium text-white dark:text-gray-600 ">چارت</label>
                        <input type="text" name="chart" id="chart" value="{{ old('chart') }}"
                            class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400">
                        <x-input-error :messages="$errors->get('chart')" class="mt-2" />
                    </div>

                    <div class="flex flex-col w-full mt-12">
                        <label for="body" class="block mb-2 text-sm font-medium text-white dark:text-gray-600 ">متن</label>
                        <input type="text" name="body" id="body" value="{{ old('body') }}"
                            class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400 focus:ring-yellow-400 focus:border-yellow-400">
                        <x-input-error :messages="$errors->get('body')" class="mt-2" />
                    </div>


                    <div class="flex gap-4 mt-14">
                        <button type="submit"
                            class="bg-green-400 hover:bg-green-500 w-full lg:w-1/12 text-white p-2 rounded-lg">ثبت</button>
                        <a href="{{ route('markets.index') }}"
                            class="bg-red-500 text-center hover:bg-red-600 w-full lg:w-1/12 text-white p-2 rounded-lg">بازگشت</a>
                    </div>


                </form>


            </div>

        </div>
    </div>
    @include('sweetalert::alert')
    <script>
        // Show File Name
        $('#market_icon').change(function() {
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).html(fileName);
        });
    </script>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('body', {
            filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
            language: 'fa',
            content: 'fa',
        });
    </script>


</body>

</html>
