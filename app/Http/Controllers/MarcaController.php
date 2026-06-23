<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function listado(){
        $marcas = Marca::all();
       // return "Este es el metodo para el select * from table";
        return view(
            'Marcas_Tabla.marcas_tabla',
            compact('marcas')        
        );
    }

    public function guardar(Request $request)
    {
        $marca = new Marca();

        $marca->marca = $request->marca;

        $marca->save();

        return redirect('/Marcas_Tabla');
    }
        public function editar($id)
    {
        $marca = Marca::findOrFail($id);

        return view('marcas.marcas', compact('marca'));
    }

    public function actualizar(Request $request, $id)
    {
        $marca = Marca::findOrFail($id);

        $marca->marca = $request->marca;

        $marca->save();

        return redirect('/Marcas_Tabla');
    }

    public function eliminar($id)
    {
        $marca = Marca::findOrFail($id);
        $marca->delete();

        return redirect('/Marcas_Tabla');
    }
}