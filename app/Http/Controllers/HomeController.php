<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use \stdClass;

class HomeController extends Controller
{
    public function index()
    {


        $restaurants = Restaurant::all();

        return view('home', [
            'restaurants' => $restaurants
        ]);

    }
}
