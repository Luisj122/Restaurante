<x-app-layout>
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
                            <form method="POST" action='/repartidor/detalle/{{ Auth::user()->id }}' enctype="multipart/form-data">
                            @csrf
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" value="{{ $repartidores->nombre }}" required autofocus autocomplete="nombre" />
                                    </td>
                                    <td class="px-6 py-4">
                                        <x-text-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" value="{{ $repartidores->apellido }}" required autofocus autocomplete="apellido" />

                                    </td>
                                    <td class="px-6 py-4">
                                        <x-text-input id="dni" class="block mt-1 w-full" type="text" name="dni" value="{{ $repartidores->dni }}" required autofocus autocomplete="dni" />
                                    </td>
                                    <td class="px-6 py-4">
                                        <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" value="{{ $repartidores->email }}" required autofocus autocomplete="email" /> 
                                    </td>
                                    <td class="px-6 py-4">
                                        <x-text-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" value="{{ $repartidores->direccion }}" required autofocus autocomplete="direccion" /> 
                                    </td>
                                    <td class="px-6 py-4">
                                        <x-text-input id="ciudad" class="block mt-1 w-full" type="text" name="ciudad" value="{{ $repartidores->ciudad }}" required autofocus autocomplete="ciudad" /> 
                                    </td>
                                    <td class="px-6 py-4">
                                        <x-text-input id="telefono" class="block mt-1 w-full" type="number" name="telefono" value="{{ $repartidores->telefono }}" required autofocus autocomplete="telefono" />
                                    </td>
                                    <td class="px-6 py-4">
                                        <x-text-input id="salario" class="block mt-1 w-full" type="number" name="salario" value="{{ $repartidores->salario }}" required autofocus autocomplete="salario" />
                                    </td>
                                    <td class="px-6 py-4">
                                        <select name='estado' id='estado'>
                                            <option value="{{$repartidores->estado}}">{{$repartidores->estado}}</option>;
                
                                            @if ($repartidores->estado == "ocupado")
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
                                    <a href="/repartidor/detalle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                    </svg>
                                    </a>
                                        
                                </td>
                            </tr>
                            

                        </tbody>
                    </table>

                </div>


            </div>
        </div>
    </div>

</x-app-layout>