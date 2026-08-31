{{--
    ui/button.blade.php — HIMSI UI System
    ======================================
    Props:
    @prop string $variant   primary|secondary|outline|ghost|danger|link  (default: primary)
    @prop string $size      xs|sm|md|lg|xl                               (default: md)
    @prop bool   $loading   Tampilkan spinner                            (default: false)
    @prop bool   $disabled  Nonaktifkan button                           (default: false)
    @prop string $as        Tag HTML: button|a                           (default: button)
    @prop string $href      Jika diisi, otomatis render sebagai <a>
    @prop string $icon      Nama icon Phosphor (tanpa prefix ph-)
    @prop string $iconPos   Posisi icon: left|right                      (default: left)
--}}
@props([
    'variant' => 'primary',
    'size'    => 'md',
    'loading' => false,
    'disabled' => false,
    'as'      => 'button',
    'href'    => null,
    'icon'    => null,
    'iconPos' => 'left',
])

@php
    $tag = $href ? 'a' : $as;

    $base = 'inline-flex items-center justify-center gap-2 font-medium rounded-lg
             transition-all duration-200 focus:outline-none
             focus-visible:ring-2 focus-visible:ring-offset-2
             active:scale-[0.97]
             disabled:opacity-50 disabled:cursor-not-allowed disabled:pointer-events-none';

    $variants = [
        'primary'   => 'bg-primary-500 text-white hover:bg-primary-600
                        focus-visible:ring-primary-500 shadow-sm hover:shadow-md',
        'secondary' => 'bg-primary-50 text-primary-600 hover:bg-primary-100
                        focus-visible:ring-primary-400',
        'outline'   => 'border border-primary-500 text-primary-500 hover:bg-primary-50
                        focus-visible:ring-primary-500',
        'ghost'     => 'text-neutral-600 hover:bg-neutral-100 hover:text-neutral-900
                        focus-visible:ring-neutral-400',
        'danger'    => 'bg-danger text-white hover:opacity-90
                        focus-visible:ring-red-500 shadow-sm',
        'link'      => 'text-primary-500 underline-offset-4 hover:underline p-0 h-auto
                        focus-visible:ring-primary-500',
    ];

    $sizes = [
        'xs' => 'h-7  px-3   text-xs  rounded-md',
        'sm' => 'h-8  px-3.5 text-xs  rounded-lg',
        'md' => 'h-10 px-4   text-sm  rounded-lg',
        'lg' => 'h-11 px-5   text-base rounded-xl',
        'xl' => 'h-13 px-6   text-base rounded-xl',
    ];

    $iconSizes = [
        'xs' => 'text-sm',
        'sm' => 'text-sm',
        'md' => 'text-base',
        'lg' => 'text-lg',
        'xl' => 'text-xl',
    ];

    $classes = implode(' ', array_filter([
        $base,
        $variants[$variant] ?? $variants['primary'],
        $variant !== 'link' ? ($sizes[$size] ?? $sizes['md']) : '',
    ]));
@endphp

<{{ $tag }}
    {{ $attributes->merge(['class' => $classes]) }}
    @if($tag === 'button') type="{{ $attributes->get('type', 'button') }}" @endif
    @if($href) href="{{ $href }}" @endif
    @if($disabled || $loading) disabled aria-disabled="true" @endif
    @if($loading) aria-busy="true" aria-label="{{ $slot }} — loading" @endif
>
    {{-- Loading Spinner --}}
    @if($loading)
        <svg class="animate-spin h-4 w-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
             fill="none" viewBox="0 0 24 24" aria-hidden="true">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
            <path class="opacity-75" fill="currentColor"
                  d="M4 12a8 8 0 018-8V0C5.373 0 22 6.477 22 12h-4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"/>
        </svg>
    @endif

    {{-- Icon Kiri --}}
    @if($icon && $iconPos === 'left' && !$loading)
        <i class="ph-fill ph-{{ $icon }} {{ $iconSizes[$size] ?? 'text-base' }} shrink-0" aria-hidden="true"></i>
    @endif

    {{-- Slot Konten --}}
    <span>{{ $slot }}</span>

    {{-- Icon Kanan --}}
    @if($icon && $iconPos === 'right')
        <i class="ph-fill ph-{{ $icon }} {{ $iconSizes[$size] ?? 'text-base' }} shrink-0" aria-hidden="true"></i>
    @endif
</{{ $tag }}>
