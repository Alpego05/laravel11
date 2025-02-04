<section class="">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap -mx-6">
            <div class="w-full px-6">
                <div class="max-w-full overflow-x-auto">

                    <button class="bg-teal-600 text-white px-6 py-3 rounded-md hover:bg-teal-500 my-6"
                        wire:click="openCreateModal">
                        Nuevo
                    </button>

                    <table class="table-auto w-full shadow-lg rounded-lg">
                        <thead>
                            <tr class="bg-teal-600 text-center">
                                <th class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-4 lg:py-6 px-4 border-l border-transparent">
                                    Titulo
                                </th>
                                <th class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-4 lg:py-6 px-4">
                                    Descripcion
                                </th>
                                <th class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-4 lg:py-6 px-4">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                    @foreach ($tasks as $task)
                        <tr>
                            <td class="text-center text-gray-800 font-medium text-base py-5 px-4  border-b border-gray-300">
                                {{ $task->title }}
                            </td>
                            <td class="text-center text-gray-800 font-medium text-base py-5 px-4 bg-white border-b border-gray-300">
                                {{ $task->description }}
                            </td>
                            <td class="text-center text-gray-800 font-medium text-base py-5 px-4  border-b border-gray-300">
                                <button wire:click="openCreateModal({{ $task }})" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-500">
                                    Editar
                                </button>
                                <button wire:click="deleteTask({{ $task }})" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-500">
                                    Borrar
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


   <!--  
    @if ($modal)
    <div class="fixed left-0 top-0 flex h-full w-full items-center justify-center bg-black bg-opacity-50 py-10">
    <div class="max-h-full w-full max-w-xl overflow-y-auto sm:rounded-2xl bg-white">
        <div class="w-full">
            <div class="m-8 my-20 max-w-[400px] mx-auto">
                <div class="mb-8">
                    <h1 class="mb-4 text-3xl font-extrabold text-center text-gray-800">Crear nueva tarea</h1>
                    <form>
                        <div class="mb-6">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Título</label>
                            <input autofocus wire:model="title" type="text" id="title" name="title" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 mb-3"
                                placeholder="Escribe aquí el título de la tarea">
                        </div>
                        <div class="mb-6">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Descripción</label>
                            <input wire:model="description" type="text" id="description" name="description" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 mb-3"
                                placeholder="Escribe aquí la descripción de la tarea">
                        </div>
                    </form>
                </div>
                <div class="flex space-x-4">
                    <button class="p-3 bg-blue-600 rounded-full text-white w-full font-semibold hover:bg-blue-700 transition-colors duration-300"
                        wire:click="createorUpdateTask">
                        {{ isset($miTarea->id) ? 'Actualizar' : 'Crear' }} tarea
                    </button>
                    <button class="p-3 bg-white border border-gray-300 rounded-full w-full font-semibold text-gray-700 hover:bg-gray-100 transition-colors duration-300" 
                        wire:click.prevent="closeCreateModal">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

    @endif 
</section>