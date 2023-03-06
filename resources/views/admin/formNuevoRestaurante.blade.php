<x-app-layout>
    <div class="py-12 ">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden  sm:rounded-lg">

                <div class="w-50  mx-auto">
                    <h3 class='text-lg text-green-500'>Nuevo Restaurante</h3>
                    
                    <form class="bg-white  rounded px-8 pt-6 pb-8 mb-4" method='POST' action='/restaurante/store' enctype="multipart/form-data">
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
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="direccion">
                                Direccion
                            </label>
                            <input
                                class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none "
                                id="direccion" name="direccion" type="text" value="{{ old('direccion') }}" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="ciudad">
                                Ciudad
                            </label>
                            <input
                                class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none "
                                id="ciudad" name="ciudad" type="text" value="{{ old('ciudad') }}" >
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="telefono">
                                Telefono
                            </label>
                            <input
                                class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none "
                                id="telefono" name="telefono" type="number" value="{{ old('telefono') }}" >
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="latitud">
                                Latitud
                            </label>
                            <input
                                class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none "
                                id="latitud" name="latitud" type="text" value="{{ old('latitud') }}"  >
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="longitud">
                                Longitud
                            </label>
                            <input
                                class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none "
                                id="longitud" name="longitud" type="number" value="{{ old('longitud') }}"  >
                        </div>



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