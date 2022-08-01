<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use DB;

class ProjectController extends Controller
{
   

    
    public function getAllDepartments(Request $request){

        $departments   = Department::all();
        return view('index',[
            'departments'  -> $departments
        ]);
        // $departments = Department::all();
        // return view("index", ('departments'->$departments));
    }
}
