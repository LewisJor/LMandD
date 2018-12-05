<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{
    public function getFaq()
    {
        return view('faq');
    }

    public function getAboutUs()
    {
        return view('aboutUs');
    }

    public function getServices()
    {
        return view('ourServices');
    }

    public function getAdmin()
    {
        return view('admin');
    }
}
