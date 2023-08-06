<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function __construct()
    {
        $this->middleware('log.acesso');
    }

    public function sobre() {
        return view('site.sobre', ['titulo' => 'Sobre']);
    }
}
