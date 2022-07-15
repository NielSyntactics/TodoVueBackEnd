<div class="dropdown">
    <x-buttons text={{$text}} class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
    aria-expanded="false" />
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        @foreach ($list(['Action 1', 'Action 2', 'Action 3']) as $item)
            <li><a class="dropdown-item" href="#">{{ $item }}</a></li>
        @endforeach
    </ul>
</div>
