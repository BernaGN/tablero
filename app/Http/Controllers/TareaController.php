<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Tarea;
use App\Models\Estado;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tarea::create($request->all());
        return back()->with(['tipo' => 'Tarea'])->with(['agregado' => 'agregada']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('tareas.index', [
            'proyecto' => Proyecto::find($id),
            'estados' => Proyecto::find($id)->configuracion->estados,
            'tareas' => Tarea::where('proyecto_id', $id)->get(),
            'colores' => Color::all(),
        ]);
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
        $tarea = Tarea::findOrFail($request->tarea_id);
        $tarea->update($request->all());
        return back()->with(['tipo' => 'Tarea'])->with(['modificado' => 'modificada']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $tarea = Tarea::findOrFail($request->tarea_id);
        $tarea->delete();
        return back()->with(['tipo' => 'Tarea'])->with(['eliminado' => 'eliminada']);
    }
}
