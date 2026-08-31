{{--
    ui/tabs.blade.php — HIMSI UI System
    ======================================
    Props:
    @prop array  $tabs      Array of string (nama-nama tab)                       (wajib)
    @prop string $variant   underline|pills|bordered                              (default: underline)
    @prop int    $active    Index tab yang aktif pertama kali (0-indexed)         (default: 0)

    Slot rendering:
    Karena Blade component slots dynamic sedikit rumit, kita gunakan x-show Alpine
    di dalam slot utama. User cukup membungkus konten panel dengan div yang memiliki x-show="activeTab === index".
--}}
@props([
    'tabs'    => [],
    'variant' => 'underline',
    'active'  => 0,
])

@php
    $navClasses = [
        'underline' => 'flex border-b border-neutral-200',
        'pills'     => 'flex gap-2 p-1 bg-neutral-100 rounded-xl overflow-x-auto',
        'bordered'  => 'flex border border-neutral-200 rounded-t-xl bg-neutral-50 overflow-hidden',
    ];

    $btnBase = 'font-medium text-sm transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 whitespace-nowrap';

    $btnVariants = [
        'underline' => 'px-4 py-3 border-b-2 -mb-px',
        'pills'     => 'px-4 py-2 rounded-lg',
        'bordered'  => 'px-4 py-3 border-r border-neutral-200 last:border-r-0',
    ];

    $activeClasses = [
        'underline' => 'border-primary-500 text-primary-600',
        'pills'     => 'bg-white text-primary-700 shadow-sm',
        'bordered'  => 'bg-white text-primary-700 border-b-white',
    ];

    $inactiveClasses = [
        'underline' => 'border-transparent text-neutral-500 hover:text-neutral-700 hover:border-neutral-300',
        'pills'     => 'text-neutral-600 hover:text-neutral-900 hover:bg-neutral-200/50',
        'bordered'  => 'border-b-neutral-200 text-neutral-600 hover:bg-neutral-100',
    ];
@endphp

<div x-data="{ activeTab: {{ $active }} }" class="w-full">
    {{-- Tab Navigation --}}
    <div class="{{ $navClasses[$variant] ?? $navClasses['underline'] }}" role="tablist">
        @foreach($tabs as $index => $tab)
            <button
                type="button"
                role="tab"
                :aria-selected="activeTab === {{ $index }}"
                :tabindex="activeTab === {{ $index }} ? 0 : -1"
                @click="activeTab = {{ $index }}"
                :class="activeTab === {{ $index }} ? '{{ $activeClasses[$variant] }}' : '{{ $inactiveClasses[$variant] }}'"
                class="{{ $btnBase }} {{ $btnVariants[$variant] }}"
            >
                {{ $tab }}
            </button>
        @endforeach
    </div>

    {{-- Tab Panels (Slot) --}}
    <div class="mt-4">
        {{ $slot }}
    </div>
</div>
