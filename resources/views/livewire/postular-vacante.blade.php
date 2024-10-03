<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center item-center">
    <h3 class="text-center text-2xl font-bold my-4">Postularme a sta vacante</h3>

    <form class="w-96 mt-5" action="">
        <div class="mb-4">
            <x-input-label for="cv" :value="__('Curriculum o Hoja de Vida')" />
            <x-text-input 
                id="cv" 
                class="block mt-1 w-full" 
                type="file" 
                accept=".pdf"
            />
        </div>

        <x-primary-button class="my-5 dark:bg-lime-600 dark:text-white dark:hover:bg-lime-700 w-full justify-center">
            {{ __('Postularme') }}
        </x-primary-button>
    </form>
</div>
