@extends('/Plantilla/plantilla')

@section('content')
    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Marcas
        </h1>

        <p class="text-gray-500 mt-2">
            Registro de información
        </p>
    </div>

    <div class="min-h-screen bg-gray-100 py-10 px-6">

        @if (isset($marca))
            <form action="/marcas/actualizar/{{ $marca->marca_id }}" method="POST">
            @else
                <form action="/marcas/guardar" method="POST">
        @endif

        @csrf

        <div class="grid grid-cols-1 gap-6">

            <div>
                <label class="font-semibold">Marca</label>

                <input name="marca" value="{{ $marca->marca ?? '' }}" type="text" required maxlength="50"
                    class="w-full border rounded-lg p-3 mt-2" placeholder="Ingrese la marca">
            </div>

        </div>

        <button class="mt-8 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            {{ isset($marca) ? 'Actualizar Marca' : 'Guardar Marca' }}
        </button>

        <a href="/" class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            Regresar
        </a>

        </form>

    </div>
@endsection