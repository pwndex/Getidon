<?php

namespace App\Http\Controllers\Frontend\Account;

use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function getUpdate()
    {
    	return view('Frontend.account.settings');
    }

    public function postUpdate()
    {
        // code...
    }
}
