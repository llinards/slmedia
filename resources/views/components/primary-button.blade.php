@php
    $classes = 'bg-black hover:bg-gray-800 active:bg-gray-600 focus:outline-none focus:ring focus:ring-gray-400 text-white inline-block rounded-lg px-6 py-2 md:px-8 md:py-3 text-sm md:text-base font-bold';
@endphp

@if($type === 'link')
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
