<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function aPropos()
    {
        return view('a_propos');
    }
}
