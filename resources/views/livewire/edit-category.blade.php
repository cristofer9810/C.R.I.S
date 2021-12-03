<div>
   
    <x-jet-danger-button wire:click="$set('open', true)">
        crear nueva categoria
    </x-jet-danger-button>


    <x-jet-dialog-modal wire:model="open">
        <x-slot name="name">
            crear categoria
        </x-slot>
        
        <x-slot name="name">
       {{--      <div class="mb-4">
                <x-jet-label value="Nombre de la categoria" />
                <x-jet-input type="text" class="w-full" wire:model="name"/>
            </div>  --}}        
            
        </x-slot>
       {{--  <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button>
                Crear Categoria
            </x-jet-danger-button>
        </x-slot> --}}
    </x-jet-dialog-modal>

</div>
