<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class jobController extends Controller
{
    //

  function index(){

        $jobs = Job::all();
       // $users = DB::table('users')->get();
        
    	return view('job.index')->with('jobs', $jobs);
    }


    function details($id){

    	//your task finding student from array

    	$job = Job::find($id);
       // return response()->json($std);
    	return view('job.details')->with('job', $job);

    }

 function delete($id){

    
        $job = Job::find($id);

       //  return response()->json($std);
        return view('job.delete')->with('job', $job);
    }

function destroy($id){

        //delete student from array and send the updated array in userlist
          $job = Job::find($id);
            $job->delete(); 
        return redirect()->route('job.index');
    }








    function edit($id){

        //find student form array
        $job = Job::find($id);
        return view('job.edit')->with('std', $job);
    }


///////post update////////
function update(Request $req, $id){

         $job = Job::find($id);



                $job->companyname = $req->companyname;
                $job->jobtitle = $req->jobtitle;
                $job->jobloc = $req->jobloc;
                $job->salary = $req->salary;
          
                $job->save();

        return redirect()->route('job.index');
    }




  function add(){

        return view('job.addjob');
    }




    function insert(Request $req){

        $job = new Job();
              
                $job->companyname = $req->companyname;
                $job->jobtitle = $req->jobtitle;
                $job->jobloc = $req->jobloc;
                $job->salary = $req->salary;
        // $user->save();
        if($job->save()){
            return redirect()->route('job.index');

//return response->json()
        }else{
            return redirect()->route('job.add');
        }
    }
















}
