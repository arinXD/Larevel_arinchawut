<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
class foodController extends Controller
{
    function foodList(){
        // $foods=Food::withTrashed()->get();
        // $foods=Food::onlyTrashed()->get();
        $foods=Food::all();
        return view('food',compact('foods'));
    }
    function createForm(){
        return view('foodOrder');
    }
    function addOrder(Request $request){
        $foodOrder = new Food;
        $foodOrder->name=$request->foodName;
        $foodOrder->type=$request->foodType;
        $foodOrder->price=$request->price;
        $foodOrder->save();
        return redirect()->route('food');
    }
}
