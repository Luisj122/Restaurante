<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="w-96 max-w-xs mx-auto ">
                        <h3 class='text-lg text-green-500'>Detalle del pedido</h3>
                        
                        <form class="bg-white rounded px-8 pt-6 pb-8 mb-4" method='POST' action='/pedido/store/{{$platos->id}}' enctype="multipart/form-data">
                            @csrf

                            <div class="mb-4">
                                <label for=""> <img src="{{ asset($platos->foto) }}" class="img-fluid " /></label><br>
                                <label for="">Cliente: {{$users->nombre}}</label><br>
                                <label>Plato: {{$platos->nombre}}</label><br>
                                <label for="">Precio: {{$platos->precio}} €</label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="cliente_id" name="cliente_id" type="hidden" value="{{$users->id}}">
                            </div>

                            <div class="mb-4">
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="restaurante_id" name="restaurante_id" type="hidden" value="{{ $platos->retaurante_id }}">
                            </div>

                            <div class="mb-4">
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="repartidor_id" name="repartidor_id" type="hidden" value="10">
                            </div>

                            <div class="mb-4">
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="estado" name="estado" type="hidden" value="recibido">
                            </div>

                


                            <div class="flex items-center justify-between">
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded focus:outline-none"
                                    type="submit">
                                    Comprar
                                </button>
                            </div>
                        </form>
                    </div>


            </div>
        </div>
    </div>
</x-app-layout>