


<div>
   live wire component Counter {{ $name }}

   <input type="text" wire:model.debounce.1000ms="name">
   <p>My Message: {{$message}}</p>
   <p>Hoy es : {{ $date }}</p>

   <p> this is my counter component {{ $count }}</p>
   <button wire:click="increment">ADD</button>

</div>
