@extends('/Plantilla/plantilla')

@section('content')

    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Tabla de Contactos
        </h1>

        <p class="text-gray-500 mt-2">
            Visualización de contactos registrados
        </p>
    </div>

<div class="p-5">

    <div class="bg-white shadow-xl rounded-2xl overflow-hidden">

        <table class="w-full">

            <thead class="bg-gray-800 text-white">

                <tr>
                    <th class="p-4 text-left">ID</th>
                    <th class="p-4 text-left">Nombre</th>
                    <th class="p-4 text-left">Correo</th>
                    <th class="p-4 text-left">Teléfono</th>
                    <th class="p-4 text-left">Acciones</th>
                </tr>

            </thead>

            <tbody>
                @foreach ($contactos as $contacto)
                    <tr class="border-b hover:bg-gray-100">

                        <td class="p-4">{{ $contacto->contacto_id }}</td>

                        <td class="p-4">{{ $contacto->nombre }}</td>

                        <td class="p-4">{{ $contacto->correo }}</td>

                        <td class="p-4">{{ $contacto->telefono }}</td>

                        <td class="p-4">
        @if(!Auth::guard('empleado')->user()->Vendedor() &&
            !Auth::guard('empleado')->user()->Supervisor())
        <a href="/contactos/editar/{{ $contacto->contacto_id }}" class="bg-yellow-500 text-white px-3 py-1 rounded">
            Editar
        </a>
    @endif

        @if(!Auth::guard('empleado')->user()->Vendedor())
        <a href="/contactos/eliminar/{{ $contacto->contacto_id }}" class="bg-red-500 text-white px-3 py-1 rounded">
            Eliminar
        </a>
    @endif
                        </td>

                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>
            <a href="/Contactos"
                class="mt-8 inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl">
                Agregar Contacto
            </a>

            <a href="/"
                class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
                Regresar
            </a>

</div>

@endsection