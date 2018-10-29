<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            @foreach (config('coreui.menu.items') as $item)
                @if (array_has($item, 'title'))
                    <li class="nav-title">{{ array_get($item, 'title') }}</li>
                @else
                    @if (array_has($item, 'items'))
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="{{ array_get($item, 'link') }}">
                                @if (array_has($item, 'icon'))
                                    <i class="nav-icon icon-{{ array_get($item, 'icon') }}"></i> 
                                @endif
                                {{ array_get($item, 'text') }}
                            </a>
                            <ul class="nav-dropdown-items">
                                @foreach (array_get($item, 'items') as $child)
                                    @include('coreui::menu.item', $child)
                                @endforeach
                            </ul>
                        </li>
                    @else
                        @include('coreui::menu.item', $item)
                    @endif
                @endif
            @endforeach
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>