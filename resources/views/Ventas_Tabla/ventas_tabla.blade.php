@extends('/Plantilla/plantilla')

@section('content')

<div class="tmb-5 pl-5">
    <h1 class="text-4xl font-bold text-indigo-700">
        Tabla de Ventas
    </h1>

    <p class="text-gray-500 mt-2">
        Visualización de ventas registradas
    </p>
</div>

<div class="p-5">

<div class="bg-white shadow-xl rounded-2xl overflow-hidden">

<table class="w-full">

    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="p-4 text-left">ID</th>
            <th class="p-4 text-left">Cliente</th>
            <th class="p-4 text-left">Empleado</th>
            <th class="p-4 text-left">Subtotal</th>
            <th class="p-4 text-left">Descuento</th>
            <th class="p-4 text-left">IVA</th>
            <th class="p-4 text-left">Total</th>
            <th class="p-4 text-left">Fecha</th>
            <th class="p-4 text-left">Estado</th>
            <th class="p-4 text-left">Acciones</th>
        </tr>
    </thead>

    <tbody>

@foreach($ventas as $venta)

<tr class="border-b hover:bg-gray-100">

    <td class="p-4">{{ $venta->venta_id }}</td>

    <td class="p-4">{{ $venta->cliente_id }}</td>

    <td class="p-4">{{ $venta->empleado_id }}</td>

    <td class="p-4">{{ $venta->subtotal }}</td>
    <td class="p-4">{{ $venta->descuento }}</td>
    <td class="p-4">{{ $venta->iva }}</td>
    <td class="p-4">{{ $venta->total }}</td>
    <td class="p-4">{{ $venta->fecha_venta }}</td>
    <td class="p-4">{{ $venta->estado }}</td>

    <td class="p-4">
        @if(!Auth::guard('empleado')->user()->Vendedor() &&
            !Auth::guard('empleado')->user()->Supervisor())
        <a href="/ventas/editar/{{ $venta->venta_id }}" class="bg-yellow-500 text-white px-3 py-1 rounded">
            Editar
        </a>
    @endif

        @if(!Auth::guard('empleado')->user()->Vendedor())
        <a href="/ventas/eliminar/{{ $venta->venta_id }}" class="bg-red-500 text-white px-3 py-1 rounded">
            Eliminar
        </a>
    @endif
    </td>

</tr>

@endforeach

    </tbody>

</table>

</div>

<a href="/Ventas"
    class="mb-4 inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl">
    Nueva Venta
</a>

<a href="/"
    class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
    Regresar
</a>

</div>

@endsection