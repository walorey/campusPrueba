<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Discusion;
use App\Comentario;

class DiscusionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discusiones = Discusion::orderBy('id', 'DESC')->paginate(5);

          $discusiones->each(function($discusiones){
            $discusiones->cuerpo = substr($discusiones->cuerpo, 0, 50).' ...';
        });

        return view('foro.home')->with('discusiones', $discusiones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foro.nuevaDiscusion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $discusion = new Discusion($request->all());
        $discusion->user_id = Auth::User()->id;
        $discusion->save();

        return redirect()->route('foro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $discusion = Discusion::find($id);

        return view('foro.discusion')->with('discusion', $discusion);
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
        $discusion = Discusion::find($id);
        $discusion->delete();
        return redirect()->route('ver.discusiones');
    }


    public function comentar(Request $request, $id)
    {
        $comentario = new Comentario($request->all());
        $comentario->discusion_id = $id;
        $comentario->id_user = Auth::User()->id;
        $comentario->save();
        $discusion = Discusion::find($id);

        return view('foro.discusion')->with('discusion', $discusion);
    }

    public function administrarDiscusiones()
    {
        $discusiones = Discusion::orderBy('id', 'DESC')->paginate(10);

          $discusiones->each(function($discusiones){
            $discusiones->cuerpo = substr($discusiones->cuerpo, 0, 50).' ...';
        });

        return view('admin.discusiones')->with('discusiones', $discusiones);
    }
}
