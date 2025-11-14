@if ($paginator->hasPages())
<nav role="navigation" aria-label="Pagination Navigation" class="flex flex-col sm:flex-row sm:items-center sm:justify-between mt-6">
    
    {{-- Info Text --}}
    <div class="mb-2 sm:mb-0">
        <p class="text-sm text-gray-700 dark:text-gray-400">
            Showing 
            @if ($paginator->firstItem()) 
                <span class="font-medium">{{ $paginator->firstItem() }}</span> to 
                <span class="font-medium">{{ $paginator->lastItem() }}</span>
            @else
                {{ $paginator->count() }}
            @endif
            of <span class="font-medium">{{ $paginator->total() }}</span> results
        </p>
    </div>

    {{-- Pagination Links --}}
    <div class="flex justify-center sm:justify-end">
        <span class="inline-flex rounded-md shadow-sm">
            {{-- Previous Page --}}
            @if ($paginator->onFirstPage())
                <span aria-disabled="true" class="px-3 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 rounded-l-md cursor-not-allowed">
                    &laquo;
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-2 text-sm font-medium text-white bg-blue-600 border border-gray-300 rounded-l-md hover:bg-blue-700 transition">
                    &laquo;
                </a>
            @endif

            {{-- Page Numbers --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <span class="px-3 py-2 -ml-px text-sm font-medium text-gray-500 bg-gray-100 border border-gray-300 cursor-default">{{ $element }}</span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="px-3 py-2 -ml-px text-sm font-medium text-white bg-blue-600 border border-gray-300">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="px-3 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-100 hover:text-blue-600 transition">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-2 -ml-px text-sm font-medium text-white bg-blue-600 border border-gray-300 rounded-r-md hover:bg-blue-700 transition">&raquo;</a>
            @else
                <span aria-disabled="true" class="px-3 py-2 -ml-px text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 rounded-r-md cursor-not-allowed">&raquo;</span>
            @endif
        </span>
    </div>
</nav>
@endif
