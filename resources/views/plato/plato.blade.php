<x-app-layout>
    <x-slot name="header">
            <a href="/plato/nuevo/{{$restaurantes->id}}"><button type='button' class="bg-blue-400 hover:bg-blue-600 text-black py-2 px-4 rounded">Nuevo</button></a>

            <a href="/pedido/detalle/{{$restaurantes->id}}"><button type='button' class="bg-blue-400 hover:bg-blue-600 text-black py-2 px-4 rounded">Pedidos</button></a>

            <a href="/repartidor/{{$restaurantes->id}}"><button type='button' class="bg-blue-400 hover:bg-blue-600 text-black py-2 px-4 rounded">Repartidores</button></a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Descripcion
                </th>
                {{-- <th scope="col" class="px-6 py-3">
                    Foto
                </th> --}}
                <th scope="col" class="px-6 py-3">
                    Precio
                </th>
                <th scope="col" class="px-6 py-3">
                    Accion
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach($platos as $value)


            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium  ">
                    {{ $value->nombre }}
                </th>
                <td class="px-6 py-4">
                    {{ $value->descripcion }}
                </td>
                {{-- <td class="px-6 py-4">
                    <img src="{{ asset($value->foto) }}" class="card-img-top">
                </td> --}}
                <td class="px-6 py-4">
                    {{ $value->precio }}
                </td>
                <td class="px-6 py-4">
                    <a href="/plato/borrar/{{$value->id}}/{{$restaurantes->id}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                      </svg>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>


            </div>
        </div>
    </div>

</x-app-layout>