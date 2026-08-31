{{--
    ui/alert.blade.php — HIMSI UI System
    ======================================
    Props:
    @prop string $type         info|success|warning|danger                (default: info)
    @prop string $title        Judul alert                                (default: null)
    @prop bool   $dismissible  Bisa ditutup (menggunakan Alpine x-data)   (default: false)
--}}
@props([
    'type'        => 'info',
    'title'       => null,
    'dismissible' => false,
])

@php
    $base = 'relative w-full rounded-xl border p-4 text-sm flex gap-3 items-start';

    $types = [
        'info'    => 'bg-sky-50 text-sky-800 border-sky-100',
        'success' => 'bg-green-50 text-green-800 border-green-100',
        'warning' => 'bg-amber-50 text-amber-800 border-amber-100',
        'danger'  => 'bg-red-50 text-red-800 border-red-100',
    ];

    $iconColors = [
        'info'    => 'text-sky-600',
        'success' => 'text-green-600',
        'warning' => 'text-amber-600',
        'danger'  => 'text-red-600',
    ];

    $icons = [
        'info'    => 'info',
        'success' => 'check-circle',
        'warning' => 'warning',
        'danger'  => 'x-circle',
    ];

    $classes = implode(' ', array_filter([
        $base,
        $types[$type] ?? $types['info'],
    ]));
@endphp

@if($dismissible)
<div x-data="{ show: true }" x-show="show" x-transition.opacity.duration.300ms class="{{ $classes }}" role="alert">
@else
<div class="{{ $classes }}" role="alert">
@endif

    {{-- Icon --}}
    <i class="ph-fill ph-{{ $icons[$type] ?? 'info' }} text-xl shrink-0 {{ $iconColors[$type] ?? 'text-sky-600' }}" aria-hidden="true"></i>

    {{-- Content --}}
    <div class="flex-1 flex flex-col gap-1">
        @if($title)
            <h5 class="font-semibold leading-none tracking-tight">{{ $title }}</h5>
        @endif
        <div class="text-sm opacity-90 leading-relaxed">
            {{ $slot }}
        </div>
    </div>

    {{-- Close Button --}}
    @if($dismissible)
        <button type="button" @click="show = false" class="shrink-0 rounded-lg p-1 opacity-60 hover:opacity-100 hover:bg-black/5 transition-all focus:outline-none focus:ring-2 focus:ring-black/10" aria-label="Tutup alert">
            <i class="ph-fill ph-x text-lg"></i>
        </button>
    @endif

</div>
