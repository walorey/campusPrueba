<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::orderBy('id', 'DESC')->paginate(5);
        return view('admin.usuarios')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.registrarUsuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

        $usuario = new User($request->all());
        $usuario->password = bcrypt($request->password);
        $usuario->save();

        return redirect()->route('usuarios.index')->with('verde', 'Se creo al usuario: '.$usuario->name.' '.$usuario->lastname);

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
        $usuario = User::find($id);

        return view('admin.editarUsuario')->with('usuario',$usuario);
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
        $usuario = User::find($id);
        $usuario->name = $request->name;
        $usuario->lastname = $request->lastname;
        $usuario->email = $request->email;
        $usuario->type = $request->type;
        $usuario->save();
        return redirect()->route('usuarios.index')->with('verde', 'Se actualizo al usuario: '.$usuario->name.' '.$usuario->lastname.' correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('amarillo', 'Se elimino al usuario: '.$usuario->name.' '.$usuario->lastname);
    }

    public function blanquearPassword(Request $request, $id)
    {
        $usuario = User::find($id);
        $usuario->password = bcrypt($request->password);
        $usuario->save();
        return redirect()->route('usuarios.index');

    }

}
