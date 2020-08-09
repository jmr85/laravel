<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Kernel;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function __construct()
    {
        // si no esta autenticado no muestra nada relacionado a users y redirecciona al login
        $this->middleware('auth', ['except' => ['show']]);
        $this->middleware('roles:admin', ['except' => ['edit','update','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::all();

        return view('users.index', compact('users'));
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
    public function store(SaveUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $this->authorize($user); 

        return view('users.edit', compact('user'));
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
        $user = User::findOrFail($id);
         /* 
            Validator::make reemplaza a SaveUserRequest ya que
            fue la unica manera de destrabar de que el mail
            del user que esta editando lo ignore, desde el SaveUserRequest no lo 
            podia hacer funcionar, o sea la clase SaveUserRequest 
            no se esta usando, se podria eliminar
         */
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => [
                'required',
                Rule::unique('users')->ignore($user->id),
            ],
        ])->validate();

        //el primer parametro se lo pasa automaticamente laravel
        // que es el user auth como en UserPolicy
        $this->authorize($user);

        $user->update($validator);

        // back devuelve la url anterior que era users index
        // y le pasamos un mensaje de sesion
        return back()->with('info', 'Usuario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $this->authorize($user);
        
        $user->delete();

        return back();
    }
}
