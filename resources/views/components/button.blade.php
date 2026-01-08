@props([
    'icon' => null,
    'variant' => 'primary',
    'size' => 'md',
    'href' => null
])

@php
    // Logika pemilihan tag: jika ada href maka jadi <a>, jika tidak jadi <button>
    $tag = $href ? 'a' : 'button';
    // Default class dasar
    $baseClass = "inline-flex items-center justify-center gap-2 font-semibold rounded-2xl transition-all duration-200 active:scale-95 cursor-pointer";
    // Logika penggabungan class kustom
    $customClasses = $attributes->get('class');
    $finalClass = $baseClass . " " . 
                 (str_contains($customClasses, 'bg-') ? "" : "$variantClass ") . 
                 (str_contains($customClasses, 'px-') || str_contains($customClasses, 'py-') ? "" : "$sizeClass ");
@endphp

<{{ $tag }} 
    {{ $href ? "href=$href" : "type=button" }}
    {{ $attributes->merge(['class' => $finalClass]) }}
>
    @if($icon)
        <i class="ti ti-{{ $icon }} {{ $size === 'sm' ? 'text-base' : 'text-lg' }}"></i>
    @endif
    
    @if($slot->isNotEmpty())
        <span>{{ $slot }}</span>
    @endif
</{{ $tag }}>