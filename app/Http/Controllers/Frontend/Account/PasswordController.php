<?php

namespace App\Http\Controllers\Frontend\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\UpdatePasswordRequest;

class PasswordController extends Controller
{
    public function getUpdate()
    {
        return view('Frontend.account.password');
    }

    public function postUpdate(UpdatePasswordRequest $request)
    {
    	$user = auth()->user();
    	$user->password = $request->input('password');
    	$user->save();

    	return redirect()->back()->with('success', 'Password has been updated!');
    }
}
