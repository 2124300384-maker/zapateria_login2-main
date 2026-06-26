@extends('/Plantilla/plantilla')

@section('content')
    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Tabla de Productos
        </h1>

        <p class="text-gray-500 mt-2">
            Visualización de productos registrados
        </p>
    </div>

    <div class="p-5">

        <div class="bg-white shadow-xl rounded-2xl overflow-hidden">

            <table class="w-full">

                <thead class="bg-gray-800 text-white">

                    <tr>
                        <th class="p-4 text-left">ID</th>
                        <th class="p-4 text-left">Imagen</th>
                        <th class="p-4 text-left">Imagen 2</th>
                        <th class="p-4 text-left">Imagen 3</th>
                        <th class="p-4 text-left">Nombre producto</th>
                        <th class="p-4 text-left">Descripción</th>
                        <th class="p-4 text-left">Precio</th>
                        <th class="p-4 text-left">Existencia</th>
                        <th class="p-4 text-left">Proveedor</th>
                        <th class="p-4 text-left">Talla</th>
                        <th class="p-4 text-left">Color</th>
                        <th class="p-4 text-left">Marca</th>
                        <th class="p-4 text-left">Estado</th>
                        <th class="p-4 text-left">Acciones</th>
                    </tr>

                </thead>

                <tbody>
                    @foreach ($productos as $producto)
                        <tr class="border-b hover:bg-gray-100">

                            <td class="p-4">{{ $producto->producto_id }}</td>

                            <td class="p-4">
                            <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre_producto }}" class="w-16 h-16 object-cover">
                            </td>

                            <td class="p-4">
                            <img src="{{ $producto->imagen2 }}" alt="{{ $producto->nombre_producto }}" class="w-16 h-16 object-cover">
                            </td>

                            <td class="p-4">
                            <img src="{{ $producto->imagen3 }}" alt="{{ $producto->nombre_producto }}" class="w-16 h-16 object-cover">
                            </td>

                            <td class="p-4">{{ $producto->nombre_producto }}</td>

                            <td class="p-4">{{ $producto->descripcion }}</td>

                            <td class="p-4">{{ $producto->precio }}</td>

                            <td class="p-4">{{ $producto->existencia }}</td>

                            <td class="p-4">{{ $producto->proveedor_id }}</td>

                            <td class="p-4">{{ $producto->talla_id }}</td>

                            <td class="p-4">{{ $producto->color_id }}</td>

                            <td class="p-4">{{ $producto->marca_id }}</td>

                            <td class="p-4">{{ $producto->estado }}</td>

                        <td class="p-4">
        @if(!Auth::guard('empleado')->user()->Vendedor() &&
            !Auth::guard('empleado')->user()->Supervisor())
        <a href="/productos/editar/{{ $producto->producto_id }}" class="bg-yellow-500 text-white px-3 py-1 rounded">
            Editar
        </a>
    @endif

        @if(!Auth::guard('empleado')->user()->Vendedor())
        <a href="/productos/eliminar/{{ $producto->producto_id }}" class="bg-red-500 text-white px-3 py-1 rounded">
            Eliminar
        </a>
    @endif
                        </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>

        <a href="/Productos" class="mb-4 inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl">
            Nuevo Producto
        </a>

        <a href="/" class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            Regresar
        </a>

    </div>
@endsection