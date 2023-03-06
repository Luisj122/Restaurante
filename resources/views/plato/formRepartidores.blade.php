<x-app-layout>
    <div class="py-12 ">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden  sm:rounded-lg">

                <div class="w-50  mx-auto">
                    <h3 class='text-lg text-green-500'>Nuevo Repartidor</h3>
        
                    <form class="bg-white rounded px-8 pt-6 pb-8 mb-4" method='POST' action='/repartidor/store/{{$restaurantes->id}}' enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">
                                Nombre
                            </label>
                            
                            <select name='id' id='id'>
                                

                                @foreach ($users as $value)
                                    
                                    @if ($value->rol != "repartidor" && $value->rol != "admin")
                                    <option value="{{$value->id}}">{{$value->nombre}}</option>;
                                    @endif
                                @endforeach
                                
                                
                            </select>

                            <input id="rol" type="hidden" name="rol" value="repartidor"/>

                            <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                                Salario
                            </label>
                            <input
                                class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" 
                                id="salario" name="salario" type="number" value="{{ old('salario') }} "  style="width : 150px" required>


                            <input id="estado" type="hidden" name="estado" value="libre"/>
                            
                        </div>

                        <div class="flex items-center justify-between">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded focus:outline-none "
                                type="submit">
                                Crear
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>