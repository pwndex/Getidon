<?php

namespace App\Http\Controllers\Frontend\Account;

use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
    public function getUpdate()
    {
        return view('Frontend.account.password');
    }

    public function postUpdate()
    {
        // code...
    }
}
