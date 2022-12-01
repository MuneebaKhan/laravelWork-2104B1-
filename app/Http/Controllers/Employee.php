<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Employee extends Controller
{
    public function Show(){
        return view('Employee.add');
    }

     public function ShowEmp(){
        return view('Employee.Showdata');
    }
}
