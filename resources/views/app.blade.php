<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sistema</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- NAVBAR -->
    <nav class="bg-gray-900 text-white shadow-lg">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">

            <h1 class="text-2xl font-bold">
                Sistema
            </h1>

            <ul class="flex gap-6">
                <li><a href="#" class="hover:text-yellow-400">Clientes</a></li>
                <li><a href="#" class="hover:text-yellow-400">Productos</a></li>
                <li><a href="#" class="hover:text-yellow-400">Ventas</a></li>
                <li><a href="#" class="hover:text-yellow-400">Compras</a></li>
            </ul>

        </div>
    </nav>

    <!-- CONTENIDO -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-white text-center py-4">
        Sistema Administrativo © 2026
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</body>
</html>