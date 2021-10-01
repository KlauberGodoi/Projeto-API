<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\supermercado;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
class supermercadocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            "Itens da Compra"=>supermercado::pluck('valor','nome'),
            "Total a Pagar"=>supermercado::sum('valor')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $data = $request->all();
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['update_at'] = date('Y-m-d H:i:s');
            $supermercado = new supermercado();
            $supermercado->create($data);
            return response()->json($data);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\supermercado  $supermercado
     * @return \Illuminate\Http\Response
     */
    public function show(supermercado $supermercado)
    {
        return response()->json($supermercado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\supermercado  $supermercado
     * @return \Illuminate\Http\Response
     */
    public function edit(supermercado $supermercado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\supermercado  $supermercado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, supermercado $supermercado)
    {
        $supermercado->update($request->all());
        return $supermercado;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\supermercado  $supermercado
     * @return \Illuminate\Http\Response
     */
    public function destroy(supermercado $supermercado)
    {
        $supermercado->delete();
        return response()->json(null);
    }
}
