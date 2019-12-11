<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function index(){

        $users = User::all();
       // $users = DB::table('users')->get();
        
    	return view('student.index')->with('users', $users);
    }

    function details($id){

    	//your task finding student from array

    	$std = User::find($id);
       // return response()->json($std);
    	return view('student.details')->with('std', $std);
    }




/////get delete////

  function delete($id){

    
        $std = User::find($id);

       //  return response()->json($std);
        return view('student.delete')->with('std', $std);
    }

//////post delete////////
 function destroy($id){

        //delete student from array and send the updated array in userlist
           $std = User::find($id);
            $std->delete(); 
        return redirect()->route('student.index');
    }


////////get edit////////

 function edit($id){

        //find student form array

         $std = User::find($id);
        return view('student.edit')->with('std', $std);
    }


///////post update////////
function update(Request $req, $id){

        $user = User::find($id);
        $user->username = $req->username;
        $user->password = $req->password;
        $user->type = "admin";
        $user->save();

        return redirect()->route('student.index');
    }







/////////useless/////////////////////////
    function studentList(){
    	return [
    			['id'=>'12-222222-1','username'=>'xyz', 'password'=>'123'],
    			['id'=>'13-222222-2','username'=>'asd', 'password'=>'567'],
    			['id'=>'14-222222-3','username'=>'hjk', 'password'=>'345']
    	];
    }

   
	
	

   

    function add(){

        return view('student.adduser');
    }

    function insert(Request $req){

        $user = new User();
        $user->username = $req->username;
        $user->password = $req->password;
        $user->type = $req->type;
       
        // $user->save();
        if($user->save()){
            return redirect()->route('student.index');

//return response->json()
        }else{
            return redirect()->route('student.add');
        }
    }








}
