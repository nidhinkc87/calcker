<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeTaxCalculatorController extends Controller
{
    public function index()
    {
        return view('calculators.income-tax');
    }
}
