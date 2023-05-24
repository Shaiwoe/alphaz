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
    <title>ایجاد پادکست</title>
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
        <div class="flex flex-col w-full lg:w-10/12 mt-28 h-full  p-4 min-h-screen">
            <!-- main  -->
            <div class="flex flex-col space-y-12 w-full px-4 mt-8">
                <div class="flex justify-between items-center">
                    <p class="text-xl  text-white dark:text-gray-600">ایجاد پادکست جدید</p>
                </div>
                {{-- form create article  --}}

                <form action="{{ route('padcasts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid lg:grid-cols-4 w-full gap-6  mb-6">

                        <div class="flex flex-col w-full">
                            <label for="title" class="block mb-2 text-sm font-medium text-white dark:text-gray-600">عنوان</label>
                            <input type="text" name="title" id="title"
                                class="flex  p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="catepory_id" class="block mb-2 text-sm font-medium text-white dark:text-gray-600 ">نوع دسته
                                بندی</label>
                            <select id="catepory_id" name="catepory_id"
                                class="flex  p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-gray-400 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                                @foreach ($cateporys as $catepory)
                                    <option value="{{ $catepory->id }}">{{ $catepory->title }} از
                                        {{ $catepory->parent->title }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('catepory_id')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="type" class="block mb-2 text-sm font-medium text-white dark:text-gray-600">نوع</label>
                            <input type="text" name="type" id="type"
                                class="flex  p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-gray-400 focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('type')" class="mt-2" />
                        </div>


                        <div class="flex flex-col w-full">
                            <label for="image" class="block mb-2 text-sm font-medium text-white dark:text-gray-600">انتخاب
                                عکس</label>
                            <input type="file" name="image" id="banner_image"
                                class="flex  p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-gray-400 focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="voice" class="block mb-2 text-sm font-medium text-white dark:text-gray-600">انتخاب
                                پادکست</label>
                            <input type="file" name="voice" id="voice"
                                class="flex  p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-gray-400 focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('voice')" class="mt-2" />
                        </div>


                        <div class="flex flex-col w-full">
                            <label for="time" class="block mb-2 text-sm font-medium text-white dark:text-gray-600">زمان</label>
                            <input type="text" name="time" id="time"
                                class="flex  p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-gray-400 focus:ring-yellow-400 focus:border-yellow-400"
                                placeholder="00:00:00">
                            <x-input-error :messages="$errors->get('time')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="tags" class="block mb-2 text-sm font-medium text-white dark:text-gray-600">تگ</label>
                            <input type="text" name="tags" id="tags"
                                class="flex  p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-gray-400 focus:ring-yellow-400 focus:border-yellow-400"
                                placeholder="تگ ها را , از هم جدا کنید">
                            <x-input-error :messages="$errors->get('tags')" class="mt-2" />
                        </div>



                        <div class="flex flex-col w-full">
                            <label for="is_active" class="block mb-2 text-sm font-medium text-white dark:text-gray-600">وضعیت</label>
                            <select id="is_active" id="is_active" name="is_active"
                                class="flex  p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-gray-400 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                                <option value="1">انتشار</option>
                                <option value="0">پیش نویس</option>
                            </select>
                        </div>

                    </div>

                    <div class="flex flex-col gap-4 w-full">
                        <div class="flex flex-col w-full">
                            <label for="description" class="block mb-2 text-sm font-medium text-white dark:text-gray-600">توضیح
                                کوتاه</label>
                            <textarea rows="5" type="text" name="description" id="description"
                                class="flex  p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 focus:ring-yellow-400 focus:border-yellow-400"
                                placeholder="توضیحات پادکست را وارد کنید" value="{{ old('description') }}"></textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="body" class="block mb-2 text-sm font-medium text-white dark:text-gray-600">متن</label>
                            <textarea rows="8" type="text" name="body" id="body"
                                class="flex  p-2.5 w-full rounded-lg bg-dark2 focus:ring-yellow-400 focus:border-yellow-400"
                                placeholder="متن پادکست را وارد کنید" value="{{ old('body') }}"></textarea>
                            <x-input-error :messages="$errors->get('body')" class="mt-2" />
                        </div>
                    </div>


                    <div class="flex gap-4 mt-14">
                        <button type="submit"
                            class="bg-green-500 hover:bg-green-600 w-full lg:w-1/12 text-white p-2 rounded-lg">ثبت</button>
                        <a href="{{ route('padcasts.index') }}"
                            class="bg-red-500 text-center hover:bg-red-600 w-full lg:w-1/12 text-white p-2 rounded-lg">بازگشت</a>
                    </div>


                </form>


            </div>

        </div>
    </div>
    @include('sweetalert::alert')

    <script src="//cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('body', {
            language: 'fa',
            content: 'fa',
        });
    </script>

</body>

</html>
