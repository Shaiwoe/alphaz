<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>ایجاد مقاله</title>
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
                    <p class="text-xl text-white dark:text-zinc-900">ایجاد اخبار جدید</p>
                </div>
                {{-- form create article  --}}

                <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid lg:grid-cols-3 w-full gap-6  mb-6">

                        <div class="flex flex-col w-full">
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-white dark:text-zinc-900 ">عنوان
                                مقاله</label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}"
                                class="block p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 border-gray-600 placeholder:text-white dark:placeholder:text-zinc-900 text-white focus:ring-yellow-400 focus:border-yellow-400"
                                id="coinBox" placeholder="عنوان اخبار را وارد کنید">
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="time"
                                class="block mb-2 text-sm font-medium text-white dark:text-zinc-900 ">زمان
                                مقاله</label>
                            <input type="text" name="time" id="time" value="{{ old('time') }}"
                                class="block p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 border-gray-600 placeholder:text-white dark:placeholder:text-zinc-900 text-white focus:ring-yellow-400 focus:border-yellow-400"
                                id="coinBox" placeholder="عنوان اخبار را وارد کنید">
                            <x-input-error :messages="$errors->get('time')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="slug" class="block mb-2 text-sm font-medium text-white dark:text-zinc-900 ">

                                لینک خبر ( از عنوان کپی کنید و با - جدا کنید)

                            </label>
                            <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                                class="block p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 border-gray-600 placeholder:text-white dark:placeholder:text-zinc-900 text-white focus:ring-yellow-400 focus:border-yellow-400"
                                id="coinBox" placeholder="لینک اخبار را وارد کنید">
                            <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                        </div>



                        <div class="flex flex-col w-full">
                            <label for="category_id"
                                class="block mb-2 text-sm font-medium text-white dark:text-zinc-900 ">نوع دسته
                                بندی</label>
                            <select id="category_id" name="category_id"
                                class="flex  p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 items-center justify-center placeholder:text-white dark:placeholder:text-zinc-900 text-center focus:ring-yellow-400 focus:border-yellow-400">
                                @foreach ($Categorys as $Category)
                                    <option value="{{ $Category->id }}">{{ $Category->title }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
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

                        <div class="flex flex-col w-full">
                            <label for="primary_image"
                                class="block mb-2 text-sm font-medium text-white dark:text-zinc-900">انتخاب
                                عکس</label>
                            <input name="primary_image" id="primary_image"
                                class="flex  p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 focus:ring-yellow-400 focus:border-yellow-400"
                                type="file">
                            <x-input-error :messages="$errors->get('primary_image')" class="mt-2" />
                        </div>


                    </div>




                    <div id="accordion-collapse" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-1">
                        <button type="button" class="flex p-4 items-center justify-between w-full rounded-3xl bg-coin1 dark:bg-slate-200 text-white dark:text-zinc-900 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400" data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                            <span>انتخاب تگ ها</span>
                            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                            <div class="grid grid-cols-5 gap-4 py-4">
                                @foreach ($tags as $tag)
                                    <div class="flex items-center gap-2 px-2 bg-coin1 dark:bg-slate-200 text-gray-400 border-gray-600 rounded-3xl">
                                        <input  id="tag_ids" type="checkbox" value="{{ $tag->id }}" name="tag_ids[]" class="w-4 h-4 text-blue-600  rounded  ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                                        <label for="tag_ids" class="w-full py-4 ml-2 text-sm font-medium ">{{ $tag->title }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <x-input-error :messages="$errors->get('tag_ids')" class="mt-2" />
                    </div>





                    <div class="flex flex-col w-full my-6">
                        <label for="description" class="block mb-2 text-sm text-white dark:text-zinc-900">توضیحات
                            کوتاه</label>
                        <textarea id="description" name="description" value="{{ old('description') }}" rows="4"
                            class="block p-2.5 w-full text-white bg-coin1 dark:bg-slate-200 placeholder:text-white dark:placeholder:text-zinc-900 rounded-3xl border border-gray-300 focus:ring-yellow-500 focus:border-yellow-500"
                            placeholder="توضیحات کوتاه را وارد کنید ..."></textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <div class="flex flex-col w-full mb-6 ">
                        <label for="body" class="block mb-2 text-sm text-white dark:text-zinc-900">متن
                            مقاله</label>
                        <textarea id="body" name="body" rows="8"
                            class="block p-2.5 w-full text-white bg-coin1 dark:bg-slate-200 placeholder:text-white dark:placeholder:text-zinc-900 rounded-3xl border border-gray-300 focus:ring-yellow-500 focus:border-yellow-500"
                            placeholder="متن مقاله را وارد کنید" value="{{ old('body') }}"></textarea>
                        <x-input-error :messages="$errors->get('body')" class="mt-2" />
                    </div>



                    <div class="flex gap-4 mt-14">
                        <button type="submit"
                            class="bg-green hover:bg-green-o w-full lg:w-1/12 p-2 rounded-3xl text-white">ثبت</button>
                        <a href="{{ route('articles.index') }}"
                            class="bg-red text-center hover:bg-red-600 w-full lg:w-1/12 p-2 rounded-3xl text-white">بازگشت</a>
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
