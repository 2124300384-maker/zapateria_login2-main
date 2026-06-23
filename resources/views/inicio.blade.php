@extends('/Plantilla/plantilla')

@section('content')
    <div class="mb-10 pl-5">
        <h1 class="text-5xl font-bold text-indigo-700">
            Inicio
        </h1>

        <p class="text-gray-500 mt-3 text-lg">
            Selecciona una de las opciones del menú
        </p>
    </div>

    <div class="min-h-screen bg-gray-100 py-1 px-5">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            <div class="bg-white shadow-xl rounded-2xl p-8">

                <div class="mb-6">
                    <h2 class="text-3xl font-bold text-gray-800">
                        Formularios
                    </h2>

                    <div class="w-24 h-1 bg-indigo-600 mt-2 rounded-full"></div>
                </div>

                <nav>
                    <ul class="space-y-4">

                        <li>
                            <a href="/Contactos"
                                class="block bg-indigo-100 hover:bg-indigo-200 text-indigo-700 font-semibold p-4 rounded-xl transition">
                                Contactos
                            </a>
                        </li>

                        <li>
                            <a href="/Proveedores"
                                class="block bg-indigo-100 hover:bg-indigo-200 text-indigo-700 font-semibold p-4 rounded-xl transition">
                                Proveedores
                            </a>
                        </li>

                        <li>
                            <a href="/Compras"
                                class="block bg-indigo-100 hover:bg-indigo-200 text-indigo-700 font-semibold p-4 rounded-xl transition">
                                Compras
                            </a>
                        </li>

                        <li>
                            <a href="/Productos"
                                class="block bg-indigo-100 hover:bg-indigo-200 text-indigo-700 font-semibold p-4 rounded-xl transition">
                                Productos
                            </a>
                        </li>

                        <li>
                            <a href="/Tallas"
                                class="block bg-indigo-100 hover:bg-indigo-200 text-indigo-700 font-semibold p-4 rounded-xl transition">
                                Tallas
                            </a>
                        </li>

                        <li>
                            <a href="/Colores"
                                class="block bg-indigo-100 hover:bg-indigo-200 text-indigo-700 font-semibold p-4 rounded-xl transition">
                                Colores
                            </a>
                        </li>

                        <li>
                            <a href="/Marcas"
                                class="block bg-indigo-100 hover:bg-indigo-200 text-indigo-700 font-semibold p-4 rounded-xl transition">
                                Marcas
                            </a>
                        </li>

                        <li>
                            <a href="/Ventas"
                                class="block bg-indigo-100 hover:bg-indigo-200 text-indigo-700 font-semibold p-4 rounded-xl transition">
                                Ventas
                            </a>
                        </li>

                        <li>
                            <a href="/Clientes"
                                class="block bg-indigo-100 hover:bg-indigo-200 text-indigo-700 font-semibold p-4 rounded-xl transition">
                                Clientes
                            </a>
                        </li>

                        <li>
                            <a href="/Empleados"
                                class="block bg-indigo-100 hover:bg-indigo-200 text-indigo-700 font-semibold p-4 rounded-xl transition">
                                Empleados
                            </a>
                        </li>

                    </ul>
                </nav>

            </div>

            <div class="bg-white shadow-xl rounded-2xl p-8">

                <div class="mb-6">
                    <h2 class="text-3xl font-bold text-gray-800">
                        Tablas
                    </h2>

                    <div class="w-24 h-1 bg-green-600 mt-2 rounded-full"></div>
                </div>

                <nav>
                    <ul class="space-y-4">

                        <li>
                            <a href="/Contactos_Tabla"
                                class="block bg-green-100 hover:bg-green-200 text-green-700 font-semibold p-4 rounded-xl transition">
                                Contactos
                            </a>
                        </li>

                        <li>
                            <a href="/Proveedores_Tabla"
                                class="block bg-green-100 hover:bg-green-200 text-green-700 font-semibold p-4 rounded-xl transition">
                                Proveedores
                            </a>
                        </li>

                        <li>
                            <a href="/Compras_Tabla"
                                class="block bg-green-100 hover:bg-green-200 text-green-700 font-semibold p-4 rounded-xl transition">
                                Compras
                            </a>
                        </li>

                        <li>
                            <a href="/Productos_Tabla"
                                class="block bg-green-100 hover:bg-green-200 text-green-700 font-semibold p-4 rounded-xl transition">
                                Productos
                            </a>
                        </li>

                        <li>
                            <a href="/Tallas_Tabla"
                                class="block bg-green-100 hover:bg-green-200 text-green-700 font-semibold p-4 rounded-xl transition">
                                Tallas
                            </a>
                        </li>

                        <li>
                            <a href="/Colores_Tabla"
                                class="block bg-green-100 hover:bg-green-200 text-green-700 font-semibold p-4 rounded-xl transition">
                                Colores
                            </a>
                        </li>

                        <li>
                            <a href="/Marcas_Tabla"
                                class="block bg-green-100 hover:bg-green-200 text-green-700 font-semibold p-4 rounded-xl transition">
                                Marcas
                            </a>
                        </li>

                        <li>
                            <a href="/Ventas_Tabla"
                                class="block bg-green-100 hover:bg-green-200 text-green-700 font-semibold p-4 rounded-xl transition">
                                Ventas
                            </a>
                        </li>

                        <li>
                            <a href="/Clientes_Tabla"
                                class="block bg-green-100 hover:bg-green-200 text-green-700 font-semibold p-4 rounded-xl transition">
                                Clientes
                            </a>
                        </li>

                        <li>
                            <a href="/Empleados_Tabla"
                                class="block bg-green-100 hover:bg-green-200 text-green-700 font-semibold p-4 rounded-xl transition">
                                Empleados
                            </a>
                        </li>

                    </ul>
                </nav>

            </div>

        </div>

        <div class="mt-10">

            <a href="/login"
                class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-2xl shadow-lg transition">

                Cerrar sesión

            </a>

        </div>

    </div>
@endsection
