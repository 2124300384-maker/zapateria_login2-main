<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function listado()
    {
        $colores = Color::all();

        return view(
            'Colores_Tabla.colores_tabla',
            compact('colores')
        );
    }

    public function guardar(Request $request)
    {
        $colores = new Color();

        $colores->color = $request->color;

        $colores->save();

        return redirect('/Colores_Tabla');
    }

        public function editar($id)
    {
        $colores = Color::findOrFail($id);

        return view('colores.colores', compact('colores'));
    }

    public function actualizar(Request $request, $id)
    {
        $colores = Color::findOrFail($id);

        $colores->color = $request->color;

        $colores->save();

        return redirect('/Colores_Tabla');
    }

    public function eliminar($id)
    {
        $colores = Color::findOrFail($id);
        $colores->delete();

        return redirect('/Colores_Tabla');
    }
}