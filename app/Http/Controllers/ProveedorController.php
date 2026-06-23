<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function listado()
    {
        $proveedores = Proveedor::all();

        return view(
            'Proveedores_Tabla.proveedores_tabla',
            compact('proveedores')
        );
    }

    public function guardar()
    {
        $proveedor = new Proveedor();

        $proveedor->nombre = request('nombre');
        $proveedor->direccion = request('direccion');
        $proveedor->telefono = request('telefono');
        $proveedor->correo = request('correo');
        $proveedor->contacto_id = request('contacto_id');

        $proveedor->save();

        return redirect('/Proveedores_Tabla');
    }

    public function editar($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $contactos = Contacto::all();

        return view('proveedores.proveedores', compact('proveedor', 'contactos'));
    }

    public function actualizar($id)
    {
        $proveedor = Proveedor::findOrFail($id);

        $proveedor->nombre = request('nombre');
        $proveedor->direccion = request('direccion');
        $proveedor->telefono = request('telefono');
        $proveedor->correo = request('correo');

        $proveedor->save();

        return redirect('/Proveedores_Tabla');
    }

    public function eliminar($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();

        return redirect('/Proveedores_Tabla');
    }
    
}
