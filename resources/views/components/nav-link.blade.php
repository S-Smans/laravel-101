@props(['active' => false, 'type' => 'a'])

@php

$classes = $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';

$classes .= ' rounded-md px-3 py-2 text-sm font-medium';

@endphp

@if ($type === 'a')
<a {{$attributes}} class="{{$classes}}" aria-current="{{  $active ? 'page' : 'false'}}">{{$slot}}</a>
@else
<button {{$attributes}} class="{{$classes}}" aria-current="{{  $active ? 'page' : 'false'}}">{{$slot}}</button>
@endif