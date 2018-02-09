@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>წინა</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" style="border: solid 2px #39ac39; background-color: #9fdf9f;" rel="prev">წინა</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" style="background-color: red;"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><span style="background-color: yellow;">{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}" style="border: solid 2px #39ac39; background-color: #9fdf9f;">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" style="border: solid 2px #39ac39; background-color: #9fdf9f;" rel="next">შემდეგი</a></li>
        @else
            <li class="disabled"><span>შემდეგი</span></li>
        @endif
    </ul>
@endif
