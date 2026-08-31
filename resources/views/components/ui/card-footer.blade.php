{{-- ui/card-footer.blade.php --}}
@props([
    'padding' => 'md', // none | sm | md | lg
])

@php
    $base = 'flex items-center mt-auto border-t border-neutral-100/50 bg-neutral-50/50';

    $paddings = [
        'none' => 'p-0',
        'sm'   => 'p-4',
        'md'   => 'px-6 py-4',
        'lg'   => 'px-8 py-5',
    ];

    $classes = implode(' ', array_filter([
        $base,
        $paddings[$padding] ?? $paddings['md'],
    ]));
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
