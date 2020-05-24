<?php

namespace App\Http\Controllers\Frontend\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\UpdateAccountRequest;

class SettingsController extends Controller
{
    public function getUpdate()
    {
    	return view('Frontend.account.settings');
    }

    public function postUpdate(UpdateAccountRequest $request)
    {
    	$user = auth()->user();
    	$user->email = $request->input('email');
    	$user->name = $request->input('name');
    	$user->save();

    	return redirect()->back()->with('success', 'Settings have been updated!');
    }
}
