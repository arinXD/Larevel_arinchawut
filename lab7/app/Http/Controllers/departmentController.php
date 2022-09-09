<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
class departmentController extends Controller
{
    function index(){
        $departments=Department::all();
        return view('Departments',compact('departments'));
    }
    function deleteDepartment(Request $request){
        Department::destroy($request->id);
        return redirect('departments');     
    }
}
