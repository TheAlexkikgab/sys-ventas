@vite(['resources/scss/admin/paginator.scss'])
@if ($paginator->hasPages())
    <nav class="custom-pagination">
        <ul class="pagination">
            @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link">&laquo;</span>    
            </li> 
            @else
            <li class="page-item">
                <a href="{{ $paginator->previousPageUrl() }}" class="page-link">&laquo;</a>
            </li>
            @endif

            {{-- Links numericos --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                <li class="page-item disabled">
                    <span class="page-link">{{ $element }}</span>    
                </li> 
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <li class="page-item active" >
                        <a href="{{$url}}" class="page-link">{{ $page }}</a>
                    </li>
                        
                    @else
                    <li class="page-item">
                        <a href="{{$url}}" class="page-link">{{ $page }}</a>
                    </li>
                        
                    @endif
                    
                    @endforeach
                    
                @endif
            @endforeach
            {{-- end of numeric links Logic --}}


            @if ($paginator->hasMorePages())
            <li class="page-item">
                <a href="{{ $paginator->nextPageUrl() }}" class="page-link">&raquo;</a>
            </li>

            @else
            <li class="page-item disabled">
                <span class="page-link">&raquo;</span>    
            </li> 
            @endif
        </ul>
    </nav>
@endif