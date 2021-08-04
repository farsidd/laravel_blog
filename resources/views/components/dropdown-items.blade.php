@props(['active' => false])

@php
    $class =  "block leading-6 text-left text-sm px-3 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white rounded";
    if($active) $class .= ' bg-blue-500 text-white';
@endphp
<a  
{{$attributes(['class' => $class])}}
>
{{$slot}}
</a>