@extends('/Plantilla/plantilla')

@section('content')
    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Tabla de Compras
        </h1>

        <p class="text-gray-500 mt-2">
            Visualización de compras registradas
        </p>
    </div>

    <div class="p-5">

        <div class="bg-white shadow-xl rounded-2xl overflow-hidden">

            <table class="w-full">

                <thead class="bg-gray-800 text-white">

                    <tr>
                        <th class="p-4 text-left">ID</th>
                        <th class="p-4 text-left">Gasto total</th>
                        <th class="p-4 text-left">Fecha compra</th>
                        <th class="p-4 text-left">Fecha entrega</th>
                        <th class="p-4 text-left">Precio</th>
                        <th class="p-4 text-left">Estado</th>
                        <th class="p-4 text-left">Acciones</th>
                    </tr>

                </thead>

                <tbody>
                    @foreach ($compras as $compra)
                        <tr class="border-b hover:bg-gray-100">

                            <td class="p-4">{{ $compra->compra_id }}</td>

                            <td class="p-4">{{ $compra->gasto_total }}</td>

                            <td class="p-4">{{ $compra->fecha_compra }}</td>

                            <td class="p-4">{{ $compra->fecha_entrega }}</td>

                            <td class="p-4">{{ $compra->precio }}</td>

                            <td class="p-4">{{ $compra->estado }}</td>

                            <td class="p-4">
                                <a href="/compras/editar/{{ $compra->compra_id }}"
                                    class="bg-yellow-500 text-white px-3 py-1 rounded">Editar</a>
                                <a href="/compras/eliminar/{{ $compra->compra_id }}"
                                    class="bg-red-500 text-white px-3 py-1 rounded">Eliminar</a>
                            </td>
                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
        <a href="/Compras" class="mb-4 inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl">
            Nueva Compra
        </a>

        <a href="/" class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            Regresar
        </a>

    </div>
@endsection
