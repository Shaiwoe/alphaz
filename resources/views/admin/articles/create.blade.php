<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="bg-dark3 text-gray-200">
    <div class="flex justify-between overflow-x-auto relative space-x-4">
        <!-- nav  -->
        @include('components/nav')
        <!-- main -->
        <div class="flex flex-col w-full h-screen overflow-y-auto p-4">
            <!-- nav header -->
            @include('components/navHeader')
            <!-- main  -->
            <div class="flex flex-col space-y-12 w-full px-4 mt-8">
                <div class="flex justify-between items-center">
                    <p class="text-xl">ایجاد اخبار جدید</p>
                </div>
                {{-- form create article  --}}

                <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-3 w-full gap-6  mb-6">

                        <div class="flex flex-col w-full">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-100 ">عنوان
                                اخبار</label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}"
                                class="block p-2.5 w-full rounded-lg bg-dark2 border-gray-600 placeholder-gray-400 text-white focus:ring-yellow-400 focus:border-yellow-400"
                                placeholder="عنوان اخبار را وارد کنید">
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="tag_id" class="block mb-2 text-sm font-medium text-gray-100 ">تگ</label>
                            <select id="tag_id" name="tag_id"
                                class="flex  p-2.5 w-full rounded-lg bg-dark2 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('tag_id')" class="mt-2" />
                        </div>



                        <div class="flex flex-col w-full">
                            <label for="category_id" class="block mb-2 text-sm font-medium text-gray-100 ">نوع دسته
                                بندی</label>
                            <select id="category_id" name="category_id"
                                class="flex  p-2.5 w-full rounded-lg bg-dark2 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                                @foreach ($Categorys as $Category)
                                    <option value="{{ $Category->id }}">{{ $Category->title }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="is_active" class="block mb-2 text-sm font-medium text-gray-100">وضعیت</label>
                            <select id="is_active" id="is_active" name="is_active"
                                class="flex  p-2.5 w-full rounded-lg bg-dark2 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                                <option value="1">انتشار</option>
                                <option value="0">پیش نویس</option>
                            </select>
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="primary_image" class="block mb-2 text-sm font-medium text-gray-100">انتخاب
                                عکس</label>
                            <input name="primary_image" id="primary_image"
                                class="flex  p-2.5 w-full rounded-lg bg-dark2 focus:ring-yellow-400 focus:border-yellow-400"
                                type="file">
                            <x-input-error :messages="$errors->get('primary_image')" class="mt-2" />
                        </div>


                    </div>


                    <div class="flex flex-col w-full mb-6">
                        <label for="description" class="block mb-2 text-sm text-white">توضیحات کوتاه</label>
                        <textarea id="description" name="description" value="{{ old('description') }}" rows="4"
                            class="block p-2.5 w-full text-white bg-dark2 rounded-lg border border-gray-300 focus:ring-yellow-500 focus:border-yellow-500"
                            placeholder="توضیحات کوتاه را وارد کنید ..."></textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <div class="flex flex-col w-full mb-6 min-h-screen">
                        <label for="body" class="block mb-2 text-sm text-white">متن
                            مقاله</label>
                        <textarea id="body" name="body" rows="8"
                            class="block p-2.5 w-full text-white bg-dark2 rounded-lg border border-gray-300 focus:ring-yellow-500 focus:border-yellow-500"
                            placeholder="متن مقاله را وارد کنید" value="{{ old('body') }}"></textarea>
                        <x-input-error :messages="$errors->get('body')" class="mt-2" />
                    </div>

                    <div class="flex gap-4 mt-14">
                        <button type="submit"
                            class="bg-green-500 hover:bg-green-600 w-1/12 p-2 rounded-lg">ثبت</button>
                        <a href="{{ route('articles.index') }}"
                            class="bg-red-500 text-center hover:bg-red-600 w-1/12 p-2 rounded-lg">بازگشت</a>
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
