<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shift;
use App\Models\employee;


class AttandanceController extends Controller
{
    //
    public function showAttandance(){
        return view('dashboard');
    }

    function list(){
        $showData = Shift::all();
        return view('/dashboard',['Shift'=>$showData]);
    }

}
