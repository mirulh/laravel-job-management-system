@props(['size' => 'base'])

@php
$classes = "bg-white-opacity-10 fw-bold rounded-4 duration-300";

    if ($size === 'base') {
        $classes .= " px-4 py-1 tag-font-size-bg ";

    }
    if ($size === 'small') {
        $classes .= " px-2 py-1 tag-font-size ";

    }
@endphp

<a href="#" class="{{$classes}}">{{$slot}}</a>
