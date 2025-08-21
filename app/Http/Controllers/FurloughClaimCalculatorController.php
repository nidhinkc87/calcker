<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FurloughClaimCalculatorController extends Controller
{
    public function index()
    {
        return view('calculators.furlough-claim');
    }
}
