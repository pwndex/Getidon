<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\LoginRequest;
use App\Http\Requests\Frontend\RegisterRequest;

class AuthController extends Controller
{
	public function getLogin()
	{
		return view('Frontend.home.login');
	}

	public function postLogin(LoginRequest $request)
	{
		$credentials = $request->only('email', 'password');
		if(auth()->attempt($credentials, $request->has('remember_me'))) {
			return redirect('/tasks')->with('success', 'You have been successfully loged in!');
		}
		return redirect('/login')->with('error', 'Incorrect email or password!');
	}

	public function getRegister()
	{
		return view('Frontend.home.register');
	}

	public function postRegister(RegisterRequest $request)
	{
		$user = \User::create($request->all());
		auth()->login($user);

		return redirect('/tasks')->with('success', 'You have been successfully joined in!');
	}

	public function logout()
	{
		auth()->logout();

		return redirect('/login')->with('success', 'You have been successfully loged out!');
	}
}
