<?php

namespace App\Http\Controllers;

use App\Models\Talla;
use Illuminate\Http\Request;

class TallaController extends Controller
{
    public function listado(){
       // return "Este es el metodo para el select * from table";
        $tallas = Talla::all();
        return view(
            'Tallas_Tabla.tallas_tabla',
            compact('tallas')        
        );
    }

    public function guardar(Request $request)
    {
        $talla = new Talla();

        $talla->talla = $request->talla;

        $talla->save();

        return redirect('/Tallas_Tabla');
    }

     public function editar($id)
    {
        $talla = Talla::findOrFail($id);

        return view('tallas.tallas', compact('talla'));
    }

    public function actualizar(Request $request, $id)
    {
        $talla = Talla::findOrFail($id);

        $talla->talla = $request->talla;

        $talla->save();

        return redirect('/Tallas_Tabla');
    }

        public function eliminar($id)
        {
            $talla = Talla::findOrFail($id);
            $talla->delete();
    
            return redirect('/Tallas_Tabla');
        }

}