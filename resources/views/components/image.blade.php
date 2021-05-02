@props(['src'])

<img src="{{ $src ?? config('ordering.menu.no_image') }}"
     {{ $attributes->merge(['class' => 'rounded-md h-32 object-contain']) }}
     alt="">
