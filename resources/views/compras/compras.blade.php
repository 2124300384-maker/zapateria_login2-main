@extends('Plantilla.plantilla')

@section('content')
    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Compras
        </h1>

        <p class="text-gray-500 mt-2">
            Registro de información
        </p>
    </div>

    <div class="min-h-screen bg-gray-100 py-10 px-6">

        @if (isset($compra))
            <form action="/compras/actualizar/{{ $compra->compra_id }}" method="POST">
            @else
                <form action="/compras/guardar" method="POST">
        @endif

        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            {{-- PROVEEDOR (SIN BD) --}}
            <div>
                <label class="font-semibold">Proveedor</label>

                <select name="proveedor_id" required class="w-full border rounded-lg p-3 mt-2">

                    <option value="">Seleccionar proveedor</option>

                    @foreach ($proveedores as $proveedor)
                        <option value="{{ $proveedor->proveedor_id }}"
                            {{ ($compra->proveedor_id ?? '') == $proveedor->proveedor_id ? 'selected' : '' }}>
                            {{ $proveedor->nombre }}
                        </option>
                    @endforeach

                </select>
            </div>

            {{-- GASTO TOTAL --}}
            <div>
                <label class="font-semibold">Gasto Total</label>

                <input type="number" name="gasto_total" min="1" step="0.01"
                    value="{{ isset($compra) ? $compra->gasto_total : '' }}" required
                    class="w-full border rounded-lg p-3 mt-2">
            </div>

            {{-- FECHA COMPRA --}}
            <div>
                <label class="font-semibold">Fecha Compra</label>

                <input type="date" name="fecha_compra" value="{{ isset($compra) ? $compra->fecha_compra : '' }}" required
                    class="w-full border rounded-lg p-3 mt-2">
            </div>

            {{-- FECHA ENTREGA --}}
            <div>
                <label class="font-semibold">Fecha Entrega</label>

                <input type="date" name="fecha_entrega" value="{{ isset($compra) ? $compra->fecha_entrega : '' }}"
                    class="w-full border rounded-lg p-3 mt-2">
            </div>

            {{-- PRECIO --}}
            <div>
                <label class="font-semibold">Precio</label>

                <input type="number" name="precio" min="1" step="0.01"
                    value="{{ isset($compra) ? $compra->precio : '' }}" required class="w-full border rounded-lg p-3 mt-2">
            </div>

            {{-- ESTADO --}}
            <div>
                <label class="font-semibold">Estado</label>

                <select name="estado" required class="w-full border rounded-lg p-3 mt-2">

                    <option value="">Seleccionar estado</option>

                    <option value="Pendiente" {{ isset($compra) && $compra->estado == 'Pendiente' ? 'selected' : '' }}>
                        Pendiente
                    </option>

                    <option value="En camino" {{ isset($compra) && $compra->estado == 'En camino' ? 'selected' : '' }}>
                        En camino
                    </option>

                    <option value="Entregado" {{ isset($compra) && $compra->estado == 'Entregado' ? 'selected' : '' }}>
                        Entregado
                    </option>

                    <option value="Cancelado" {{ isset($compra) && $compra->estado == 'Cancelado' ? 'selected' : '' }}>
                        Cancelado
                    </option>

                </select>
            </div>

        </div>

        <button class="mt-8 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            {{ isset($compra) ? 'Actualizar Compra' : 'Guardar Compra' }}
        </button>

        <a href="/" class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            Regresar
        </a>

        </form>

    </div>
@endsection