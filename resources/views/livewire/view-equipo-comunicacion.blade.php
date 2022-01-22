<x-slot name="header">
    <h1 class="text-gray-900">CRUD EQUIPOS DE COMUNICACION</h1>
</x-slot>
<div class="py-12"> 
    <div class="max-w-7x1 mx-auto sm:px6 lg:px-8">    
        <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg px-4 py-4">
        
        @if(session()->has('message'))
            <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <h4>{{ session('message')}}</h4>
                    </div>
                </div>
            </div>
        @endif
        
        <button wire:click="crear()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3" >Nuevo</button>
            @if($modal)
                @include('livewire.crear-equipo-comunicacion')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2">id</th>
                        <th class="px-4 py-2">Nombre</th> 
                        <th class="px-4 py-2">Estado</th> 
                        <th class="px-4 py-2">ACCIONES</th>  
                    </tr>
                </thead>
                <tbody>
                    @foreach($equipos as $equipo)
                    <tr>    
                        <td class="border px-4 py-2">{{ $equipo->id }}</td>
                        <td class="border px-4 py-2">{{ $equipo->nombre }}</td> 
                        <td class="border px-4 py-2">{{ $equipo->estado }}</td>  
                        <td class="border px-4 py-2 text-center">
                            <button wire:click="editar({{$equipo->id}})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
                            <button wire:click="borrar({{$equipo->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>                
            </table>

        </div>
    </div>
</div> 