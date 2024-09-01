@php
    $classes = 'p-4 bg-white-opacity-10 rounded-3 d-flex gap-4 border-card';
@endphp

<div {{$attributes->merge(['class' => $classes])}}>
{{$slot}}
</div>
