<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function cdashboard()
    {
        return view ('client.cdashboard');
    }
}
