<div> 
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            @forelse ($vacantes as $vacante)
                
                <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between md:items-center">
                    <div class="space-y-3">
                        <a href="#" class="text-xl font-bold">
                            {{ $vacante->titulo }}
                        </a>
                        <p class="text-sm text-gray-400 font-bold">
                            {{ $vacante->empresa }}
                        </p>
                        <p class="text-sm text-gray-500">
                            Últim día: {{ $vacante->ultimo_dia->format('d/m/Y') }}
                        </p>
                    </div>

                    <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                        <a 
                            href=""
                            class="bg-slate-600 py-2 px-4 rounded-lg text-white text-xs font-bold text-center uppercase"
                        >Candidatos</a>
                        <a 
                            href="{{ route('vacantes.edit', $vacante->id) }}"
                            class="bg-blue-600 py-2 px-4 rounded-lg text-white text-xs font-bold text-center uppercase"
                        >Editar</a>
                        <a 
                            wire:click="$dispatch('prueba',{ vacante_id: {{ $vacante->id }} } )"
                            class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold text-center uppercase"
                        >Eliminar</a>
                    </div>

                </div>
        
            @empty
            <p class="p-3 text-center text-sm text-gray-500 font-bold">No hay vacantes disponibles</p>
        
        @endforelse
    </div>


    <div class=" mt-10">
        {{ $vacantes->links() }}
    </div>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('prueba', vacanteId => {
            alert('Eliminar vacante ' + vacanteId)
       });
    });

        // Swal.fire({
        // title: "¿Eliminar Vacante?",
        // text: "Una vacante eliminada no se puede recuperar",
        // icon: "warning",
        // showCancelButton: true,
        // confirmButtonColor: "#3085d6",
        // cancelButtonColor: "#d33",
        // confirmButtonText: "Si, ¡Eliminar!",
        // cancelButtonText: "Cancelar"
        // }).then((result) => {
        // if (result.isConfirmed) {
        //     Swal.fire({
        //     title: "Deleted!",
        //     text: "Your file has been deleted.",
        //     icon: "success"
        //     });
        //     }
        // });
    </script>


@endpush