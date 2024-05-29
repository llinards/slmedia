<x-layouts.app>
    <section id="hero" class="flex min-h-screen items-center justify-center">
        <div class="diagnole-borders relative px-3 py-2 md:px-6 md:py-4">
            <div class="hero-title">
                <h1 class="overflow-hidden whitespace-nowrap pr-1 uppercase md:pr-2">Vēlos mājaslapu...</h1>
            </div>
            <div class="hero-cta text-center">
                <x-primary-button :type="'link'" :class="'mt-5 md:mt-10 uppercase'" href="#proposal">
                    Sākam
                </x-primary-button>
            </div>
        </div>
    </section>
    <section id="proposal" class="flex min-h-screen items-center justify-center">
        <livewire:submit-proposal />
    </section>
</x-layouts.app>
