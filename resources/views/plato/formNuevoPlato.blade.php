<x-app-layout>
    <div class="py-12 ">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden  sm:rounded-lg">

                <div class="w-50  mx-auto">
                    <h3 class='text-lg text-green-500'>Nuevo Plato</h3>
        
                        <form class="bg-white  rounded px-8 pt-6 pb-8 mb-4" method='POST' action='/plato/store/{{$restaurantes->id}}' enctype="multipart/form-data">
                            @csrf

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">
                                    Nombre
                                </label>
                                <input
                                    class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none "
                                    id="nombre" name="nombre" type="text" value="{{ old('nombre') }}" required>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">
                                    Descripcion
                                </label>
                                <input
                                    class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none "
                                    id="descripcion" name="descripcion" type="text" value="{{ old('descripcion') }}" required>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="foto">
                                    Foto
                                </label>
                                <input
                                    class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none "
                                    id="foto" name="foto" type="file" value="{{ old('foto') }}" required>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="precio">
                                    Precio
                                </label>
                                <input
                                    class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none "
                                    id="precio" name="precio" type="number" value="{{ old('precio') }}" required>
                            </div>

                            <input id="restaurante_id" name="restaurante_id" type="hidden" value="{{$restaurantes->id}}" required>


                            <div class="flex items-center justify-between">
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded focus:outline-none "
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