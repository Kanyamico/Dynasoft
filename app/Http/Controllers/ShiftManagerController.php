<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use App\Models\Shift;


class ShiftManagerController extends Controller
{
    //
    public function index()
    {
            $data=employee::All();
            return view('shiftmanager',['data'=>$data]); 
    }
  
     function AddUser(Request $request){

    $new_user =New Shift;
    $new_user->employee_id=$request->names;
    $new_user->start_time=$request->start;
    $new_user->end_time=$request->end;
    $result=$new_user->save();
    if($request){
        echo "<script>alert('Data Successful')</script>";
        return redirect('/shiftmanager');
    }else{
        echo "<script>alert('Data Not Successful')</script>";
    }

    }

    function list(){
        $shiftData = Shift::all();
        return view('/dashboard',['Shift'=>$shiftData]);
   }
   
 
}
