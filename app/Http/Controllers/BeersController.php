<?php

namespace App\Http\Controllers;

use App\Beer;
use Illuminate\Support\Facades\Auth;

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

        $userId= Auth::id();
        $beer = new Beer();
        $beer->beerName = request('name');
        $beer->beerImage = request('image');
        //$beer->beerRate = request('rate');
        $beer->beerIngredient = request('ingredient');
        $beer->beerDescription = request('description');
        $beer->beerAbv = request('abv');
        $beer->beerType = request('type');
        $beer->beerBrewery = request('brewery');
        $beer->user_id = $userId;
        $beer->save();

        return redirect('/users');
    }

    public function edit(Beer $beer) {
        return view('beers.edit', compact('beer'));
    }

    public function update(Beer $beer) {
        $userId= Auth::id();
        $beer->beerName = request('name');
        $beer->beerImage = request('image');
        //$beer->beerRate = request('rate');
        $beer->beerIngredient = request('ingredient');
        $beer->beerDescription = request('description');
        $beer->beerAbv = request('abv');
        $beer->beerType = request('type');
        $beer->beerBrewery = request('brewery');
        $beer->user_id = $userId;
        $beer->save();

        return redirect('/beers');
    }

    public function destroy(Beer $beer) {
        $beer->delete();

        return redirect('/beers');
    }
}
