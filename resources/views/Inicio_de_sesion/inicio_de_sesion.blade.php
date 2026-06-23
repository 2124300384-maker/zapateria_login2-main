@extends('/Plantilla/plantilla')

@section('content')

    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Inicio de sesión
        </h1>

        <p class="text-gray-500 mt-2">
            Introduce tus datos para iniciar sesión
        </p>
    </div>

    <div class="min-h-screen bg-gray-100 py-10 px-6">

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="/login" method="POST">

            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label class="font-semibold">Correo</label>

                    <input name="correo" type="email" maxlength="100" required class="w-full border rounded-lg p-3 mt-2"
                        placeholder="correo@gmail.com">
                </div>

                <div>
                    <label class="font-semibold">Contraseña</label>

                    <input name="contrasena" type="password" minlength="8" maxlength="100" required
                        class="w-full border rounded-lg p-3 mt-2" placeholder="Contraseña">
                </div>

            </div>

            <button type="submit" class="mt-8 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
                Iniciar sesión
            </button>

            <a href="{{ url('auth/google') }}"
                <button class="google-btn mt-4 bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl">
                Iniciar sesión con Google
            </button>

            </a>

        </form>

    </div>

@endsection
