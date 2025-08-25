<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRAExemptionCalculatorController extends Controller
{
    public function index()
    {
        return view('calculators.hra-exemption');
    }
}