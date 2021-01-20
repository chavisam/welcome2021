<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cosas a reparar') }} 
                    </h2>
</x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


            <script>
window.addEventListener('openModal', event => {
  $("#exampleModal").modal('show');
  
})
</script>

<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Quién notifica
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Objeto a reparar
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              <a href="{{ route('listado_planta') }}" style="color: blue;">Planta</a>
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Urgencia
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Estado
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              <a href="{{ route('listado_fecha') }}" style="color: blue;">Fecha Límite</a>
              </th>
              <th scope="col" class="relative px-6 py-3">
                  
               
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">

          @foreach($reparaciones as $reparacion)
  
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                   <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                  {{ $reparacion->user }}
                    </div>

                    <div class="text-sm text-gray-500">
                    
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{$reparacion->reparacion }}</div>
                <div class="text-sm text-gray-500"></div>
            
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
              {{$reparacion->planta }}
             
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{$reparacion->urgencia }}
              </td>

              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              <?php if($reparacion->estado=="ESTROPEADO"){ ?>
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-white-800">
                        Pendiente <?php } else{ ?> 
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        Reparado <?php } ?>
                        <br>
                        <?php echo date('d-m-Y', strtotime($reparacion->updated_at)) ?>
                </span>
              </td>

              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              <?php echo date('d-m-Y', strtotime($reparacion->fecha_limite)) ?>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
              <button wire:click="estado({{$reparacion->id}})" class="w-full inline-flex justify-center py-2 mb-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
              ESTADO</button>
              <button class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm mb-2 text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
              <a href="{{ route('editar', ['modif' => $reparacion->id]) }}" style="color: white;">Editar </a></button>

              @if(Auth::user()->name == 'Eva')
              <button wire:click="selectItem({{$reparacion->id}})" class="btn btn-danger w-100" >
              Eliminar</button>
             
              @endif
              </td>
            </tr>

            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar incidencia</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Seguro que quieres eliminar esta incidencia?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" wire:click="delete" class="btn btn-danger">ELIMINAR</button>
      </div>
    </div>
  </div>
</div>
           
@endforeach
    
         
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
