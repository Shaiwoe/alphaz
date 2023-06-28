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
    <title>مقالات</title>
</head>

<body class="bg-indigo-1 dark:bg-white1">

    {{-- header  --}}
    @include('components/header')

    @include('components/light')

    <div class="flex justify-between overflow-x-auto relative space-x-4">
        <!-- nav  -->
        @include('components/nav-manager')
        <!-- main -->
        <div class="flex flex-col w-10/12 mt-28 h-full  p-4 ">
            <!-- main  -->
            <div class="flex flex-col space-y-12 w-full px-4 mt-8">
                <div class="flex justify-between items-center">
                    <p class="text-xl text-white dark:text-gray-600"> {{ $article->title }}</p>
                </div>

                {{-- Images --}}
                <div class="grid w-full gap-12 p-8 rounded-lg">
                    <div class="flex flex-col space-y-4">
                        <img class="max-h-52"
                            src="{{ url(env('ARTICLES_IMAGES_UPLOAD_PATH') . $article->primary_image) }}"
                            alt="{{ $article->name }}">
                    </div>
                </div>

                <div class="grid lg:grid-cols-5 w-full gap-6  mb-6">

                    <div class="flex flex-col w-full">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-100 ">عنوان اخبار</label>
                        <input type="text" value="{{ $article->title }}" disabled
                            class="block p-2.5 w-full rounded-lg bg-dark2 border-gray-600 placeholder-gray-400 text-white focus:ring-yellow-400 focus:border-yellow-400"
                            placeholder="عنوان مقاله را وارد کنید">
                    </div>

                    <div class="flex flex-col w-full">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-100 ">دسته بندی</label>
                        <input type="text" value="{{ $article->category->title }}" disabled
                            class="block p-2.5 w-full rounded-lg bg-dark2 border-gray-600 placeholder-gray-400 text-white focus:ring-yellow-400 focus:border-yellow-400"
                            placeholder="عنوان مقاله را وارد کنید">
                    </div>

                    <div class="flex flex-col w-full">
                        <label for="is_active" class="block mb-2 text-sm font-medium text-gray-100">وضعیت</label>
                        <input value="{{ $article->is_active }}" disabled
                            class="flex text-green-400  p-2.5 w-full rounded-lg bg-dark2 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                    </div>

                    <div class="flex flex-col w-full">
                        <label for="is_active" class="block mb-2 text-sm font-medium text-gray-100">تاریخ ایجاد</label>
                        <input value="{{ verta($article->created_at) }}" disabled
                            class="flex  p-2.5 w-full text-sky-400 rounded-lg bg-dark2 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                    </div>

                    <div class="flex flex-col w-full">
                        <label for="is_active" class="block mb-2 text-sm font-medium text-gray-100">تاریخ ویرایش</label>
                        <input value="{{ verta($article->updated_at) }}" disabled
                            class="flex  text-yellow-400 p-2.5 w-full rounded-lg bg-dark2 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                    </div>
                </div>



                <div class="flex flex-col w-full mb-6">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">توضیحات کوتاه</label>
                    <textarea disabled rows="4"
                        class="block p-2.5 w-full text-white bg-dark2 rounded-lg border border-gray-300 focus:ring-yellow-500 focus:border-yellow-500">{{ $article->description }}</textarea>
                </div>

                <div class="flex flex-col w-full mb-6">
                    <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">متن
                        اخبار</label>
                    <textarea disabled rows="4"
                        class="block p-2.5 w-full text-white bg-dark2 rounded-lg border border-gray-300 focus:ring-yellow-500 focus:border-yellow-500">{{ $article->body }}</textarea>
                </div>


                <div class="flex gap-4 mt-14">
                    <a href="{{ route('articles.index') }}"
                        class="bg-red-500 text-center hover:bg-red-600 w-1/12 p-2 rounded-lg">بازگشت</a>
                </div>

            </div>

        </div>
    </div>
    @include('sweetalert::alert')

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
