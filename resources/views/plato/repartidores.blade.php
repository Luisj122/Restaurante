<x-app-layout>
    <x-slot name="header">
        <a href="/repartidor/nuevo/nuevo/{{$restaurantes->id}}"><button type='button' class="bg-blue-400 hover:bg-blue-600 text-black py-2 px-4 rounded">Nuevo Repartidor</button></a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                                        
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nombre
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        apellido
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        dni
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        direccion
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ciudad
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        telefono
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        salario
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        estado
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        accion
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $value)
                                    @if ($value->rol == "repartidor")
                                    <form method="POST" action='/repartidor/update/{{ $value->id }}' enctype="multipart/form-data">
                                        @csrf
                                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                            <td class="px-6 py-4">
                                                <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" value="{{ $value->nombre }}" required autofocus autocomplete="nombre" />
                                            </td>
                                            <td class="px-6 py-4">
                                                <x-text-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" value="{{ $value->apellido }}" required autofocus autocomplete="apellido" />

                                            </td>
                                            <td class="px-6 py-4">
                                                <x-text-input id="dni" class="block mt-1 w-full" type="text" name="dni" value="{{ $value->dni }}" required autofocus autocomplete="dni" />
                                            </td>
                                            <td class="px-6 py-4">
                                                <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" value="{{ $value->email }}" required autofocus autocomplete="email" /> 
                                            </td>
                                            <td class="px-6 py-4">
                                                <x-text-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" value="{{ $value->direccion }}" required autofocus autocomplete="direccion" /> 
                                            </td>
                                            <td class="px-6 py-4">
                                                <x-text-input id="ciudad" class="block mt-1 w-full" type="text" name="ciudad" value="{{ $value->ciudad }}" required autofocus autocomplete="ciudad" /> 
                                            </td>
                                            <td class="px-6 py-4">
                                                <x-text-input id="telefono" class="block mt-1 w-full" type="number" name="telefono" value="{{ $value->telefono }}" required autofocus autocomplete="telefono" />
                                            </td>
                                            <td class="px-6 py-4">
                                                <x-text-input id="salario" class="block mt-1 w-full" type="number" name="salario" value="{{ $value->salario }}" required autofocus autocomplete="salario" />
                                            </td>
                                            <td class="px-6 py-4">
                                                <select name='estado' id='estado'>
                                                    <option value="{{$value->estado}}">{{$value->estado}}</option>;
                        
                                                    @if ($value->estado == "ocupado")
                                                        <option value='libre'>Libre</option>;
                                                    @else
                                                        <option value='ocupado'>Ocupado</option>;
                                                    @endif
                                                    
                                                    
                                                </select>
                                            </td>
                                            <td>
                                                <button type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                                        <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                                    </svg>
                                                </button> 
                                                
                                            </form>
                                                <a href="/repartidor/borrar/{{$value->id}}/{{$restaurantes->id}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                
                                    @endif
                                
                                @endforeach
                            </tbody>
                        </table>

                    </div>


            </div>
        </div>
    </div>

</x-app-layout>