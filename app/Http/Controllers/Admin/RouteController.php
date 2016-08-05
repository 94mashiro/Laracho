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
        if (\Auth::user()) {
            return redirect()->route('admin.gotoadmin');
        }
        return view('admin.login');
    }

    public function gotoAdmin()
    {
        if (\Auth::user()) {
            return redirect()->route('admin.gotoarticle');
        }
        return redirect()->route('admin.gotologin');
    }

    public function gotoAddArticle()
    {
        if (\Auth::user()) {
            return view('admin.article.addarticle');
        }
        return redirect()->route('admin.gotologin');
    }

    public function gotoArticle()
    {
        if (\Auth::user()) {
            return view('admin.article.article');
        }
        return redirect()->route('admin.gotologin');
    }

    public function gotoCategory()
    {
        if (\Auth::user()) {
            return view('admin.category.category');
        }
        return redirect()->route('admin.gotologin');
    }

    public function gotoAddCategory()
    {
        if (\Auth::user()) {
            return view('admin.category.addcategory');
        }
        return redirect()->route('admin.gotologin');
    }
}
