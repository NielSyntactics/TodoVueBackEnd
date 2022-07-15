<div {{$attributes->merge(['class'=>'text-warning'])}}>
    <h1>{{ $title }}</h1>
    <p>{{ $info }}</p>
    <p>{{ $sidebartitle }}</p>
    Hello from the sidebar Component

    @foreach ($list('item') as $item)
        <p>{{ $item }}</p>
    @endforeach

    {{$slot}}
</div>
