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
                        <p class="text-xl">دسته بندی : {{ $catepory->title }}</p>
                    </div>
                    {{-- form create article  --}}


                        <div class="grid grid-cols-3 w-full gap-6  mb-6">

                            <div class="flex flex-col w-full">
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-100 ">عنوان دسته بندی</label>
                                <input type="text" value="{{ $catepory->title }}" disabled class="block p-2.5 w-full rounded-lg bg-dark2 border-gray-600 placeholder-gray-400 text-white focus:ring-yellow-400 focus:border-yellow-400" placeholder="عنوان مقاله را وارد کنید" >

                            </div>

                            <div class="flex flex-col w-full">
                                <label for="slug" class="block mb-2 text-sm font-medium text-gray-100 ">لینک</label>
                                <input type="slug" value="{{ $catepory->slug }}" disabled class="block p-2.5 w-full rounded-lg bg-dark2 border-gray-600 placeholder-gray-400 text-white focus:ring-yellow-400 focus:border-yellow-400" placeholder="عنوان مقاله را وارد کنید" >
                            </div>

                            <div class="flex flex-col w-full">
                                <label for="parent_id" class="block mb-2 text-sm font-medium text-gray-100 ">مادر</label>
                                <div disabled class="flex  p-2.5 w-full rounded-lg bg-dark2 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                                        @if ($catepory->parent_id == 0)
                                            {{ $catepory->title }}
                                        @else
                                            {{ $catepory->parent->title }}
                                        @endif
                                </div>
                            </div>

                            <div class="flex flex-col w-full">
                                <label for="is_active" class="block mb-2 text-sm font-medium text-gray-100">وضعیت</label>
                                <input value="{{ $catepory->is_active }}" disabled class="flex text-green-400  p-2.5 w-full rounded-lg bg-dark2 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                            </div>

                            <div class="flex flex-col w-full">
                                <label for="is_active" class="block mb-2 text-sm font-medium text-gray-100">تاریخ ایجاد</label>
                                <input value="{{ verta($catepory->created_at) }}" disabled class="flex  p-2.5 w-full text-sky-400 rounded-lg bg-dark2 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                            </div>

                            <div class="flex flex-col w-full">
                                <label for="is_active" class="block mb-2 text-sm font-medium text-gray-100">تاریخ ویرایش</label>
                                <input value="{{ verta($catepory->updated_at) }}" disabled class="flex  text-yellow-400 p-2.5 w-full rounded-lg bg-dark2 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                            </div>

                        </div>

                        <div class="flex gap-4 mt-14">
                            <a href="{{ route('cateporys.index') }}" class="bg-red-500 text-center hover:bg-red-600 w-1/12 p-2 rounded-lg">بازگشت</a>
                        </div>



                </div>

            </div>
        </div>
        @include('sweetalert::alert')
</body>
</html>

