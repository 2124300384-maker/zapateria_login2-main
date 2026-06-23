<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>

<body>

    <header class="bg-gray-900 text-white p-5">
        <h1 class="text-3xl font-bold">Zapateria</h1>
    </header>

    <nav class="bg-gray-800 text-white p-4">
        <ul class="flex gap-4 flex-wrap">

            <li><a href="/login" class="hover:text-yellow-400">Inicio de sesión</a></li>

        </ul>
    </nav>

    <main class="min-h-screen bg-gray-100">
        @yield('content')
    </main>

    {{--<footer class="bg-gray-900 text-white text-center p-4">

        <footer class="bg-gray-900 text-white text-center p-4">

            <h3 class="font-bold">Información General</h3>

            <p>
                Ciudad:
                {{ $clima['location']['name'] }}
            </p>

            <p>
                Estado:
                {{ $clima['location']['region'] }}
            </p>

            <p>
                País:
                {{ $clima['location']['country'] }}
            </p>

            <p>
                Temperatura:
                {{ $clima['current']['temp_c'] }} °C
            </p>

            <p>
                Humedad:
                {{ $clima['current']['humidity'] }} %
            </p>

            <p>
                Probabilidad de lluvia:
                {{ $clima['forecast']['forecastday'][0]['day']['daily_chance_of_rain'] }} %
            </p>

            <p>
                1 USD = {{ number_format($tipoCambio, 2) }} MXN
            </p>

        </footer>

    </footer>--}}

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</body>

</html>