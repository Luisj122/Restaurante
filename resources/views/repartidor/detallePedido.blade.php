<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                </th>
                <th scope="col" class="px-6 py-3">
                    cliente
                </th>
                <th scope="col" class="px-6 py-3">
                    Repartidor
                </th>
                <th scope="col" class="px-6 py-3">
                    estado
                </th>
                <th scope="col" class="px-6 py-3">
                    Accion
                </th>

            </tr>
        </thead>
        <tbody>            
            

            @foreach($pedidos as $value)

                @if ($value->repartidor_id == $repartidores->id)
                    
                
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                      
                        <td class="px-6 py-4">
                            @foreach ($users as $user)
                                @if ($user->id == $value->cliente_id)
                                    {{$user->nombre}}
                                @endif
                            @endforeach
                        </td>
                        <td class="px-6 py-4">
                            @foreach ($users as $user)
                                @if ($user->id == $value->repartidor_id)
                                    {{$user->nombre}}
                                @endif
                            @endforeach
                        </td>
                        <td>  
                            <form method="POST" action='/pedido/update/estado/{{ $value->id }}' enctype="multipart/form-data">
                                @csrf 
                                    <select name='estado' id='estado'>
                                        <option value="{{$value->estado}}">{{$value->estado}}</option>;
                                        <option value='finalizado'>Finalizado</option>;
                                        <option value='entregado'>Entregado</option>;
                                        <option value='cancelado'>Cancelado</option>;
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
                            <a href="/pedido/borrar/{{$value->id}}">
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