{{--
    ui/progress.blade.php — HIMSI UI System
    ======================================
    Props:
    @prop int    $value    Nilai progress 0-100                    (default: 0)
    @prop string $color    primary|accent|success|warning|danger   (default: primary)
    @prop string $size     sm|md|lg                                (default: md)
    @prop string $label    Label teks di atas progress bar         (default: null)
    @prop bool   $showValue Tampilkan nilai persentase             (default: false)
--}}
@props([
    'value'     => 0,
    'color'     => 'primary',
    'size'      => 'md',
    'label'     => null,
    'showValue' => false,
])

@php
    $value = max(0, min(100, (int) $value)); // Batasi 0-100

    $sizes = [
        'sm' => 'h-1.5',
        'md' => 'h-2.5',
        'lg' => 'h-4',
    ];

    $colors = [
        'primary' => 'bg-primary-500',
        'accent'  => 'bg-accent-500',
        'success' => 'bg-green-500',
        'warning' => 'bg-amber-500',
        'danger'  => 'bg-red-500',
    ];

    $bgClasses = "w-full bg-neutral-100 rounded-full overflow-hidden";
    $fillClasses = implode(' ', [
        'h-full rounded-full transition-all duration-500 ease-out',
        $colors[$color] ?? $colors['primary']
    ]);
@endphp

<div {{ $attributes->merge(['class' => 'w-full']) }} role="progressbar" aria-valuenow="{{ $value }}" aria-valuemin="0" aria-valuemax="100">
    @if($label || $showValue)
        <div class="flex justify-between items-end mb-1.5">
            @if($label)
                <span class="text-sm font-medium text-neutral-700">{{ $label }}</span>
            @endif
            @if($showValue)
                <span class="text-xs font-semibold text-neutral-500">{{ $value }}%</span>
            @endif
        </div>
    @endif

    <div class="{{ $bgClasses }} {{ $sizes[$size] ?? $sizes['md'] }}">
        <div class="{{ $fillClasses }}" style="width: {{ $value }}%"></div>
    </div>
</div>
