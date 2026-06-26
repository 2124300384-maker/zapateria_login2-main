@extends('/Plantilla/plantilla')

@section('content')
    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Tabla de Clientes
        </h1>

        <p class="text-gray-500 mt-2">
            Visualización de clientes registrados
        </p>
    </div>

    <div class="p-5">

        <div class="bg-white shadow-xl rounded-2xl overflow-hidden">

            <table class="w-full">

                <thead class="bg-gray-800 text-white">

                    <tr>
                        <th class="p-4 text-left">ID</th>
                        <th class="p-4 text-left">Imagen 1</th>
                        <th class="p-4 text-left">Imagen 2</th>
                        <th class="p-4 text-left">Imagen 3</th>
                        <th class="p-4 text-left">Nombre</th>
                        <th class="p-4 text-left">Correo</th>
                        <th class="p-4 text-left">RFC</th>
                        <th class="p-4 text-left">Teléfono</th>
                        <th class="p-4 text-left">Dirección</th>
                        <th class="p-4 text-left">Edad</th>
                        <th class="p-4 text-left">Estado</th>
                        <th class="p-4 text-left">Acciones</th>
                    </tr>

                </thead>

                @foreach ($clientes as $cliente)
                    <tr class="border-b hover:bg-gray-100">

                        <td class="p-4">{{ $cliente->cliente_id }}</td>

                        <td class="p-4">
                        <img src="{{ $cliente->imagen }}" alt="{{ $cliente->nombre }}" class="w-16 h-16 object-cover">
                        </td>

                        <td class="p-4">
                        <img src="{{ $cliente->imagen2 }}" alt="{{ $cliente->nombre }}" class="w-16 h-16 object-cover">
                        </td>

                        <td class="p-4">
                        <img src="{{ $cliente->imagen3 }}" alt="{{ $cliente->nombre }}" class="w-16 h-16 object-cover">
                        </td>

                        <td class="p-4">{{ $cliente->nombre }}</td>

                        <td class="p-4">{{ $cliente->correo }}</td>

                        <td class="p-4">{{ $cliente->rfc }}</td>

                        <td class="p-4">{{ $cliente->telefono }}</td>

                        <td class="p-4">{{ $cliente->direccion }}</td>

                        <td class="p-4">{{ $cliente->edad }}</td>

                        <td class="p-4">{{ $cliente->estado }}</td>

                        <td class="p-4">
        @if(!Auth::guard('empleado')->user()->Vendedor() &&
            !Auth::guard('empleado')->user()->Supervisor())
        <a href="/clientes/editar/{{ $cliente->cliente_id }}" class="bg-yellow-500 text-white px-3 py-1 rounded">
            Editar
        </a>
    @endif

        @if(!Auth::guard('empleado')->user()->Vendedor())
        <a href="/clientes/eliminar/{{ $cliente->cliente_id }}" class="bg-red-500 text-white px-3 py-1 rounded">
            Eliminar
        </a>
    @endif
                        </td>

                    </tr>
                @endforeach

                </tbody>

                </tbody>

            </table>

        </div>
        <a href="/Clientes" class="mb-4 inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl">
            Nuevo Cliente
        </a>

        <a href="/" class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            Regresar
        </a>

    </div>
@endsection
