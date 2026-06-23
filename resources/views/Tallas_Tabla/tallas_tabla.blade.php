@extends('/Plantilla/plantilla')

@section('content')
    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Tabla de Tallas
        </h1>

        <p class="text-gray-500 mt-2">
            Visualización de tallas registradas
        </p>
    </div>

    <div class="p-5">

        <div class="bg-white shadow-xl rounded-2xl overflow-hidden">

            <table class="w-full">

                <thead class="bg-gray-800 text-white">

                    <tr>
                        <th class="p-4 text-left">ID</th>
                        <th class="p-4 text-left">Talla</th>
                        <th class="p-4 text-left">Acciones</th>
                    </tr>

                </thead>

                <tbody>
                    @foreach ($tallas as $talla)
                        <tr class="border-b hover:bg-gray-100">

                            <td class="p-4">{{ $talla->talla_id }}</td>

                            <td class="p-4">{{ $talla->talla }}</td>

                            <td class="p-4">
                                <a href="/tallas/editar/{{ $talla->talla_id }}"
                                    class="bg-yellow-500 text-white px-3 py-1 rounded">
                                    Editar
                                </a>
                            <form action="/tallas/eliminar/{{ $talla->talla_id }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Eliminar</button>
                            </form>
                            </td>
                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>
        <a href="/tallas" class="mb-4 inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl">
            Nueva Talla
        </a>

        <a href="/" class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            Regresar
        </a>

    </div>
@endsection
