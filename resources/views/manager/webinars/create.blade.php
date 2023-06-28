<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>ایجاد وبینار</title>
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


    <div class="flex justify-between dashboard_back dark:bg-white dark:shadow-2xl w-11/12 mx-auto mt-28 h-[85vh] rounded-3xl overflow-hidden">
        <!-- nav  -->
        @include('components/nav-manager')
        <!-- main -->
        <div class="flex flex-col sm:w-full md:w-9/12 lg:w-10/12 h-full m-0 overflow-hidden overflow-y-auto p-4">

            <!-- main  -->
            <div class="flex flex-col space-y-8 w-full">
                <div class="flex justify-between items-center">
                    <p class="text-xl text-white dark:text-zinc-900">ایجاد وبینار جدید</p>
                </div>
                {{-- form create article  --}}

                <form action="{{ route('webinars.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid lg:grid-cols-3 w-full gap-6  mb-6">

                        <div class="flex flex-col w-full">
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-white dark:text-zinc-900 ">عنوان
                            </label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}"
                                class="block p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 border-gray-600 placeholder:text-white dark:placeholder:text-zinc-900 text-white focus:ring-yellow-400 focus:border-yellow-400"
                                id="coinBox" placeholder="عنوان وبینار را وارد کنید">
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>


                        <div class="flex flex-col w-full">
                            <label for="link"
                                class="block mb-2 text-sm font-medium text-white dark:text-zinc-900 ">لینک وبینار
                            </label>
                            <input type="text" name="link" id="link" value="{{ old('link') }}"
                                class="block p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 border-gray-600 placeholder:text-white dark:placeholder:text-zinc-900 text-white focus:ring-yellow-400 focus:border-yellow-400"
                                id="coinBox" placeholder="لینک وبینار را وارد کنید">
                            <x-input-error :messages="$errors->get('link')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="time"
                                class="block mb-2 text-sm font-medium text-white dark:text-zinc-900 ">ساعت وبینار
                            </label>
                            <input type="text" name="time" id="time" value="{{ old('time') }}"
                                class="block p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 border-gray-600 placeholder:text-white dark:placeholder:text-zinc-900 text-white focus:ring-yellow-400 focus:border-yellow-400"
                                id="coinBox" placeholder="ساعت وبینار را وارد کنید">
                            <x-input-error :messages="$errors->get('time')" class="mt-2" />
                        </div>


                        <div class="flex flex-col w-full">
                            <label for="timer"
                                class="block mb-2 text-sm font-medium text-white dark:text-zinc-900 ">تایمر وبینار
                            </label>
                            <input type="text" name="timer" id="timer" value="{{ old('timer') }}"
                                class="block p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 border-gray-600 placeholder:text-white dark:placeholder:text-zinc-900 text-white focus:ring-yellow-400 focus:border-yellow-400"
                                id="coinBox" placeholder="ساعت را مجدد وارد کنید">
                            <x-input-error :messages="$errors->get('timer')" class="mt-2" />
                        </div>


                        <div class="flex flex-col w-full">
                            <label for="date"
                                class="block mb-2 text-sm font-medium text-white dark:text-zinc-900 ">تاریخ وبینار
                            </label>
                            <input type="text" name="date" id="date" value="{{ old('date') }}"
                                class="block p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 border-gray-600 placeholder:text-white dark:placeholder:text-zinc-900 text-white focus:ring-yellow-400 focus:border-yellow-400"
                                id="coinBox" placeholder="تاریخ وبینار را وارد کنید">
                            <x-input-error :messages="$errors->get('date')" class="mt-2" />
                        </div>






                        <div class="flex flex-col w-full">
                            <label for="primary_image"
                                class="block mb-2 text-sm font-medium text-white dark:text-zinc-900">انتخاب
                                عکس</label>
                            <input name="primary_image" id="primary_image"
                                class="flex  p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 focus:ring-yellow-400 focus:border-yellow-400"
                                type="file">
                            <x-input-error :messages="$errors->get('primary_image')" class="mt-2" />
                        </div>


                        <div class="flex flex-col w-full">
                            <label for="is_active"
                                class="block mb-2 text-sm font-medium text-white dark:text-zinc-900">وضعیت</label>
                            <select id="is_active" id="is_active" name="is_active"
                                class="flex  p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                                <option value="1">انتشار</option>
                                <option value="0">پیش نویس</option>
                            </select>
                        </div>


                    </div>




                    <div class="flex flex-col w-full mb-6 ">
                        <label for="body" class="block mb-2 text-sm text-white dark:text-zinc-900">متن
                            وبینار</label>
                        <textarea id="body" name="body" rows="8"
                            class="block p-2.5 w-full text-white bg-coin1 dark:bg-slate-200 placeholder:text-white dark:placeholder:text-zinc-900 rounded-3xl border border-gray-300 focus:ring-yellow-500 focus:border-yellow-500"
                            placeholder="متن مقاله را وارد کنید" value="{{ old('body') }}"></textarea>
                        <x-input-error :messages="$errors->get('body')" class="mt-2" />
                    </div>

                    <div class="flex gap-4 mt-14">
                        <button type="submit"
                            class="bg-green hover:bg-green w-full lg:w-1/12 p-2 rounded-3xl text-white  ">ثبت</button>
                        <a href="{{ route('articles.index') }}"
                            class="bg-red text-center hover:bg-red w-full lg:w-1/12 p-2 rounded-3xl text-white   ">بازگشت</a>
                    </div>


                </form>


            </div>

        </div>
    </div>
    @include('sweetalert::alert')
    <script>
        // Show File Name
        $('#primary_image').change(function() {
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
