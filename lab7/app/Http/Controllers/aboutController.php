<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    function index(){
        $stu_id="643020423-0";
        $stu_name="อริญชวุธ กัลยานาม";
        return view('about',compact('stu_id','stu_name'));
    }
}
