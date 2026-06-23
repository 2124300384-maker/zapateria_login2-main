@extends('Plantilla.plantilla')

@section('content')
    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Productos
        </h1>

        <p class="text-gray-500 mt-2">
            Registro de información
        </p>
    </div>

    <div class="min-h-screen bg-gray-100 py-10 px-6">

        @if (isset($producto))
            <form action="/productos/actualizar/{{ $producto->producto_id }}" method="POST" enctype="multipart/form-data">
            @else
                <form action="/productos/guardar" method="POST" enctype="multipart/form-data">
        @endif

        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <label class="font-semibold">Nombre del Producto</label>
                <input name="nombre_producto" value="{{ isset($producto) ? $producto->nombre_producto : '' }}"
                    type="text" required class="w-full border rounded-lg p-3 mt-2" placeholder="Nombre del producto">
            </div>

            <div>
                <label class="font-semibold">Descripción</label>
                <textarea name="descripcion" class="w-full border rounded-lg p-3 mt-2" placeholder="Descripción del producto">{{ isset($producto) ? $producto->descripcion : '' }}</textarea>
            </div>

            <div>
                <label class="font-semibold">Precio</label>
                <input name="precio" value="{{ isset($producto) ? $producto->precio : '' }}" type="number" min="1"
                    step="0.01" required class="w-full border rounded-lg p-3 mt-2">
            </div>

            <div>
                <label class="font-semibold">Existencia</label>
                <input name="existencia" value="{{ isset($producto) ? $producto->existencia : '' }}" type="number"
                    min="0" required class="w-full border rounded-lg p-3 mt-2">
            </div>

            <div>
                <label class="font-semibold">Imagen 1</label>

                @if (isset($producto) && $producto->imagen)
                    <img src="{{ $producto->imagen }}" alt="Imagen 1" class="w-32 h-32 object-cover rounded-lg mb-2 border">
                @endif

                <input name="imagen" type="file" accept="image/*" class="w-full border rounded-lg p-3 mt-2">
            </div>

            <div>
                <label class="font-semibold">Imagen 2</label>

                @if (isset($producto) && $producto->imagen2)
                    <img src="{{ $producto->imagen2 }}" alt="Imagen 2"
                        class="w-32 h-32 object-cover rounded-lg mb-2 border">
                @endif

                <input name="imagen2" type="file" accept="image/*" class="w-full border rounded-lg p-3 mt-2">
            </div>

            <div>
                <label class="font-semibold">Imagen 3</label>

                @if (isset($producto) && $producto->imagen3)
                    <img src="{{ $producto->imagen3 }}" alt="Imagen 3"
                        class="w-32 h-32 object-cover rounded-lg mb-2 border">
                @endif

                <input name="imagen3" type="file" accept="image/*" class="w-full border rounded-lg p-3 mt-2">
            </div>

            <div>
                <label class="font-semibold">Proveedor</label>
                <select name="proveedor_id" required class="w-full border rounded-lg p-3 mt-2">
                    <option value="">Seleccionar proveedor</option>

                    @foreach ($proveedores as $proveedor)
                        <option value="{{ $proveedor->proveedor_id }}"
                            {{ ($producto->proveedor_id ?? '') == $proveedor->proveedor_id ? 'selected' : '' }}>
                            {{ $proveedor->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="font-semibold">Talla</label>
                <select name="talla_id" required class="w-full border rounded-lg p-3 mt-2">
                    <option value="">Seleccionar talla</option>

                    @foreach ($tallas as $talla)
                        <option value="{{ $talla->talla_id }}"
                            {{ ($producto->talla_id ?? '') == $talla->talla_id ? 'selected' : '' }}>
                            {{ $talla->talla }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="font-semibold">Marca</label>
                <select name="marca_id" required class="w-full border rounded-lg p-3 mt-2">
                    <option value="">Seleccionar marca</option>

                    @foreach ($marcas as $marca)
                        <option value="{{ $marca->marca_id }}"
                            {{ ($producto->marca_id ?? '') == $marca->marca_id ? 'selected' : '' }}>
                            {{ $marca->marca }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="font-semibold">Color</label>
                <select name="color_id" required class="w-full border rounded-lg p-3 mt-2">
                    <option value="">Seleccionar color</option>

                    @foreach ($colores as $color)
                        <option value="{{ $color->color_id }}"
                            {{ ($producto->color_id ?? '') == $color->color_id ? 'selected' : '' }}>
                            {{ $color->color }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="font-semibold">Estado</label>
                <select name="estado" required class="w-full border rounded-lg p-3 mt-2">
                    <option value="">Seleccionar estado</option>
                    <option value="Disponible">Disponible</option>
                    <option value="Agotado">Agotado</option>
                    <option value="Descontinuado">Descontinuado</option>
                </select>
            </div>


        </div>

        <button class="mt-8 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            {{ isset($producto) ? 'Actualizar Producto' : 'Guardar Producto' }}
        </button>

        <a href="/" class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            Regresar
        </a>

        </form>

    </div>
@endsection
