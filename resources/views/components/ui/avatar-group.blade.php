{{-- ui/avatar-group.blade.php --}}
@props([
    'size' => 'md',
])

@php
    $spacings = [
        'xs' => '-space-x-1.5',
        'sm' => '-space-x-2',
        'md' => '-space-x-3',
        'lg' => '-space-x-4',
        'xl' => '-space-x-5',
    ];

    $classes = "flex items-center {$spacings[$size]}";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
