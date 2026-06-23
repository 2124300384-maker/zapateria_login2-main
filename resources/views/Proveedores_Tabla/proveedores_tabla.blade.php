@extends('Plantilla.plantilla')

@section('content')
    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Tabla de Proveedores
        </h1>

        <p class="text-gray-500 mt-2">
            Visualización de proveedores registrados
        </p>
    </div>

    <div class="p-5">
        <div class="bg-white shadow-xl rounded-2xl overflow-hidden">

            <table class="w-full">

                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="p-4 text-left">ID</th>
                        <th class="p-4 text-left">Contacto</th>
                        <th class="p-4 text-left">Nombre</th>
                        <th class="p-4 text-left">Correo</th>
                        <th class="p-4 text-left">Teléfono</th>
                        <th class="p-4 text-left">Dirección</th>
                        <th class="p-4 text-left">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($proveedores as $proveedor)
                        <tr class="border-b hover:bg-gray-100">

                            <td class="p-4">
                                {{ $proveedor->proveedor_id }}
                            </td>

                            <td class="p-4">
                                {{ $proveedor->contacto_id }}
                            </td>

                            <td class="p-4">
                                {{ $proveedor->nombre }}
                            </td>

                            <td class="p-4">
                                {{ $proveedor->correo }}
                            </td>

                            <td class="p-4">
                                {{ $proveedor->telefono }}
                            </td>

                            <td class="p-4">
                                {{ $proveedor->direccion }}
                            </td>

                            <td class="p-4">
                                <a href="/proveedores/editar/{{ $proveedor->proveedor_id }}"
                                   class="bg-yellow-500 text-white px-3 py-1 rounded">
                                    Editar
                                </a>

                            <form action="/proveedores/eliminar/{{ $proveedor->proveedor_id }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Eliminar</button>
                            </form>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="p-4 text-center text-gray-500">
                                No hay proveedores registrados
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

        <a href="/Proveedores"
           class="mb-4 inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl">
            Nuevo Proveedor
        </a>

        <a href="/"
           class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            Regresar
        </a>
    </div>
@endsection