<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;


class RestaurantController extends Controller
{

    public function generateSlug($slug){
      //remove any character that isnt a space hyphen letter number
      //remove spaces and duplicate hyphens
      //trim left and right from any extra hyphens

      $lettersNumbersSpacesHyphens = '/[^-/sa-zA-Z0-9]/';
      $spacesDuplicateHyphens = '/[-/s]+/';

      $slug = preg_replace($lettersNumbersSpacesHyphens, '', $slug);
      $slug = preg_replace($spacesDuplicateHyphens, '-', $slug);
      $slug = trim($slug, '-');

      return $slug;

    }

    public function create(Request $request)
    {

      $restaurant = new Restaurant();
      $restaurant->name = $request->name;
      $restaurant->description = $request->description;
      $restaurant->slug = generateSlug($request->name);


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
