<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Usuarios') }} 
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Nombre
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Cargo
              </th>

             <th scope="col" class="relative px-6 py-3">
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach($users as $user)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="{{ $user->profile_photo_url  }}" alt="foto">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      {{$user->name}}
                    </div>
                    <div class="text-sm text-gray-500">
                    {{$user->email }}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{$user->cargo}}</div>
               
            
              </td>

              
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
              <x-jet-button wire:click="DeleteShowModal({{ $user->id }})">
                    {{ __('ELIMINAR USUARIO') }}
                </x-jet-button>            
              </td>
            </tr>       

      @endforeach
    
            {{$users->links()}}
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

  <!-- Delete User Confirmation Modal -->
  <x-jet-dialog-modal wire:model="modalConfirmDeleteVisible">
            <x-slot name="title">
                {{ __('Eliminar usuario') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Está seguro de que desea eliminar el usuario  ') }}  {{$user->name}}

            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled">
                    {{ __('Cancelar') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="DeleteUser()" wire:loading.attr="disabled">
                    {{ __('Eliminar Usuario') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
