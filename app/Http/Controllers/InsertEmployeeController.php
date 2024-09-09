<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class InsertEmployeeController extends Controller
{
    //
    function employee(Request $request){

        $employee =New employee();
        $employee ->names =$request ->names;
        $employee ->job_status =$request ->job_status;
        $employee ->date_of_birth =$request ->date;
        //$add ->job_status =$request ->status;
        $result = $employee ->save();
        if($request){
            echo "<script>alert('Data Successful')</script>";
            return redirect('/employee');
        }else{
            echo "<script>alert('Data Not Successful')</script>";
        }
    }
    function list(){
         $employeeData = employee::all();
         return view('/employee',['employee'=>$employeeData]);
    }
    function delete($id){

        $isDelete = employee::destroy($id);
        if($isDelete){
            return redirect('/employee');
        }
    }
function edit($id){

    $edit=employee::find($id);
    return view('/updateemployee',["data" =>$edit]);
}
function editEmployee(Request $request,$id){

     $edit = employee::find($id);
     $edit->names=$request-> names;
     $edit->job_status=$request-> job_status;
     $edit->date_of_birth=$request-> date;
     
     if($edit->save()){
        return redirect('/employee');
     }
}
}
