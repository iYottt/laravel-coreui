<!-- Breadcrumb-->
<ol class="breadcrumb">
    @foreach ($items as $item)
        @if (array_has($item, 'active'))
            <li class="breadcrumb-item active">{{ array_get($item, 'active') }}</li>
        @else
            @if (array_has($item, 'link'))
                <li class="breadcrumb-item"><a href="{{ array_get($item, 'link') }}">{{ array_get($item, 'text') }}</a></li>
            @else
                <li class="breadcrumb-item">{{ array_get($item, 'text') }}</li>
            @endif
        @endif
    @endforeach
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            {{-- <a class="btn" href="#"><i class="icon-speech"></i></a>
            <a class="btn" href="./"><i class="icon-graph"></i>  Dashboard</a>
            <a class="btn" href="#"><i class="icon-settings"></i>  Settings</a> --}}
        </div>
    </li>
</ol>