<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\UserCreateRequest;
use App\Http\Requests\Backend\UserUpdateRequest;
use App\User;
use App\Task;

class UserController extends Controller
{
	public function index()
	{
		$users = User::paginate(5);
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

	public function getUpdate(User $user)
	{
		return view('Backend.users.update', ['user' => $user]);
	}

	public function postUpdate(User $user, UserUpdateRequest $request)
	{
		$user->email = $request->input('email');
		$user->name = $request->input('name');
		if ($request->filled('password')){
			$user->password = $request->input('password');
		}
		$user->is_admin = $request->input('is_admin');

		$user->save();

		return redirect('/dashboard/users')->with('success', 'User has been successfully updated!');
	}

	public function delete(User $user)
	{
		Task::where('user_id', $user->id)->delete();
		$user->delete();

		return redirect()->back()->with('success', 'User has been successfully deleted!');
	}
}
