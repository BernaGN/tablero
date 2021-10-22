<?php

namespace App\Http\Controllers;

use App\Models\Estatu;
use Illuminate\Http\Request;

class EstadoController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Estatu::create($request->all());
        return back()->with(['tipo' => 'Columna'])->with(['agregado' => 'agregada']);
    }
}
