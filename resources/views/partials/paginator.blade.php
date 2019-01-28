@if ($paginator->hasPages())
    <!-- Begin pagination -->
    <nav class="pagination-wrap">
        <ul class="pagination">

            <li>
                <a href="{{$paginator->url(1)}}" aria-label="Previous">
                    <span aria-hidden="true">First</span>
                </a>
            </li>

            @if ($paginator->onFirstPage())
            @else
                {{--<li><a class="pagination-previous icon-left-open" href="{{$paginator->previousPageUrl()}} "><span class="icon-left-open-mini"></span></a></li>--}}
                 <li><a href="{{$paginator->previousPageUrl()}}">Prev</a></li>
            @endif


            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    {{--<li class=""><span>{{ $element }}</span></li>--}}
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><a >{{$page}}</a></li>
                        @else
                            <li><a href = "{{$url}}">{{$page}}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{--<li class="active"><a href="#0">1</a></li>--}}
            {{--<li><a href="">2</a></li>--}}
            {{--<li><a href="">3</a></li>--}}
            {{--<li>...</li>--}}
            {{--<li><a href="">6</a></li>--}}
            {{--<li><a href="">7</a></li>--}}
            {{--<li><a href="">8</a></li>--}}

            @if ($paginator->hasMorePages())
                {{--<li><a class="pagination-next" href="{{$paginator->nextPageUrl()}}"><span class="icon-right-open-mini"></span></a></li>--}}
                <li><a href="{{$paginator->nextPageUrl()}}">Next</a></li>
            @else
            @endif

            <li>
                <a href="{{$paginator->url($paginator->lastPage())}}" aria-label="Next">
                    <span aria-hidden="true">Last</span>
                </a>
            </li>
        </ul>

        <!-- Begin pagination info -->
        <div class="pagination-info">
            <span>Showing page {{$paginator->currentPage()}} of {{$paginator->lastPage()}}</span>
        </div>
        <!-- End pagination info -->
    </nav>
    <!-- End pagination -->
@endif