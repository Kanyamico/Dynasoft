<?php

namespace App\Http\Controllers;
use App\Models\users;
use Illuminate\Http\Request;

class ShowUserController extends Controller
{
    //

 function list(){
         $userData = users::all();
         return view('/usermanagement',['users'=>$userData]);
    }
 function delete($id){
    $isDelete=users::destroy($id);
    if($isDelete){
        return redirect('usermanagement');
    }
}

function edit($id){

    $edit=users::find($id);
    return view('/updateuser',["data" =>$edit]);
}
function editUser(Request $request,$id){

     $edit = users::find($id);
     $edit-> name =$request-> name;
     $edit->usertype=$request-> usertype;
     $edit->email=$request-> email;
   
     if($edit->save()){
        return redirect('/usermanagement');
     }
}

}
