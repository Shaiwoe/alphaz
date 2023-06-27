@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 sm:hidden gap-4">
            @if ($paginator->onFirstPage())
                <span
                    class="relative inline-flex items-center px-4 py-2  font-medium text-white  bg-indigo-1 cursor-default leading-5 rounded-md">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="relative inline-flex items-center px-4 py-2  font-medium text-gray-700 bg-white  leading-5 rounded-md hover:text-white focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-700 active:text-yellow-400 transition ease-in-out duration-150">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="relative inline-flex items-center px-4 py-2 ml-3  font-medium text-gray-700 bg-white  leading-5 rounded-md hover:text-white focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-700 active:text-yellow-400 transition ease-in-out duration-150">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span
                    class="relative inline-flex items-center px-4 py-2 ml-3  font-medium text-white bg-white  cursor-default leading-5 rounded-md">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between w-full">
            <div>

            </div>

            <div class="w-full text-center">
                <span class="relative sm:gap-1 md:gap-2 z-0 inline-flex shadow-sm rounded-md">


                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span
                                    class="relative inline-flex items-center px-4 py-2 -ml-px font-medium text-white sm:text-sm md:text-lg bg-indigo-1 dark:bg-slate-200 rounded-full cursor-default leading-5">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span
                                            class="relative inline-flex items-center px-4 py-2 -ml-px font-medium text-white sm:text-sm md:text-lg bg-coin1 dark:bg-green rounded-full cursor-default leading-5">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}"
                                        class="relative inline-flex items-center px-4 py-2 -ml-px rounded-full text-white sm:text-sm md:text-lg bg-indigo-1 dark:bg-slate-200 dark:text-zinc-900 leading-5 hover:text-blue-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 transition ease-in-out duration-150"
                                        aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach


                </span>
            </div>
        </div>
    </nav>
@endif
