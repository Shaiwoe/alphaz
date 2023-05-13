<x-guest-layout>
    <div class="mb-4 text-sm text-gray-200 dark:text-gray-200">
        {{ __('از ثبت نام شما سپاسگزاریم! قبل از شروع، آیا می توانید آدرس ایمیل خود را با کلیک کردن روی پیوندی که به تازگی برای شما ایمیل کرده ایم تأیید کنید؟ اگر ایمیلی را دریافت نکردید، با کمال میل یک ایمیل دیگر برای شما ارسال خواهیم کرد') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <button type="submit" class="text-sm text-yellow-500 bg-dark7 px-2 py-1 rounded-md">
                    ارسال مجدد ایمیل
                </button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class=" text-sm text-red-500 bg-dark7 px-2 py-1 rounded-md">
                خروج
            </button>
        </form>
    </div>
</x-guest-layout>
