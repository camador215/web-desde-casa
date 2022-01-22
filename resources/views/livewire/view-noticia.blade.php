<x-slot name="header">
    <h1 class="text-gray-900">CRUD NOTICIA</h1>
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
                @include('livewire.crear-noticia')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2">id</th>
                        <th class="px-4 py-2">Titulo</th>
                        <th class="px-4 py-2">Fecha</th>  
                        <th class="px-4 py-2">Contenido</th>  
                        <th class="px-4 py-2">Sector</th>  
                        <th class="px-4 py-2">Usuario</th>  
                        <th class="px-4 py-2">ACCIONES</th>  
                    </tr>
                </thead>
                <tbody>
                    @foreach($noticias as $noticia)
                    <tr>    
                        <td class="border px-4 py-2">{{ $noticia->id }}</td>
                        <td class="border px-4 py-2">{{ $noticia->titulo }}</td>
                        <td class="border px-4 py-2">{{ $noticia->fecha }}</td>
                        <td class="border px-4 py-2">{{ $noticia->contenido }}</td>
                        <td class="border px-4 py-2">{{ $noticia->sector_id}}</td>
                        <td class="border px-4 py-2">{{ $noticia->usuario_id}}</td>
                        <td class="border px-4 py-2 text-center">
                            <button wire:click="editar({{$noticia->id}})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
                            <button wire:click="borrar({{$noticia->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>                
            </table>

        </div>
    </div>
</div> 