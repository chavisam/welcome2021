<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Reparación') }} 
                    </h2>
</x-slot>
<div class="mt-10 sm:mt-0  flex justify-center w-1/2">
  <div class="container center">
    <div class="mt-5 md:mt-0">

      <form  wire:submit.prevent="submit">
      
        <div class="shadow overflow-hidden sm:rounded-md ">

          <div class="px-4 py-5 bg-white sm:p-6">

      
              <div class="col-span-8 sm:col-span-3 mx-auto">
                <label for="reparacion" class="block text-sm font-medium text-gray-700">REPARACIÓN: </label>
                <textarea  wire:model="reparacion" name="reparacion" id="reparacion" cols="30" rows="10" class="px-5 py-5 border mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                @error('reparacion') <span class="text-red-700 error">{{ $message }}</span> @enderror
              </div>
            <input type="hidden" name="user" wire:model="user" value="{{ Auth::user()->name }}">
<br>
              <div class="col-span-6 sm:col-span-3">
                <label for="planta" class="block text-sm font-medium text-gray-700"  >PLANTA: </label>
                <select id="planta" wire:model="planta" name="planta"  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option  selected >Selecciona una opción...</option>
                  <option value="GARAJE">GARAJE</option>
                  <option value="BAJA">BAJA</option>
                  <option value="SEGUNDA">SEGUNDA</option>
                  <option value="TERCERA">TERCERA</option>
                </select>
                @error('planta') <span class="text-red-700 error">{{ $message }}</span> @enderror
              </div>
<br>
<div class="col-span-6 sm:col-span-3">
                <label for="urgencia" class="block text-sm font-medium text-gray-700">URGENCIA: </label>
                <select id="urgencia" wire:model="urgencia" name="urgencia"  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option selected>Selecciona una opción...</option>
                  <option value="BAJA">BAJA</option>
                  <option value="MEDIA">MEDIA</option>
                  <option value="ALTA">ALTA</option>
                </select>
                @error('urgencia') <span class="text-red-700 error">{{ $message }}</span> @enderror
              </div>
<br>
              <div class="col-span-6 sm:col-span-3">
                <label for="fecha_limite" class="block text-sm font-medium uppercase text-gray-700" >Fecha límite: </label>
             
               <input type="date"  wire:model="fecha_limite" name="fecha_limite" id="fecha_limite" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
               @error('fecha_limite') <span class="text-red-700 error">{{ $message }}</span> @enderror
              </div>
<br>
             
        
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
          @if($modif)
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
               MODIFICAR
              @else
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
               CREAR
              @ENDIF
            </button>

            <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <a href="{{ route('listado') }}"> CANCELAR</a>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>