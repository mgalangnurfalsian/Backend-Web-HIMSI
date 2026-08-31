{{--
    ui/divider.blade.php — HIMSI UI System
    ======================================
    Props:
    @prop string $type      horizontal|vertical          (default: horizontal)
    @prop string $style     solid|dashed|dotted          (default: solid)
--}}
@props([
    'type'  => 'horizontal',
    'style' => 'solid',
])

@php
    $styles = [
        'solid'  => 'border-solid',
        'dashed' => 'border-dashed',
        'dotted' => 'border-dotted',
    ];
    $borderStyle = $styles[$style] ?? $styles['solid'];
@endphp

@if($type === 'horizontal')
    @if($slot->isNotEmpty())
        <div {{ $attributes->merge(['class' => 'relative flex py-5 items-center w-full']) }}>
            <div class="flex-grow border-t border-neutral-200 {{ $borderStyle }}"></div>
            <span class="flex-shrink-0 mx-4 text-neutral-400 text-sm font-medium">{{ $slot }}</span>
            <div class="flex-grow border-t border-neutral-200 {{ $borderStyle }}"></div>
        </div>
    @else
        <hr {{ $attributes->merge(['class' => "w-full my-4 border-t border-neutral-200 $borderStyle"]) }} />
    @endif
@else
    {{-- Vertical divider --}}
    @if($slot->isNotEmpty())
        <div {{ $attributes->merge(['class' => 'relative inline-flex flex-col items-center h-full mx-4']) }}>
            <div class="flex-grow border-l border-neutral-200 {{ $borderStyle }}"></div>
            <span class="flex-shrink-0 my-2 text-neutral-400 text-sm font-medium">{{ $slot }}</span>
            <div class="flex-grow border-l border-neutral-200 {{ $borderStyle }}"></div>
        </div>
    @else
        <div {{ $attributes->merge(['class' => "inline-block h-auto self-stretch mx-4 border-l border-neutral-200 $borderStyle"]) }}></div>
    @endif
@endif
