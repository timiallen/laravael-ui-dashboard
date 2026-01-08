@props([
    'icon' => null,
    'variant' => 'primary',
    'size' => 'md',
    'href' => null
])

@php
    // Penentuan Tag
    $tag = $href ? 'a' : 'button';

    // Definisi Class berdasarkan Variant
    $variantClasses = [
        'primary' => 'bg-indigo-600 text-white hover:bg-indigo-700',
        'secondary' => 'bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800',
        'danger' => 'bg-rose-500 text-white hover:bg-rose-600',
        'ghost' => 'bg-transparent hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-600 dark:text-gray-400',
    ];

    // Definisi Class berdasarkan Size
    $sizeClasses = [
        'sm' => 'px-3 py-1.5 text-xs',
        'md' => 'px-5 py-2.5 text-sm',
        'lg' => 'px-6 py-3.5 text-base',
    ];

    $variantClass = $variantClasses[$variant] ?? $variantClasses['primary'];
    $sizeClass = $sizeClasses[$size] ?? $sizeClasses['md'];

    // Base Class Dasar
    $baseClass = "inline-flex items-center justify-center gap-2 font-bold rounded-2xl transition-all duration-200 active:scale-95 cursor-pointer disabled:opacity-50 disabled:pointer-events-none";
    
    // Gabungkan class kustom dari atribut
    $customClasses = $attributes->get('class');
    $finalClass = $baseClass . " " . 
                 (str_contains($customClasses, 'bg-') ? "" : "$variantClass ") . 
                 (str_contains($customClasses, 'px-') || str_contains($customClasses, 'py-') ? "" : "$sizeClass ");
@endphp

<{{ $tag }} 
    @if($href)
        href="{{ $href }}"
    @else
        {{-- Mengambil type dari atribut, defaultnya 'button' --}}
        type="{{ $attributes->get('type', 'button') }}"
    @endif
    {{ $attributes->merge(['class' => $finalClass]) }}
>
    @if($icon)
        <i class="ti ti-{{ $icon }} {{ $size === 'sm' ? 'text-base' : 'text-lg' }}"></i>
    @endif
    
    @if($slot->isNotEmpty())
        <span>{{ $slot }}</span>
    @endif
</{{ $tag }}>