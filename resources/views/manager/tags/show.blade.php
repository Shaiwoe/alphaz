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
                        <p class="text-xl">تگ {{ $tag->title }}</p>
                    </div>
                    {{-- form create article  --}}



                        <div class="grid grid-cols-3 w-full gap-6  mb-6">

                            <div class="flex flex-col w-full">
                                <label for="title" class="block mb-6 text-sm font-medium text-gray-100">عنوان تگ</label>
                                <input type="text" value="{{ $tag->title }}" disabled class="block p-2.5 w-full rounded-lg bg-dark2 border-gray-600 placeholder-gray-400 text-white focus:ring-yellow-400 focus:border-yellow-400" placeholder="عنوان تگ را وارد کنید" >
                            </div>

                            <div class="flex flex-col w-full">
                                <label for="title" class="block mb-6 text-sm font-medium text-gray-100">تاریخ ایجاد</label>
                                <input type="text" value="{{ verta($tag->created_at) }}" disabled class="block p-2.5 w-full rounded-lg bg-dark2 border-gray-600 placeholder-gray-400 text-sky-500 focus:ring-yellow-400 focus:border-yellow-400" placeholder="عنوان تگ را وارد کنید" >
                            </div>

                            <div class="flex flex-col w-full">
                                <label for="title" class="block mb-6 text-sm font-medium text-gray-100">تاریخ ویرایش</label>
                                <input type="text" value="{{ verta($tag->updated_at) }}" disabled class="block p-2.5 w-full rounded-lg bg-dark2 border-gray-600 placeholder-gray-400 text-yellow-400 focus:ring-yellow-400 focus:border-yellow-400" placeholder="عنوان تگ را وارد کنید" >
                            </div>


                        </div>

                        <div class="flex gap-4 mt-14">
                            <a href="{{ route('tags.index') }}" class="bg-red-500 text-center hover:bg-red-600 w-1/12 p-2 rounded-lg">بازگشت</a>
                        </div>




                </div>

            </div>
        </div>
        @include('sweetalert::alert')
</body>
</html>

