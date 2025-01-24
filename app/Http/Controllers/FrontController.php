<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchandise;

class FrontController extends Controller
{

    public function index()
    {
        $merchandises = Merchandise::all();
        return view('front.index', compact('merchandises'));
    }

    public function ticket()
    {
        return view('front.ticket');
    }
}
