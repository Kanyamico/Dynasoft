<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeViewController extends Controller
{
    public function index(){
        return view('viewemployee');
    }
   
}
