{{--
    ui/badge.blade.php — HIMSI UI System
    ======================================
    Props:
    @prop string $variant   default|primary|secondary|success|warning|danger|info|outline (default: primary)
    @prop string $size      sm|md|lg                                                      (default: md)
    @prop bool   $dot       Tampilkan dot indicator warna solid                           (default: false)
    @prop string $icon      Nama icon Phosphor (tanpa prefix ph-)                         (default: null)
--}}
@props([
    'variant' => 'primary',
    'size'    => 'md',
    'dot'     => false,
    'icon'    => null,
])

@php
    $base = 'inline-flex items-center gap-1.5 font-medium rounded-full shrink-0 border border-transparent';

    $variants = [
        'default'   => 'bg-neutral-100 text-neutral-700',
        'primary'   => 'bg-primary-50 text-primary-700 border-primary-100',
        'secondary' => 'bg-accent-50 text-accent-700 border-accent-100',
        'success'   => 'bg-green-50 text-green-700 border-green-100',
        'warning'   => 'bg-amber-50 text-amber-700 border-amber-100',
        'danger'    => 'bg-red-50 text-red-700 border-red-100',
        'info'      => 'bg-sky-50 text-sky-700 border-sky-100',
        'outline'   => 'border-neutral-200 text-neutral-700',
    ];

    $sizes = [
        'sm' => 'px-2 py-0.5 text-xs',
        'md' => 'px-2.5 py-1 text-sm',
        'lg' => 'px-3 py-1.5 text-base',
    ];

    // Dot colors for indicator
    $dotColors = [
        'default'   => 'bg-neutral-500',
        'primary'   => 'bg-primary-500',
        'secondary' => 'bg-accent-500',
        'success'   => 'bg-green-500',
        'warning'   => 'bg-amber-500',
        'danger'    => 'bg-red-500',
        'info'      => 'bg-sky-500',
        'outline'   => 'bg-neutral-400',
    ];

    $iconSizes = [
        'sm' => 'text-xs',
        'md' => 'text-sm',
        'lg' => 'text-base',
    ];

    $classes = implode(' ', array_filter([
        $base,
        $variants[$variant] ?? $variants['primary'],
        $sizes[$size] ?? $sizes['md'],
    ]));
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    @if($dot)
        <span class="relative flex h-1.5 w-1.5 shrink-0">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full {{ $dotColors[$variant] ?? 'bg-primary-500' }} opacity-40"></span>
            <span class="relative inline-flex rounded-full h-1.5 w-1.5 {{ $dotColors[$variant] ?? 'bg-primary-500' }}"></span>
        </span>
    @endif

    @if($icon)
        <i class="ph-fill ph-{{ $icon }} shrink-0 {{ $iconSizes[$size] ?? 'text-sm' }}" aria-hidden="true"></i>
    @endif

    {{ $slot }}
</span>
