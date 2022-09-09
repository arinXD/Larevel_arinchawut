<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    function index(){
        $id='643020423-0';
        $name='อริญชวุธ กัลยานาม';
        $birthday='14/08/2545';
        $email='rakukzanoat@gmail.com';
        $gender='643020423-0';

        return view('form', compact(
            'id',
            'name',
            'birthday',
            'email',
            'gender',
        ));
    }
}
