{{--
    ui/input.blade.php — HIMSI UI System
    ======================================
    Props:
    @prop string $name       Nama dan ID input                                    (wajib)
    @prop string $label      Teks label                                           (default: null)
    @prop string $type       Tipe input: text, email, password, dll               (default: text)
    @prop string $state      default|error|success|disabled                       (default: default)
    @prop string $helper     Teks bantuan di bawah input                          (default: null)
    @prop string $error      Pesan error (jika diisi, otomatis state = error)     (default: null)
    @prop string $iconLeft   Nama icon Phosphor di sebelah kiri                   (default: null)
    @prop string $iconRight  Nama icon Phosphor di sebelah kanan                  (default: null)
--}}
@props([
    'name',
    'label'     => null,
    'type'      => 'text',
    'state'     => 'default',
    'helper'    => null,
    'error'     => null,
    'iconLeft'  => null,
    'iconRight' => null,
])

@php
    // Jika ada error message, otomatis ubah state ke error
    if ($error) {
        $state = 'error';
    }

    $baseInput = 'w-full rounded-lg border text-sm transition-all focus:outline-none focus:ring-2 disabled:cursor-not-allowed disabled:bg-neutral-50 disabled:text-neutral-500';

    // Padding jika ada icon
    $paddingClass = 'py-2.5 px-3';
    if ($iconLeft)  $paddingClass .= ' pl-10';
    if ($iconRight) $paddingClass .= ' pr-10';

    $stateClasses = [
        'default' => 'border-neutral-300 bg-white focus:border-primary-500 focus:ring-primary-500/20',
        'error'   => 'border-red-300 bg-red-50/50 text-red-900 placeholder:text-red-300 focus:border-red-500 focus:ring-red-500/20',
        'success' => 'border-green-300 bg-green-50/50 text-green-900 placeholder:text-green-300 focus:border-green-500 focus:ring-green-500/20',
        'disabled'=> 'border-neutral-200 bg-neutral-100 text-neutral-500',
    ];

    $inputClasses = implode(' ', [$baseInput, $paddingClass, $stateClasses[$state] ?? $stateClasses['default']]);

    $id = $name;
    $helperId = $id . '-helper';
    $errorId = $id . '-error';
@endphp

<div class="flex flex-col gap-1.5 w-full">
    {{-- Label --}}
    @if($label)
        <label for="{{ $id }}" class="text-sm font-medium text-neutral-900">
            {{ $label }}
            @if($attributes->has('required'))
                <span class="text-red-500" aria-hidden="true">*</span>
            @endif
        </label>
    @endif

    {{-- Input Wrapper --}}
    <div class="relative flex items-center">
        {{-- Icon Left --}}
        @if($iconLeft)
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="ph-fill ph-{{ $iconLeft }} text-lg {{ $state === 'error' ? 'text-red-400' : ($state === 'success' ? 'text-green-400' : 'text-neutral-400') }}"></i>
            </div>
        @endif

        {{-- Input Field --}}
        <input
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $id }}"
            {{ $attributes->merge(['class' => $inputClasses]) }}
            @if($state === 'disabled') disabled @endif
            @if($state === 'error') aria-invalid="true" @endif
            aria-describedby="{{ $error ? $errorId : ($helper ? $helperId : '') }}"
        >

        {{-- Icon Right --}}
        @if($iconRight)
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <i class="ph-fill ph-{{ $iconRight }} text-lg {{ $state === 'error' ? 'text-red-400' : ($state === 'success' ? 'text-green-400' : 'text-neutral-400') }}"></i>
            </div>
        @endif
    </div>

    {{-- Error Message --}}
    @if($error)
        <p id="{{ $errorId }}" class="text-xs text-red-600 font-medium flex items-center gap-1">
            <i class="ph-fill ph-warning-circle text-sm"></i>
            {{ $error }}
        </p>
    {{-- Helper Text --}}
    @elseif($helper)
        <p id="{{ $helperId }}" class="text-xs text-neutral-500">
            {{ $helper }}
        </p>
    @endif
</div>
