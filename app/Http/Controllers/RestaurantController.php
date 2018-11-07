<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\classes\Backend;



class RestaurantController extends Controller
{
    public function index(){
      $restaurants = Restaurant::all();

      return view('read',['restaurants' => $restaurants]);
    }

    public function create(){

      return view('create');
    }

    public function edit($id){
      $restaurant = Restaurant::findOrFail($id);

      return view('edit', ['restaurant' => $restaurant]);

    }

    public function store(Request $request){

      if ($request->id) {
        $restaurant = Restaurant::find($request->id);
      } else {
         $restaurant = new Restaurant;
      }
      $restaurant->name = $request->name;
      $restaurant->description = $request->description;
      $restaurant->slug =Backend::generateSlug($request->name);

      $restaurant->save();

      return redirect('/admin');


    }

//bad pracitce
    public function delete($id) {

      $restaurant = Restaurant::findOrFail($id);
      $restaurant->delete();

      return redirect('/admin');
    }
//
    public function view($id) {

      $restaurant = Restaurant::findOrFail($id);


      return view('restaurant', [
        'restaurant' => $restaurant
      ]);

    }
}
