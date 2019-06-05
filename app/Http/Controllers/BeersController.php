<?php

namespace App\Http\Controllers;

use App\Beer;

class BeersController extends Controller
{
    public function index() {
        $beers = Beer::all();
        return view('beers.index', compact('beers'));
    }

    public function create() {
        
        return view('beers.create');
    }

    public function store() {
        
        $beer = new Beer();
        $beer->beerName = request('name');
        $beer->beerImage = request('image');
        //$beer->beerRate = request('rate');
        $beer->beerIngredient = request('ingredient');
        $beer->beerDescription = request('description');
        $beer->beerAbv = request('abv');
        $beer->beerType = request('type');
        $beer->beerBrewery = request('brewery');
        $beer->beerUserId = request('userid');
        $beer->save();

        return redirect('/beers');
    }

    public function edit($id) {
        $beer = Beer::find($id);
        return view('beers.edit', compact('beer'));
    }

    public function update($id) {
        $beer = Beer::find($id);
        $beer->beerName = request('name');
        $beer->beerImage = request('image');
        //$beer->beerRate = request('rate');
        $beer->beerIngredient = request('ingredient');
        $beer->beerDescription = request('description');
        $beer->beerAbv = request('abv');
        $beer->beerType = request('type');
        $beer->beerBrewery = request('brewery');
        $beer->beerUserId = request('userid');
        $beer->save();

        return redirect('/beers');
    }
}
