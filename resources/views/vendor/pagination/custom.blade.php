@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Tombol halaman pertama --}}
        @if (!$paginator->onFirstPage())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url(1) }}" rel="prev" aria-label="@lang('pagination.first')">&laquo;</a>
            </li>
        @endif {{-- Tidak menampilkan tombol jika berada di halaman pertama --}}

        {{-- Tombol halaman sebelumnya --}}
        @if ($paginator->onFirstPage())
            {{-- Tidak menampilkan tombol jika berada di halaman pertama --}}
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li>
        @endif

        {{-- Tombol halaman yang ditampilkan (maksimal 5 halaman) --}}
        @php
            $halfTotal = floor(3 / 2);
            $start = max(1, $paginator->currentPage() - $halfTotal);
            $end = min($start + 2 * $halfTotal, $paginator->lastPage());
        
            if ($end - $start < 2 * $halfTotal) {
                $start = max(1, $end - 2 * $halfTotal);
            }
        @endphp
    
        @for ($i = $start; $i <= $end; $i++)
            @if ($i == $paginator->currentPage())
                <li class="page-item active" aria-current="page"><span class="page-link">{{ $i }}</span></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
            @endif
        @endfor
    
        {{-- Tombol halaman selanjutnya --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
            </li>
        @else
            {{-- Tidak menampilkan tombol jika berada di halaman terakhir --}}
        @endif

        {{-- Tombol halaman terakhir --}}
        @if ($paginator->currentPage() < $paginator->lastPage())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}" rel="next" aria-label="@lang('pagination.last')">&raquo;</a>
            </li>
        @endif {{-- Tidak menampilkan tombol jika berada di halaman terakhir --}}
    </ul>
@endif
