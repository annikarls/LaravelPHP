<?php

namespace App\Http\Controllers;

use App\Beer;

class BeersController extends Controller
{
    public function index() {
        $beers = Beer::all();
        return view('beers.index', compact('beers'));
    }
}
