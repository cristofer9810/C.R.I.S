<div>
    

    {{-- <x-jet-danger-button wire:click="$set('open', true)">
        Crear usuario
    </x-jet-danger-button> --}}

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            crear nuevo usuario
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label value="Nombre completo" />
                <x-jet-input type="text" class="w-full"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Email" />
                <x-jet-input type="text" class="w-full"/>
            </div>          

        </x-slot>

        <x-slot name="footer">

        </x-slot>

    </x-jet-dialog-modal>

</div>
