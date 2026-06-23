<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function listado()
    {
        $contactos = Contacto::all();

        return view(
            'Contactos_Tabla.contactos_tabla',
            compact('contactos')
        );
    }

    public function guardar(Request $request)
    {
        $contacto = new Contacto();

        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->telefono = $request->telefono;

        $contacto->save();

        return redirect('/Contactos_Tabla');
    }

    public function editar($id)
    {
        $contacto = Contacto::findOrFail($id);

        return view('Contactos.contactos', compact('contacto'));
    }

    public function actualizar(Request $request, $id)
    {
        $contacto = Contacto::findOrFail($id);

        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->telefono = $request->telefono;

        $contacto->save();

        return redirect('/Contactos_Tabla');
    }

    public function eliminar($id)
    {
        $contacto = Contacto::findOrFail($id);
        $contacto->delete();

        return redirect('/Contactos_Tabla');
    }
}