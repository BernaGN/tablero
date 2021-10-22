<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Tarea;
use App\Models\Estatu;
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tareas.index', [
            'estatus' => Estatu::where('tipo_id', 1)->get(),
            'tareas' => Tarea::all(),
            'colores' => Color::all(),
        ]);
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
        return back()->with(['modificado' => 'modificada']);
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
        return back()->with(['eliminado' => 'eliminada']);
    }
}
