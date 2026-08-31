{{-- ui/card-body.blade.php --}}
@props([
    'padding' => 'md', // none | sm | md | lg
])

@php
    $base = 'flex-1 text-neutral-600';

    $paddings = [
        'none' => 'p-0',
        'sm'   => 'p-4',
        'md'   => 'p-6',
        'lg'   => 'p-8',
    ];

    $classes = implode(' ', array_filter([
        $base,
        $paddings[$padding] ?? $paddings['md'],
    ]));
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
