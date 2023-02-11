<?php

namespace App\Http\Controllers;

use App\Models\Utilidad;
use Illuminate\Http\Request;

class UtilidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Utilidad::with(
            'ingresos_utilidades_Rel.ventas_ingresos_Rel.clientes_ventas_Rel',
            'ingresos_utilidades_Rel.ventas_ingresos_Rel.estatusComprasVentas_ventas_Rel',
            'ingresos_utilidades_Rel.ventas_ingresos_Rel.descuentos_ventas_Rel',
            'ingresos_utilidades_Rel.ventas_ingresos_Rel.categoriaFactura_ventas_Rel',
            'egresos_utilidades_Rel.compras_egresos_Rel.proveedores_compras_Rel',
            'egresos_utilidades_Rel.compras_egresos_Rel.estatusComprasVentas_compras_Rel',
            'egresos_utilidades_Rel.compras_egresos_Rel.descuentos_compras_Rel',
        )->get();
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
