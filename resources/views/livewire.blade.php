
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Counter') }} 
                    </h2>
</x-slot>


@extends('layouts.app')



@section('content')

    @livewire('counter',['name'=> 'Chavi'])

@endsection