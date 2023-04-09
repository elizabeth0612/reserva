<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propertie;
use DataTables;

class InmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
    if ($request->ajax()) {
        $inmuebles=Propertie::where('estado',1)->get();
        return Datatables::of($inmuebles)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                       $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editPost">Edit</a>';

                       $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deletePost">Delete</a>';

                        return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
    }

    return view('inmueble.index' );
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
        //
        Propertie::updateOrCreate(['id' => $request->id],
        [
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'imagenes' => $request->imagenes,
        'precio_noche' => $request->precio_noche,
        'informacion' => $request->informacion,
        'reglas_propiedad' => $request->reglas_propiedad,
        'seguridad_propiedad' => $request->seguridad_propiedad,
        'politicas_cancelacion' => $request->politicas_cancelacion,
        'district_id' => $request->district_id,
        'estado' => 1,
        ]);

        return response()->json(['success'=>'Post saved successfully.']);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $inmuebles = Propertie::find($id);
        return response()->json($inmuebles);
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
        Propertie::find($id)->delete();

        return response()->json(['success'=>'Post deleted successfully.']);
    }
}
