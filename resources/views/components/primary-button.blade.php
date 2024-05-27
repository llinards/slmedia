<button {{ $attributes->merge(['class' => 'bg-black rounded-lg px-8 py-3 text-sm md:text-base font-bold']) }}>
    {{ $slot }}
</button>
