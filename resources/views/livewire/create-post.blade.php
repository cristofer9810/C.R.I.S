<div>
    <x-jet-danger-button wire:click="$set('open', true)">
        nueva imagen
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            crear imagen
        </x-slot>

        <x-slot name="name">
           {{--  <div class="mb-4">
                <x-jet-label value="Nombre de la imagen" />
                <x-jet-input type="text" class="w-full" wire:model="title" />
            </div> --}}
        </x-slot>


        <x-slot name="slug">
           {{--  <div class="mb-4">
                <x-jet-label value="Título del comunicado" />
                <x-jet-input type="text" class="w-full" wire:model="title" />
            </div> --}}
        </x-slot>

        <x-slot name="footer">
        {{--     <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button>
                Crear Categoria
            </x-jet-danger-button>
        </x-slot> --}}
    </x-jet-dialog-modal>
</div>
