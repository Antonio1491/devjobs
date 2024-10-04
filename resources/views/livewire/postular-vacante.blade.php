<div class="bg-gray-700 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4 text-white">Postularme a sta vacante</h3>

    @if (session()->has('message'))
        <div class="uppercase border border-green-600 bg-green-100 text-green-600">
            {{ sessio('mensaje') }}
        </div>
    @endif

    <form class="w-96 mt-5" wire:submit.prevent='postularme'>
        <div class="mb-4">
            <x-input-label for="cv" :value="__('Curriculum o Hoja de Vida (PDF)')" />
            <x-text-input 
                id="cv" 
                class="block mt-1 w-full" 
                type="file" 
                wire:model="cv"
                accept=".pdf"
            />
        </div>

        @error('cv')
            <x-input-error :messages="$errors->get('cv')" class="mt-2" />
        @enderror

        <x-primary-button class="my-5 dark:bg-lime-600 dark:text-white dark:hover:bg-lime-700 w-full justify-center">
            {{ __('Postularme') }}
        </x-primary-button>
    </form>
</div>
