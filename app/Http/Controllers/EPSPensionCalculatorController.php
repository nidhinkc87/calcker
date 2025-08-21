<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EPSPensionCalculatorController extends Controller
{
    public function index()
    {
        return view('calculators.eps-pension');
    }
}