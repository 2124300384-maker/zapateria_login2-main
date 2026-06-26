@extends('/Plantilla/plantilla')

@section('content')

    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Tabla de Colores
        </h1>

        <p class="text-gray-500 mt-2">
            Visualizacion de colores registrados
        </p>
    </div>

<div class="p-5">

    <div class="bg-white shadow-xl rounded-2xl overflow-hidden">

        <table class="w-full">

            <thead class="bg-gray-800 text-white">

                <tr>
                    <th class="p-4 text-left">ID</th>
                    <th class="p-4 text-left">Color</th>
                    <th class="p-4 text-left">Acciones</th>
                </tr>

            </thead>

            <tbody>

            @foreach($colores as $color)
                <tr class="border-b border-gray-200">
                    <td class="p-4">{{ $color->color_id }}</td>
                    <td class="p-4">{{ $color->color }}</td>
                    <td class="p-4">
                                @if(!Auth::guard('empleado')->user()->Vendedor() &&
            !Auth::guard('empleado')->user()->Supervisor())
        <a href="/colores/editar/{{ $color->color_id }}" class="bg-yellow-500 text-white px-3 py-1 rounded">
            Editar
        </a>
    @endif

        @if(!Auth::guard('empleado')->user()->Vendedor())
        <a href="/colores/eliminar/{{ $color->color_id }}" class="bg-red-500 text-white px-3 py-1 rounded">
            Eliminar
        </a>
    @endif
                    </td>
                </tr>
            @endforeach

        </table>

    </div>

            <a href="/Colores"
                class="mb-4 inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl">
                Nuevo Color
            </a>

            <a href="/"
                class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
                Regresar
            </a>

</div>

@endsection