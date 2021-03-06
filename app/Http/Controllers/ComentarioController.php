<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discusion;
use App\Comentario;
use Illuminate\Support\Facades\Auth;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $comentario = Comentario::find($id);
        $discusion = Discusion::find($comentario->discusion->id);
        $comentario->delete();


        return redirect()->route('discusiones.show', $discusion->id)->with('mensaje', 'Se ha eliminado el comentario');

    }

    public function comentar(Request $request, $id)
    {
        $comentario = new Comentario($request->all());
        $comentario->id_discusion = $id;
        $comentario->id_user = Auth::User()->id;
        $comentario->save();

        return redirect()->route('discusiones.show', $discusion->id);
    }
}
