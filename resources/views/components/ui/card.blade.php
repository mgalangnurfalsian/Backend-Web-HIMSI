{{-- ui/card.blade.php --}}
@props([
    'variant' => 'default', // default | bordered | elevated | ghost
])

@php
    $base = 'bg-white rounded-2xl flex flex-col overflow-hidden';

    $variants = [
        'default'  => 'shadow-sm border border-neutral-100',
        'bordered' => 'border-2 border-neutral-200 shadow-none',
        'elevated' => 'shadow-xl shadow-primary-500/5 border border-primary-100/50',
        'ghost'    => 'bg-transparent shadow-none border-none',
    ];

    $classes = implode(' ', array_filter([
        $base,
        $variants[$variant] ?? $variants['default'],
    ]));
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
