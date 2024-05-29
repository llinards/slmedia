<x-layouts.app>
    <section id="hero" class="flex justify-center items-center min-h-screen">
        <div class="relative px-3 py-2 md:px-6 md:py-4 diagnole-borders">
            <div class="hero-title">
                <h1 class="uppercase pr-1 md:pr-2 whitespace-nowrap overflow-hidden">
                    Vēlos mājaslapu...
                </h1>
            </div>
            <div class="hero-cta text-center">
                <x-primary-button :type="'link'" :class="'mt-5 md:mt-10 uppercase'" href="#proposal">
                    Sākam
                </x-primary-button>
            </div>
        </div>
    </section>
    <section id="proposal" class="flex justify-center items-center min-h-screen">
        <livewire:submit-proposal/>
    </section>
</x-layouts.app>
