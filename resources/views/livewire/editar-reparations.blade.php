<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Reparación') }} 
                    </h2>
</x-slot>

<div class="mt-10 sm:mt-0  flex justify-center">
  @livewire('add-form',['modif' => $modif])
</div>