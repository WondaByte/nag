<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index()
    {
        return view('fieldrep.fdashboard');
    }


    public function addGeodata()
    {
        return view('fiedrep.fdashboard');
    }
}
