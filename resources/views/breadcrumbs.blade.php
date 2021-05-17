<div class="container">
    <ul class="breadcrumbs">
        @foreach ($paths as $key => $value)
        <li class="breadcrumbs__item">
            <a href="{{ url($key) }}">
                {{ $value }}
            </a>
        </li>
        @endforeach
    </ul>
</div>