<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantController extends Controller
{
    public function create(Request $request)
    {

      $restaurant = new Restaurant();
      $restaurant->name = $request->name;
      $restaurant->description = $request->description;

      $restaurant->save();

      return redirect('/');

    }

    public function view($id) {

      $restaurant = Restaurant::findOrFail($id);


      return view('restaurant', [
        'restaurant' => $restaurant
      ]);
      
    }
}
