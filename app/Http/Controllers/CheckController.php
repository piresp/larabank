<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function show()
    {
        return view('user.checks');
    }

    public function accepted()
    {
        return view('user.checks_accepted');
    }

    public function pendent()
    {
        return view('user.checks_pendent');
    }

    public function rejected()
    {
        return view('user.checks_rejected');
    }
}
