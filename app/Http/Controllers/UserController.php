<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Http\Requests;

class UserController extends Controller
{
    public function index()
	{
		$user = User::all();
		//mostrar la lista de post
		//$tags = Tag::all();
		foreach($user as $users) {
			print($users->id);
		}
		//return View('admin.user.index', compact('user'));
	}
	public function create()
	{
		return View('admin.user.create');
	}
	public function show($id)
	{
		//admin/1
		$user = User::findOrFail($id);
		return View('admin.user.show', compact('user'));
	}
}
