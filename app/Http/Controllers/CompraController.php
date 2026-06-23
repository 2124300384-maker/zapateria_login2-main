<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function listado()
    {
        $compras = Compra::where('estado', 'Entregado')->orWhere('estado', 'En Camino')->orWhere('estado', 'Pendiente')->get();

        return view(
            'Compras_Tabla.compras_tabla',
            compact('compras')
        );
    }

    public function guardar(Request $request)
    {
        $compra = new Compra();

        $compra->proveedor_id = $request->proveedor_id;
        $compra->gasto_total = $request->gasto_total;
        $compra->fecha_compra = $request->fecha_compra;
        $compra->fecha_entrega = $request->fecha_entrega;
        $compra->precio = $request->precio;
        $compra->estado = $request->estado;

        $compra->save();

        return redirect('/Compras_Tabla');
    }

    public function editar($id)
    {
        $compra = Compra::findOrFail($id);
        $proveedores = Proveedor::all();

        return view(
            'compras.compras',
            compact('compra', 'proveedores')
        );
    }

    public function actualizar(Request $request, $id)
    {
        $compra = Compra::findOrFail($id);

        $compra->proveedor_id = $request->proveedor_id;
        $compra->gasto_total = $request->gasto_total;
        $compra->fecha_compra = $request->fecha_compra;
        $compra->fecha_entrega = $request->fecha_entrega;
        $compra->precio = $request->precio;
        $compra->estado = $request->estado;

        $compra->save();

        return redirect('/Compras_Tabla');
    }

public function eliminar($id)
{
    $compra = Compra::findOrFail($id);

    $compra->estado = 'Cancelado'; // o 0
    $compra->save();


    return redirect('/Compras_Tabla');
}
    
}