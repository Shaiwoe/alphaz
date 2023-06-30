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
    <title>ویرایش ویدیو</title>
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
                    <p class="text-xl text-white dark:text-zinc-900">ویرایش {{ $video->title }}</p>
                </div>
                {{-- form create article  --}}

                <form action="{{ route('videos.update', ['video' => $video->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="grid lg:grid-cols-4 w-full gap-6  mb-6">

                        <div class="flex flex-col w-full">
                            <label for="title" class="block mb-2 text-sm font-medium text-white dark:text-zinc-900">عنوان</label>
                            <input type="text" name="title" id="title"
                                class="flex  p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 text-white dark:text-zinc-900 focus:ring-yellow-400 focus:border-yellow-400"
                                value="{{ $video->title }}">
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>


                        <div class="flex flex-col w-full">
                            <label for="slug" class="block mb-2 text-sm font-medium text-white dark:text-zinc-900">لینک</label>
                            <input type="text" name="slug" id="slug"
                                class="flex  p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 text-white dark:text-zinc-900 focus:ring-yellow-400 focus:border-yellow-400"
                                value="{{ $video->slug }}">
                            <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="catevory_id" class="block mb-2 text-sm font-medium text-white dark:text-zinc-900 ">نوع دسته
                                بندی</label>
                            <select id="catevory_id" name="catevory_id"
                                class="flex  p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 text-gray-400 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                                @foreach ($catevorys as $catevory)
                                    <option value="{{ $catevory->id }}"
                                        {{ $catevory->id == $video->catevory->id ? 'selected' : '' }}>
                                        {{ $catevory->title }} از {{ $catevory->parent->title }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('catevory_id')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="type" class="block mb-2 text-sm font-medium text-white dark:text-zinc-900">نوع</label>
                            <input type="text" name="type" id="type"
                                class="flex  p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 text-white dark:text-zinc-900 focus:ring-yellow-400 focus:border-yellow-400"
                                value="{{ $video->type }}">
                            <x-input-error :messages="$errors->get('type')" class="mt-2" />
                        </div>


                        <div class="flex flex-col w-full">
                            <label for="image" class="block mb-2 text-sm font-medium text-white dark:text-zinc-900">انتخاب
                                عکس</label>
                            <input type="file" name="image" id="image"
                                class="flex  p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 text-white dark:text-zinc-900 focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="video" class="block mb-2 text-sm font-medium text-white dark:text-zinc-900">انتخاب
                                ویدیو</label>
                            <input type="file" name="video" id="video"
                                class="flex  p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 text-white dark:text-zinc-900 focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('video')" class="mt-2" />
                        </div>



                        <div class="flex flex-col w-full">
                            <label for="time" class="block mb-2 text-sm font-medium text-white dark:text-zinc-900">زمان</label>
                            <input type="text" name="time" id="time"
                                class="flex  p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 text-white dark:text-zinc-900 focus:ring-yellow-400 focus:border-yellow-400"
                                value="{{ $video->time }}">
                            <x-input-error :messages="$errors->get('time')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="tags" class="block mb-2 text-sm font-medium text-white dark:text-zinc-900">تگ</label>
                            <input type="text" name="tags" id="tags"
                                class="flex  p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 text-white dark:text-zinc-900 focus:ring-yellow-400 focus:border-yellow-400"
                                value="{{ $video->tags }}">
                            <x-input-error :messages="$errors->get('tags')" class="mt-2" />
                        </div>



                        <div class="flex flex-col w-full">
                            <label for="is_active" class="block mb-2 text-sm font-medium text-white dark:text-zinc-900">وضعیت</label>
                            <select id="is_active" id="is_active" name="is_active"
                                class="flex  p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 text-gray-400 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                                <option value="1"
                                    {{ $video->getRawOriginal('is_active') == 1 ? 'selected' : '' }}>انتشار</option>
                                <option value="0"
                                    {{ $video->getRawOriginal('is_active') == 0 ? 'selected' : '' }}>پیش نمایش</option>
                            </select>
                        </div>

                    </div>

                    <div class="flex flex-col gap-4 w-full">

                        <div class="flex flex-col w-full">
                            <label for="youtube" class="block mb-2 text-sm font-medium text-white dark:text-zinc-900">لینک یوتیوب
                                </label>
                            <textarea rows="1" type="text" name="youtube" id="youtube"
                                class="flex  p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 text-white dark:text-zinc-900 focus:ring-yellow-400 focus:border-yellow-400">{{ $video->youtube }}</textarea>
                            <x-input-error :messages="$errors->get('youtube')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="aparat" class="block mb-2 text-sm font-medium text-white dark:text-zinc-900">لینک آپارات
                                </label>
                            <textarea rows="1" type="text" name="aparat" id="aparat"
                                class="flex  p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 text-white dark:text-zinc-900 focus:ring-yellow-400 focus:border-yellow-400">{{ $video->aparat }}</textarea>
                            <x-input-error :messages="$errors->get('aparat')" class="mt-2" />
                        </div>
                        <div class="flex flex-col w-full">
                            <label for="description" class="block mb-2 text-sm font-medium text-white dark:text-zinc-900">توضیح
                                کوتاه</label>
                            <textarea rows="3" type="text" name="description" id="description"
                                class="flex  p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 text-white dark:text-zinc-900 focus:ring-yellow-400 focus:border-yellow-400">{{ $video->description }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="body" class="block mb-2 text-sm font-medium text-white dark:text-zinc-900">متن</label>
                            <textarea rows="8" type="text" name="body" id="body"
                                class="flex  p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 text-white dark:text-zinc-900 focus:ring-yellow-400 focus:border-yellow-400">{{ $video->body }}</textarea>
                            <x-input-error :messages="$errors->get('body')" class="mt-2" />
                        </div>
                    </div>


                    <div class="flex gap-4 mt-14">
                        <button type="submit"
                            class="bg-green hover:bg-green w-full lg:w-1/12 text-white p-2 rounded-3xl">ثبت</button>
                        <a href="{{ route('videos.index') }}"
                            class="bg-red text-center hover:bg-red w-full lg:w-1/12 text-white p-2 rounded-3xl">بازگشت</a>
                    </div>


                </form>


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