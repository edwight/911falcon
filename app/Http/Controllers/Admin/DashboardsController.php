<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardsController extends Controller
{
    public function index()
	{
		$user = User::count();
		return View('admin.dashboard.index',compact('user'));
	}
}
