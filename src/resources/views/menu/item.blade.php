<li class="nav-item">
    <a class="nav-link" href="{{ $link ?? '#' }}">
        @if (isset($icon))
            <i class="nav-icon icon-{{ $icon }}"></i> 
        @endif
        {{ $text ?? '' }}
    </a>
</li>