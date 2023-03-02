<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use App\Models\Inventario;
use Illuminate\Http\Request;

class IngresosController extends Controller
{
    //    {
//        $this->middleware('auth:api', ['except' => []]);
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ingreso::with('ventas_ingresos_Rel.clientes_ventas_Rel','ventas_ingresos_Rel.estatusComprasVentas_ventas_Rel',
            'ventas_ingresos_Rel.descuentos_ventas_Rel','ventas_ingresos_Rel.categoriaFactura_ventas_Rel')->get();
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
        $data = Ingreso::create($request->all());
        return $data;
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
