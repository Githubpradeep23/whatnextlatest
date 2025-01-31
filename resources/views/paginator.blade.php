@if ($paginator->hasPages())

    <ul class="">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li  aria-disabled="true" aria-label="@lang('pagination.previous')">
            <span aria-hidden="true"><<</span>
        </li>
        @else
        <li >
            <a href="{{ $paginator->previousPageUrl() }}"  rel="prev"
                aria-label="@lang('pagination.previous')"><<</a>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li class="" aria-disabled="true"><span>{{ $element }}</span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="current"><span>{{ $page }}</span></li>
        @else
        <li ><a href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="next">
            <a href="{{ $paginator->nextPageUrl() }}" aria-label="@lang('pagination.next')">>></a>
        </li>
        @else
        <li class="" aria-disabled="true" aria-label="@lang('pagination.next')">
            <span aria-hidden="true">>></span>
        </li>
        @endif
    </ul>

@endif