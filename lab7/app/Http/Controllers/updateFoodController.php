<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class updateFoodController extends Controller
{
    function createForm(Request $request){
        $updateID=$request->id;
        $updateName=$request->name;
        $updatePrice=$request->price;
        return view('updateFood',compact('updateID','updateName','updatePrice',));
    }
    function updateFood(Request $request){
        $foodID=$request->updated_foodid;
        $newname=$request->updated_foodname;
        $newtype=$request-> updated_foodtype;
        $newprice=$request-> updated_foodprice;
        // $food = Food::find($foodID);
        // $food->name = $newname;
        // $food->type = $newtype;
        // $food->price = $newprice;
        // $food->save();
        // return redirect('/food');
        echo "ID: ".$foodID;
    }
    function deleteFood(Request $request){
        Food::destroy($request->id);
        return redirect('food');
    }
}
