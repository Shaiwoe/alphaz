<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>ویرایش {{ $webinar->title }}</title>
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
        <div class="flex flex-col w-full lg:w-10/12 mt-28 h-full  p-4 ">
            <!-- main  -->
            <div class="flex flex-col space-y-12 w-full px-4 mt-8">
                <div class="flex justify-between items-center">
                    <p class="text-xl text-white dark:text-gray-600">ویرایش {{ $webinar->title }}</p>
                </div>
                {{-- form create article  --}}

                <form action="{{ route('webinars.update', ['webinar' => $webinar->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="grid lg:grid-cols-3 w-full gap-6  mb-6">

                        <div class="flex flex-col w-full">
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-white dark:text-gray-600 ">عنوان
                            </label>
                            <input type="text" name="title" id="title" value="{{ $webinar->title }}"
                                class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400 focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="link"
                                class="block mb-2 text-sm font-medium text-white dark:text-gray-600 ">لینک وبینار
                            </label>
                            <input type="text" name="link" id="link" value="{{ $webinar->link }}"
                                class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400 focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('link')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="time"
                                class="block mb-2 text-sm font-medium text-white dark:text-gray-600 ">ساعت وبینار
                            </label>
                            <input type="text" name="time" id="time" value="{{ $webinar->time }}"
                                class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400 focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('time')" class="mt-2" />
                        </div>


                        <div class="flex flex-col w-full">
                            <label for="timer"
                                class="block mb-2 text-sm font-medium text-white dark:text-gray-600 ">تایمر وبینار
                            </label>
                            <input type="text" name="timer" id="timer" value="{{ $webinar->timer }}"
                                class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400 focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('timer')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="date"
                                class="block mb-2 text-sm font-medium text-white dark:text-gray-600 ">تاریخ وبینار
                            </label>
                            <input type="text" name="date" id="date" value="{{ $webinar->date }}"
                                class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400 focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('date')" class="mt-2" />
                        </div>


                        <div class="flex flex-col w-full">
                            <label for="primary_image" class="block mb-2 text-sm font-medium text-white dark:text-gray-600">انتخاب
                                عکس</label>
                            <input name="primary_image" id="primary_image"
                                class="flex  p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 focus:ring-yellow-400 focus:border-yellow-400"
                                type="file">
                            <x-input-error :messages="$errors->get('primary_image')" class="mt-2" />
                        </div>


                        <div class="flex flex-col w-full">
                            <label for="is_active"
                                class="block mb-2 text-sm font-medium text-white dark:text-gray-600">وضعیت</label>
                            <select id="is_active" id="is_active" name="is_active"
                                class="flex  p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-gray-400 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                                <option value="1"
                                    {{ $webinar->getRawOriginal('is_active') == 1 ? 'selected' : '' }}>انتشار</option>
                                <option value="0"
                                    {{ $webinar->getRawOriginal('is_active') == 0 ? 'selected' : '' }}>پیش نمایش
                                </option>
                            </select>
                        </div>

                    </div>





                    <div class="flex gap-4 mt-14">
                        <button type="submit"
                            class="bg-green-500 hover:bg-green-600 w-full lg:w-1/12 text-white p-2 rounded-lg">ثبت</button>
                        <a href="{{ route('webinars.index') }}"
                            class="bg-red-500 text-center hover:bg-red-600 w-full lg:w-1/12 text-white p-2 rounded-lg">بازگشت</a>
                    </div>


                </form>


            </div>

        </div>
    </div>
    @include('sweetalert::alert')
    <script>
        // Show File Name
        $('#image').change(function() {
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).html(fileName);
        });

        $('#images').change(function() {
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        });
    </script>

    <script src="//cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('body', {
            language: 'fa',
            content: 'fa',
        });
    </script>
</body>

</html>
