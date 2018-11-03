<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\classes\Backend;


class RestaurantController extends Controller
{

    public function create(Request $request)
    {

      $restaurant = new Restaurant();
      $_backend = new Backend();
      $restaurant->name = $request->name;
      $restaurant->description = $request->description;
      $restaurant->slug = $_backend->generateSlug($request->name);

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
