<div class="pagination-container d-flex justify-content-center align-items-center">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <!-- First Page Link -->
            <li class="page-item first {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $paginator->url(1) }}" aria-label="First">
                    <i class="bx bx-chevrons-left"></i>
                </a>
            </li>

            <!-- Previous Page Link -->
            <li class="page-item prev {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                    <i class="bx bx-chevron-left"></i>
                </a>
            </li>

            <!-- Pagination Links -->
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}" aria-current="page">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach
                @endif
            @endforeach

            <!-- Next Page Link -->
            <li class="page-item next {{ $paginator->hasMorePages() ? '' : 'disabled' }}">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                    <i class="bx bx-chevron-right"></i>
                </a>
            </li>

            <!-- Last Page Link -->
            <li class="page-item last {{ $paginator->hasMorePages() ? '' : 'disabled' }}">
                <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}" aria-label="Last">
                    <i class="bx bx-chevrons-right"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
<div class="pagination-info d-flex justify-content-center align-items-center">
    List {{ (($paginator->currentPage() - 1) * $paginator->perPage()) + 1 }} ~
    {{ (($paginator->currentPage() - 1) * $paginator->perPage()) + $paginator->count() }}
    of  {{ $paginator->total() }} Codes
</div>
