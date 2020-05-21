<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index()
	{
		return view('Backend.users.index');
	}

	public function getCreate()
	{
		return view('Backend.users.create');
	}

	public function postCreate()
	{
		// code...
	}

	public function getUpdate()
	{
		return view('Backend.users.update');
	}

	public function postUpdate()
	{
		// code...
	}
}
