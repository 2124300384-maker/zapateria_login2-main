@extends('/Plantilla/plantilla')

@section('content')

<div class="tmb-5 pl-5">
    <h1 class="text-4xl font-bold text-indigo-700">
        Ventas
    </h1>
    <p class="text-gray-500 mt-2">
        Registro de información
    </p>
</div>

<div class="min-h-screen bg-gray-100 py-10 px-6">

@if(isset($venta))
    <form action="/ventas/actualizar/{{ $venta->venta_id }}" method="POST">
@else
    <form action="/ventas/guardar" method="POST">
@endif

@csrf

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div>
        <label class="font-semibold">Cliente</label>
        <select name="id_cliente" class="w-full border rounded-lg p-3 mt-2" required>
            <option value="">Seleccionar cliente</option>

            @foreach($clientes as $cliente)
                <option value="{{ $cliente->cliente_id }}"
                    {{ isset($venta) && $venta->cliente_id == $cliente->cliente_id ? 'selected' : '' }}>
                    {{ $cliente->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="font-semibold">Empleado</label>
        <select name="id_empleado" class="w-full border rounded-lg p-3 mt-2" required>
            <option value="">Seleccionar empleado</option>

            @foreach($empleados as $empleado)
                <option value="{{ $empleado->empleado_id }}"
                    {{ isset($venta) && $venta->empleado_id == $empleado->empleado_id ? 'selected' : '' }}>
                    {{ $empleado->nombre }}
                </option>
            @endforeach
        </select>
    </div>


    <div>
        <label class="font-semibold">Subtotal</label>
        <input type="number" name="subtotal" step="0.01"
               value="{{ $venta->subtotal ?? '' }}"
               class="w-full border rounded-lg p-3 mt-2" required>
    </div>

    <div>
        <label class="font-semibold">Descuento</label>
        <input type="number" name="descuento" step="0.01"
               value="{{ $venta->descuento ?? 0 }}"
               class="w-full border rounded-lg p-3 mt-2">
    </div>

    <div>
        <label class="font-semibold">IVA</label>
        <input type="number" name="iva" step="0.01"
               value="{{ $venta->iva ?? 0 }}"
               class="w-full border rounded-lg p-3 mt-2">
    </div>

    <div>
        <label class="font-semibold">Total</label>
        <input type="number" name="total" step="0.01"
               value="{{ $venta->total ?? '' }}"
               class="w-full border rounded-lg p-3 mt-2" required>
    </div>

    <div>
        <label class="font-semibold">Fecha Venta</label>
        <input type="date" name="fecha_venta"
               value="{{ $venta->fecha_venta ?? '' }}"
               class="w-full border rounded-lg p-3 mt-2" required>
    </div>

    <div>
        <label class="font-semibold">Estado</label>
        <select name="estado" class="w-full border rounded-lg p-3 mt-2" required>
            <option value="">Seleccionar estado</option>
            <option value="Pagado" {{ isset($venta) && $venta->estado == 'Pagado' ? 'selected' : '' }}>Pagado</option>
            <option value="Pendiente" {{ isset($venta) && $venta->estado == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
            <option value="Cancelado" {{ isset($venta) && $venta->estado == 'Cancelado' ? 'selected' : '' }}>Cancelado</option>
        </select>
    </div>

</div>

<button class="mt-8 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
    {{ isset($venta) ? 'Actualizar Venta' : 'Guardar Venta' }}
</button>

<a href="/"
   class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
    Regresar
</a>

</form>

</div>

@endsection