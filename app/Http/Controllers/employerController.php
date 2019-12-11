<?php

namespace App\Http\Controllers;
use App\Employer;
use Illuminate\Http\Request;


//use Validator;
use App\Http\Requests\validation;


class employerController extends Controller
{
    //


    function index(){

        $users = Employer::all();
       // $users = DB::table('users')->get();
        
    	return view('employer.index')->with('users', $users);
    }

    function details($id){

    	//your task finding student from array

    	$std = Employer::find($id);
       // return response()->json($std);
    	return view('employer.details')->with('std', $std);
    }




/////get delete////

  function delete($id){

    
        $std = Employer::find($id);

       //  return response()->json($std);
        return view('employer.delete')->with('std', $std);
    }

//////post delete////////
 function destroy($id){

        //delete student from array and send the updated array in userlist
           $std = Employer::find($id);
            $std->delete(); 
        return redirect()->route('employer.index');
    }


////////get edit////////

 function edit($userId){

        //find student form array

         $std = Employer::find($userId);

         // return response()->json($std);
        return view('employer.edit')->with('std', $std);
    }


///////post update////////
function update(Request $req, $id){

        $user = Employer::find($id);
        $user->username = $req->username;
        $user->password = $req->password;
        $user->type = "admin";
        $user->save();

        return redirect()->route('employer.index');
    }







/////////useless/////////////////////////
    

   
	
	

   

    function add(){

        return view('employer.addemployee');
    }

    function insert(validation $req){

        $user = new Employer();
      

  $user->employername = $req->employername;
  $user->companyname = $req->companyname;
  $user->contact = $req->contact;
  $user->username = $req->username;
  
        $user->password = $req->password;
        $user->type = $req->type;
       
        // $user->save();
        if($user->save()){
            return redirect()->route('employer.index');

//return response->json()
        }else{
            return redirect()->route('employer.addemployee');
        }
    }








}
