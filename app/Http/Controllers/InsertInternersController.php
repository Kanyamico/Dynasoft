<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\interner;

class InsertInternersController extends Controller
{
    //
    function interner(Request $request){
    $interner =New interner();
    $interner ->firstname =$request ->firstname;
    $interner ->lastname =$request ->lastname;
    $interner ->class =$request ->class;
    $interner ->level =$request ->level;
    $interner ->start_date =$request ->start_date;
    $interner ->end_date =$request ->end_date;
    $result = $interner ->save();
    if($request){
        return redirect('interner');
        echo "<script>alert('Data Successful')</script>";
    }else{
        echo "<script>alert('Data Not Successful')</script>";
    }

}


function list(){
    $studentData = interner::all();
    return view('/interner',['interner'=>$studentData]);
}
function delete($id){

    $isDelete = interner::destroy($id);
    if($isDelete){
        return redirect('/interner');
    }
}

function edit($id){

    $edit=interner::find($id);
    return view('/updatestudent',["data" =>$edit]);
}
function editStudent(Request $request,$id){

     $edit = interner::find($id);
     $edit->firstname=$request-> firstname;
     $edit->lastname=$request-> lastname;
     $edit->class=$request->class;
     $edit->level=$request->level;
     $edit->start_date=$request->start_date;
     $edit->end_date=$request->end_date;
     if($edit->save()){
        return redirect('/interner');
     }
}
}
