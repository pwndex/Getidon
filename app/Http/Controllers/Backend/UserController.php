<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\UserCreateRequest;
use App\User;

class UserController extends Controller
{
	public function index()
	{
		$users = User::paginate(3);
		return view('Backend.users.index', ['users' => $users]);
	}

	public function getCreate()
	{
		return view('Backend.users.create');
	}

	public function postCreate(UserCreateRequest $request)
	{
		User::create($request->all());

		return redirect('/dashboard/users')->with('success', 'User has been successfully created!');
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
