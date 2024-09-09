<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bootcamps;

class InsertBootCampController extends Controller
{
    //
 function bootcamp(Request $request){
    $bootcampss =New bootcamps();
    $bootcampss ->firstname =$request ->firstname;
    $bootcampss ->lastname =$request ->lastname;
    $bootcampss ->class =$request ->class;
    $bootcampss ->level =$request ->level;
    $bootcampss ->start_date =$request ->start_date;
    $bootcampss ->end_date =$request ->end_date;
    $result = $bootcampss ->save();
    if($request){
        return redirect('/bootcamp');
        //echo "<script>alert('Data Successful')</script>";
    }else{
        echo "<script>alert('Data Not Successful')</script>";
    }

}

function list(){
    $bootcampData = bootcamps::all();
    return view('/bootcamp',['bootcamps'=>$bootcampData]);
}

function delete($id){
    $isDelete = bootcamps::destroy($id);
    if($isDelete){
        return redirect('bootcamp');
    }
}

function edit($id){

    $edit=bootcamps::find($id);
    return view('/updatebootcamp',["data" =>$edit]);
}
function editBoot(Request $request,$id){

     $edit = bootcamps::find($id);
     $edit->firstname=$request-> firstname;
     $edit->lastname=$request-> lastname;
     $edit->class=$request->class;
     $edit->level=$request->level;
     $edit->start_date=$request->start_date;
     $edit->end_date=$request->end_date;
     if($edit->save()){
        return redirect('/bootcamp');
     }
}


}