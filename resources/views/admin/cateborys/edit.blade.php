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
    <title>ویرایش کتاب ها</title>
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
                    <p class="text-xl">ویرایش دسته بندی {{ $catebory->title }}</p>
                </div>
                {{-- form create article  --}}

                <form action="{{ route('cateborys.update', ['catebory' => $catebory->id]) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="flex flex-col lg:flex-row w-full gap-6  mb-6">

                        <div class="flex flex-col w-full">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-100 ">عنوان دسته
                                بندی</label>
                            <input type="text" name="title" id="title" value="{{ $catebory->title }}"
                                class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400"
                                placeholder="عنوان مقاله را وارد کنید">
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="slug" class="block mb-2 text-sm font-medium text-gray-100 ">لینک</label>
                            <input type="slug" name="slug" id="slug" value="{{ $catebory->slug }}"
                                class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400"
                                placeholder="عنوان مقاله را وارد کنید">
                            <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="parent_id" class="block mb-2 text-sm font-medium text-gray-100 ">نوع دسته
                                بندی</label>
                            <select id="parent_id" name="parent_id"
                                class="flex  p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100  text-gray-400 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                                <option value="0">مادر</option>
                                @foreach ($cateborys as $catebory)
                                    <option value="{{ $catebory->id }}"
                                        {{ $catebory->parent_id == $catebory->id ? 'selected' : '' }}>
                                        {{ $catebory->title }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('parent_id')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="is_active" class="block mb-2 text-sm font-medium text-gray-100">وضعیت</label>
                            <select id="is_active" id="is_active" name="is_active"
                                class="flex  p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-gray-400 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                                <option value="1" {{ $catebory->getRawOriginal('is_active') ? 'selected' : '' }}>
                                    انتشار</option>
                                <option value="0" {{ $catebory->getRawOriginal('is_active') ? '' : 'selected' }}>
                                    پیش نمایش</option>
                            </select>
                        </div>

                    </div>

                    <div class="flex gap-4 mt-14">
                        <button type="submit"
                            class="bg-green-500 hover:bg-green-600 w-full lg:w-1/12 text-white p-2 rounded-lg">ثبت</button>
                        <a href="{{ route('cateborys.index') }}"
                            class="bg-red-500 text-center hover:bg-red-600 w-full lg:w-1/12 text-white p-2 rounded-lg">بازگشت</a>
                    </div>


                </form>


            </div>

        </div>
    </div>
    @include('sweetalert::alert')
</body>

</html>
