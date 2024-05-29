@php
    $classes =
        "inline-block rounded-lg bg-black px-6 py-2 text-sm font-bold text-white hover:bg-gray-800 focus:outline-none focus:ring focus:ring-gray-400 active:bg-gray-600 md:px-8 md:py-3 md:text-base";
@endphp

@if ($type === "link")
    <a {{ $attributes->merge(["class" => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(["class" => $classes]) }}>
        {{ $slot }}
    </button>
@endif
