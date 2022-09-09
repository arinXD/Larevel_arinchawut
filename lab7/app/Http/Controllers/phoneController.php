<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Phone;

class phoneController extends Controller
{
    function index(){
        $phones=Phone::all();

        echo $phones;
    }
    function addPhone(Request $request){
        $phone=new Phone;
        $phone->member_id=$request->uid;
        $phone->model=$request->model;
        $phone->due_date=now();
        $phone->save();

        return redirect('showphone');
    }
}
