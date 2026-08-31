{{--
    ui/tooltip.blade.php — HIMSI UI System
    ======================================
    Props:
    @prop string $text      Teks tooltip
    @prop string $position  top|right|bottom|left  (default: top)
--}}
@props([
    'text',
    'position' => 'top',
])

@php
    $positions = [
        'top'    => 'bottom-full left-1/2 -translate-x-1/2 mb-2',
        'bottom' => 'top-full left-1/2 -translate-x-1/2 mt-2',
        'left'   => 'right-full top-1/2 -translate-y-1/2 mr-2',
        'right'  => 'left-full top-1/2 -translate-y-1/2 ml-2',
    ];

    $arrowPositions = [
        'top'    => 'top-full left-1/2 -translate-x-1/2 border-t-neutral-800 border-l-transparent border-r-transparent border-b-transparent',
        'bottom' => 'bottom-full left-1/2 -translate-x-1/2 border-b-neutral-800 border-l-transparent border-r-transparent border-t-transparent',
        'left'   => 'left-full top-1/2 -translate-y-1/2 border-l-neutral-800 border-t-transparent border-b-transparent border-r-transparent',
        'right'  => 'right-full top-1/2 -translate-y-1/2 border-r-neutral-800 border-t-transparent border-b-transparent border-l-transparent',
    ];
@endphp

<div
    x-data="{ tooltipVisible: false }"
    @mouseenter="tooltipVisible = true"
    @mouseleave="tooltipVisible = false"
    @focusin="tooltipVisible = true"
    @focusout="tooltipVisible = false"
    class="relative inline-block"
>
    {{-- Elemen Trigger --}}
    {{ $slot }}

    {{-- Tooltip Popup --}}
    <div
        x-show="tooltipVisible"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute z-50 whitespace-nowrap px-2.5 py-1.5 text-xs font-medium text-white bg-neutral-800 rounded-md shadow-sm pointer-events-none {{ $positions[$position] ?? $positions['top'] }}"
        style="display: none;"
        role="tooltip"
    >
        {{ $text }}
        {{-- Segitiga Panah --}}
        <div class="absolute border-4 w-0 h-0 {{ $arrowPositions[$position] ?? $arrowPositions['top'] }}"></div>
    </div>
</div>
