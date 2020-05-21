<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('Frontend.home.index');
    }
}
