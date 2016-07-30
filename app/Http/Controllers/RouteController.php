<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RouteController extends Controller
{
    public function getHomepage()
    {
        return view('welcome');
    }
}
