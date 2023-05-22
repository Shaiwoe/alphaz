<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>ویرایش {{ $article->title }}</title>
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
                    <p class="text-xl text-white dark:text-gray-600">ویرایش {{ $article->title }}</p>
                </div>
                {{-- form create article  --}}

                <form action="{{ route('articles.update', ['article' => $article->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="grid lg:grid-cols-3 w-full gap-6  mb-6">

                        <div class="flex flex-col w-full">
                            <label for="title" class="block mb-2 text-sm font-medium text-white dark:text-gray-600 ">عنوان
                                اخبار</label>
                            <input type="text" name="title" id="title" value="{{ $article->title }}"
                                class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400 focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="tag_id" class="block mb-2 text-sm font-medium text-gray-100 ">تگ</label>
                            <select id="tag_id" name="tag_id"
                                class="flex  p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-gray-400 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                                @php
                                    $articleTagIds = $article
                                        ->tags()
                                        ->pluck('id')
                                        ->toArray();
                                @endphp
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}"
                                        {{ in_array($tag->id, $articleTagIds) ? 'selected' : '' }}>{{ $tag->title }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('tag_id')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="category_id" class="block mb-2 text-sm font-medium text-white dark:text-gray-600 ">نوع دسته
                                بندی</label>
                            <select id="category_id" name="category_id"
                                class="flex  p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-gray-400 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                                @foreach ($Categorys as $Category)
                                    <option value="{{ $Category->id }}"
                                        {{ $Category->id == $article->Category->id ? 'selected' : '' }}>
                                        {{ $Category->title }} - {{ $Category->parent->title }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
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
                            <label for="is_active" class="block mb-2 text-sm font-medium text-white dark:text-gray-600">وضعیت</label>
                            <select id="is_active" id="is_active" name="is_active"
                                class="flex  p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-gray-400 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                                <option value="1"
                                    {{ $article->getRawOriginal('is_active') == 1 ? 'selected' : '' }}>انتشار</option>
                                <option value="0"
                                    {{ $article->getRawOriginal('is_active') == 0 ? 'selected' : '' }}>پیش نمایش
                                </option>
                            </select>
                        </div>

                    </div>


                    <div class="flex flex-col w-full mb-6 text-white">
                        <label for="description" class="block mb-2 text-sm font-medium text-white dark:text-gray-600">توضیحات کوتاه</label>
                        <textarea id="description" name="description" rows="4"
                            class="block p-2.5 w-full text-white bg-coin1 dark:bg-gray-100  dark:text-gray-600 rounded-lg border border-gray-300 focus:ring-yellow-500 focus:border-yellow-500">{{ $article->description }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <div class="flex flex-col w-full mb-6 ">
                        <label for="body" class="block mb-2 text-sm text-white dark:text-gray-600">متن
                            اخبار</label>
                        <textarea id="body" name="body" rows="8"
                            class="block p-2.5 w-full text-white bg-coin1 dark:bg-gray-100 dark:text-gray-600 rounded-lg border border-gray-300 focus:ring-yellow-500 focus:border-yellow-500">{{ $article->body }}</textarea>
                        <x-input-error :messages="$errors->get('body')" class="mt-2" />
                    </div>

                    <div class="flex gap-4 mt-14">
                        <button type="submit"
                            class="bg-green-500 hover:bg-green-600 w-full lg:w-1/12 text-white p-2 rounded-lg">ثبت</button>
                        <a href="{{ route('articles.index') }}"
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
