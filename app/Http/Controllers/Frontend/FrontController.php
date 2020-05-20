<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
	public function index()
	{
		return view('Frontend.home.index');
	}

	public function getLogin()
	{
		return view('Frontend.home.login');
	}

	public function postLogin()
	{
		// Post login code
	}

	public function getRegister()
	{
		return view('Frontend.home.register');
	}

	public function postRegister()
	{
		// Post register code
	}
}
