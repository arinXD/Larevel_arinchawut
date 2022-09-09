<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Phone;


class memberController extends Controller
{
    function index(){
        $members=Member::all();
        // $phones=Phone::all();
        echo $members;
    }
    function addMember(Request $request){
        $member = new Member;
        $member->name=$request->name;
        $member->email=$request->email;
        $member->save();
        return redirect('/showmember');
    }
    function showreSult(){
        $members=Member::all();
        // $phones=Phone::all();
        return view('memphone',compact('members'));
    }
}
