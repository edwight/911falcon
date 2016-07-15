<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Hash;
use App\Http\Requests;
use App\Models\User;
use App\Models\Grupo;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
	{
		$user = User::all();
		//mostrar la lista de post
		//$tags = Tag::all();
		return View('admin.user.index', compact('user'));
	}
	public function create()
	{
		$grupolist = Grupo::all();
		return View('admin.user.create',compact('grupolist'));
	}
	 public function store(Request $request)
    {

        $this->validate($request, [
            'nombre' => 'required',
            'cedula' => 'required',
            'password' => 'required',
            'telefono' => 'numeric',
            'type' => 'required',
            'grupos' => 'required'
            ]);

       //return $request->all();
        $phone = $request->input('telefono');//required
        $name = $request->input('nombre');
        $cedula = $request->input('cedula');
        $grupo = $request->input('grupos');
        $roles = $request->input('type');
        $password = $request->input('password');

        $user = New User;
        $user->name = $name;
        $user->slug = str_slug($name,'-');
        $user->roles = $roles;
        $user->email = $cedula;

		//$user->grupos->name = $grupo;
        $user->password = Hash::make($password);
        $user->phone = $phone;
        $user->save();

        $grupos = Grupo::find($grupo);

		$grupos->users()->save($user);
        

        return redirect('admin/users/');
        
    }
	public function edit($id)
	{
		$user = User::findOrFail($id);
		return View('admin.user.edit', compact('user'));
	}
	public function show($id)
	{
		//admin/1
		$user = User::findOrFail($id);
		return View('admin.user.show', compact('user'));
	}
	public function update(Request $request, $id)
    {
        return 'update';
    }
}
