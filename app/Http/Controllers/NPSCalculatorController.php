<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NPSCalculatorController extends Controller
{
    public function index()
    {
        return view('calculators.nps-calculator');
    }
}