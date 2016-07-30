<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RouteController extends Controller
{
    public function gotoLogin()
    {
        return view('admin.login');
    }

    public function gotoAdmin()
    {
        if (\Auth::user()) {
            return view('admin.admin');
        }
        return redirect()->route('admin.gotologin');
    }
}
