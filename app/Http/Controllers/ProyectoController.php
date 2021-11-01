<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use App\Models\Configuracion;

class ProyectoController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->configuracion_id == 4) {
            $confi = Configuracion::create([
                'nombre' => $request->nameConfiguracion
            ]);
            for($i = 0; $i < count($request->name); $i++) {
                Estado::create([
                    'name' => $request->name[$i],
                    'configuracion_id' => $confi->id,
                    'textColor_id' => $request->textColor_id[$i],
                    'backgroundColor_id' => $request->backgroundColor_id[$i],
                ]);
            }
            Proyecto::create([
                'nombre' => $request->nombre,
                'descripcion' => $request->descripcion,
                'configuracion_id' => $confi->id,
                'user_id' => auth()->user()->id,
            ]);
        }
        else {
            Proyecto::create($request->all());
        }
        return back()->with(['tipo' => 'Proyecto'])->with(['agregado' => 'agregado']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        $proyecto->update($request->all());
        return back()->with(['tipo' => 'Proyecto'])->with(['modificado' => 'modificado']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return back()->with(['tipo' => 'Proyecto'])->with(['eliminado' => 'eliminado']);
    }
}
