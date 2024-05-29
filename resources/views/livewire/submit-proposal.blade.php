<div class="diagnole-borders relative px-3 py-2 md:px-6 md:py-4">
    <form wire:submit="save">
        @if($firstView)
            <h1>Kādas ir Tavas vēlmes?</h1>
            <fieldset>
                <div class="mt-6 space-y-6">
                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input id="landingPage" value="landingPage" wire:model=""
                                   type="checkbox"
                                   class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="landingPage" class="font-medium text-black">Piezemēšanās (landing)
                                lapa</label>
                        </div>
                    </div>
                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input id="q1WebsiteBlog" value="q1WebsiteBlog" wire:model="q1Needs"
                                   type="checkbox"
                                   class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="q1WebsiteBlog" class="font-medium text-black">Mājaslapa / blogs</label>
                        </div>
                    </div>
                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input id="q1Ecommerce" value="q1Ecommerce" wire:model="q1Needs"
                                   type="checkbox"
                                   class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="q1Ecommerce" class="font-medium text-black">Internetveikals</label>
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="q1SomethingElse" class="block text-sm font-medium leading-6 text-black">Kaut kas
                            cits?</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-gray-600 sm:max-w-md">
                                <input type="text" wire:model="q1OtherNeeds" id="q1SomethingElse"
                                       class="block flex-1 border-0 bg-transparent text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div>
                <x-primary-button type="submit" class="mt-5 md:mt-10 uppercase">
                    Tālāk
                </x-primary-button>
            </div>
        @elseif($secondView)

        @endif
    </form>
</div>
