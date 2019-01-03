<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class TerminalController  extends BaseController
{

    public function showTerminal()
    {
        return view('welcome');
    }
}
