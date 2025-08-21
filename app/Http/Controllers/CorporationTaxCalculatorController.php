<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporationTaxCalculatorController extends Controller
{
    public function index()
    {
        return view('calculators.corporation-tax');
    }
}
