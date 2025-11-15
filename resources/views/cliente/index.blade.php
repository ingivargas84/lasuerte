<x-layouts.app>

    <div class="mb-4 flex justify-between items-center">

        <a href="{{ route('cliente.create') }}" class="btn btn-blue text-xs">
            Nuevo
        </a>
    </div>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Apellido
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Telefono
                    </th>
                    <th scope="col" class="px-6 py-3" width="10px">
                        Acciones
                    </th>
                    
                </tr>
            </thead>
            <tbody>

                @foreach ($clientes as $cl)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $cl->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $cl->nombre }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $cl->apellido }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $cl->telefono }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <a href="{{ route('cliente.edit', $cl) }}" class="btn btn-blue text-xs">
                                Editar
                            </a>

                            <form class="delete-form" action="{{ route('cliente.destroy', $cl) }}" method="POST">
                                
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-red text-xs">
                                    Eliminar
                                </button>

                            </form>

                        </div>
                       
                    </td>
                </tr>
               @endforeach

            </tbody>
        </table>
    </div>



</x-layouts.app>