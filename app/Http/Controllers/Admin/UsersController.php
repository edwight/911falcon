<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\User;
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
		return View('admin.user.create');
	}
	public function store(Request $request)
	{
		return 'store';
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
