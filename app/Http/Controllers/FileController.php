<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $archivos = File::orderBy('id','DESC')->paginate(10);
        return view('admin.archivos')->with('archivos', $archivos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subirArchivo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // $archivo->ruta = asset($ruta);
        // $archivo->save();
        //esto lo mueve bien
        // Storage::put('public',$request->file('archivo'));
        // $archivo = new File();
        // $archivo->name = $request->name;
        //cuando pongo la ruta en el enlace no muestra nada
        // $archivo->ruta = $ruta;

        // $path = Storage::disk('local')->putFile('public', $request->file('archivo'));

        $archivo = new File();
        $archivoRequest = $request->file('archivo');
        $ruta = Storage::disk('public')->put('files', $archivoRequest);
        $archivo->name = $request->name;
        $archivo->descripcion = $request->descripcion;
        $archivo->modulo = $request->modulo;
        $archivo->ruta = $ruta;
        $archivo->save();


        return redirect()->route('archivos.index')->with('verde', 'Se subio el archivo: '.$archivo->name);
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
        $archivo = File::find($id);
        return view('admin.editarArchivo')->with('archivo', $archivo);
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
        $archivo = File::find($id);
        if ($request->hasFile('archivo')) {
            $archivoRequest = $request->file('archivo');
            $ruta = Storage::disk('public')->put('files', $archivoRequest);
            $archivo->ruta = $ruta;
        }
        $archivo->name = $request->name;
        $archivo->descripcion = $request->descripcion;
        $archivo->modulo = $request->modulo;
        $archivo->save();
        return redirect()->route('archivos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $archivo = File::find($id);
        $archivo->delete();
        return redirect()->route('archivos.index');
    }
}
