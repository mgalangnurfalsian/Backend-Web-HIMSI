{{--
    ui/avatar.blade.php — HIMSI UI System
    ======================================
    Props:
    @prop string $src       URL gambar avatar (jika null, akan pakai inisial) (default: null)
    @prop string $alt       Alt text gambar                                   (default: 'Avatar')
    @prop string $fallback  Teks inisial jika src kosong                      (default: 'U')
    @prop string $size      xs|sm|md|lg|xl                                    (default: md)
    @prop string $shape     circle|square                                     (default: circle)
--}}
@props([
    'src'      => null,
    'alt'      => 'Avatar',
    'fallback' => 'U',
    'size'     => 'md',
    'shape'    => 'circle',
])

@php
    $base = 'relative inline-flex items-center justify-center overflow-hidden shrink-0 bg-primary-100 text-primary-700 ring-2 ring-white dark:ring-neutral-900';

    $sizes = [
        'xs' => 'w-6 h-6 text-[10px]',
        'sm' => 'w-8 h-8 text-xs',
        'md' => 'w-10 h-10 text-sm',
        'lg' => 'w-12 h-12 text-base',
        'xl' => 'w-16 h-16 text-lg',
    ];

    $shapes = [
        'circle' => 'rounded-full',
        'square' => 'rounded-xl',
    ];

    $classes = implode(' ', array_filter([
        $base,
        $sizes[$size] ?? $sizes['md'],
        $shapes[$shape] ?? $shapes['circle'],
    ]));
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if($src)
        <img src="{{ $src }}" alt="{{ $alt }}" class="h-full w-full object-cover">
    @else
        <span class="font-medium font-heading uppercase">{{ $fallback }}</span>
    @endif
</div>
