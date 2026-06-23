@extends('/Plantilla/plantilla')

@section('content')
    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Proveedores
        </h1>

        <p class="text-gray-500 mt-2">
            Registro de información
        </p>
    </div>

    <div class="min-h-screen bg-gray-100 py-10 px-6">
        @if (isset($proveedor))
            <form action="/proveedores/actualizar/{{ $proveedor->proveedor_id }}" method="POST">
            @else
                <form action="/proveedores/guardar" method="POST">
        @endif

        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <label class="font-semibold">Nombre</label>

                <input name="nombre" value="{{ $proveedor->nombre ?? '' }}" type="text" minlength="3" maxlength="80"
                    pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" required class="w-full border rounded-lg p-3 mt-2"
                    placeholder="Nombre del proveedor">
            </div>

            <div>
                <label class="font-semibold">Correo</label>

                <input name="correo" value="{{ $proveedor->correo ?? '' }}" type="email" maxlength="100" required
                    class="w-full border rounded-lg p-3 mt-2" placeholder="correo@gmail.com">
            </div>

            <div>
                <label class="font-semibold">Teléfono</label>

                <input name="telefono" value="{{ $proveedor->telefono ?? '' }}" type="tel" minlength="10" maxlength="10"
                    pattern="[0-9]{10}" required class="w-full border rounded-lg p-3 mt-2" placeholder="3330000000">
            </div>

            <div>
                <label class="font-semibold">Dirección</label>

                <input name="direccion" value="{{ $proveedor->direccion ?? '' }}" type="text" maxlength="150" required
                    class="w-full border rounded-lg p-3 mt-2" placeholder="Dirección">
            </div>

            <div>
                <label class="font-semibold">Contacto</label>

                <select name="contacto_id" required class="w-full border rounded-lg p-3 mt-2">

                    <option value="">Seleccionar contacto</option>

                    @foreach ($contactos as $contacto)
                        <option value="{{ $contacto->contacto_id }}"
                            {{ ($proveedor->contacto_id ?? '') == $contacto->contacto_id ? 'selected' : '' }}>
                            {{ $contacto->nombre }}
                        </option>
                    @endforeach

                </select>
            </div>

        </div>

        <button class="mt-8 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            {{ isset($proveedor) ? 'Actualizar Proveedor' : 'Guardar Proveedor' }}
        </button>

        <a href="/" class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            Regresar
        </a>

        </form>

    </div>
@endsection