<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\TaskProject;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;

class ProductController extends Controller
{
    

    public function add_task (){
        $data = array();
        if(Session::has('loginId')) {
            $data = User::where('id', "=", Session::get("loginId"))->first();
        }
        return view ('task.add_task', compact('data'));
    }

    public function store(Request $request){
        // dd($request); 
        $request->validate([
            "project_name"=>"required",
            "status"=>"required",
            "start_date"=>"required",
            "end_date"=>"required",
            "project_manager"=>"required",
            "project_team_member"=>"required",
            "description"=>"required",
        ]);

        $task=new Task;
        $task->project_name=$request->project_name;
        $task->status=$request->status;
        $task->start_date=$request->start_date;
        $task->end_date=$request->end_date;
        $task->project_manager=$request->project_manager;
        $task->project_team_member=$request->project_team_member;
        $task->description=$request->description;       
        $task->save();
        return back()->withSuccess('Project Created Successfully..');
    }


    public function list_project (Request $request){

        $data = array();
        if(Session::has('loginId')) {
            $data = User::where('id', "=", Session::get("loginId"))->first();
        }

        $tasks= Task::get();
        // $tasks= Task::latest();
        $tasks= Task::latest()->paginate(5);  
        return view ('task.list_project', compact('data', 'tasks'));
    }

    public function view_task($id){
        $data = array();
        if(Session::has('loginId')) {
            $data = User::where('id', "=", Session::get("loginId"))->first();
        }

        $tasks = Task::where( 'id',$id)->first();
       
        return view('task.view_task',compact('data', 'tasks'));
    }

    public function edit_task($id){
        $data = array();
        if(Session::has('loginId')) {
            $data = User::where('id', "=", Session::get("loginId"))->first();
        }

        $tasks = Task::where( 'id',$id)->first();
        return view('task.edit_task',compact('data', 'tasks'));
    }

    public function update_task(Request  $request, $id){
        $request->validate([
            "project_name"=>"required",
            "status"=>"required",
            "start_date"=>"required",
            "end_date"=>"required",
            "project_manager"=>"required",
            "project_team_member"=>"required",
            "description"=>"required",
        ]);

        $task = Task::where( 'id',$id)->first();   
        $task->project_name=$request->project_name;
        $task->status=$request->status;
        $task->start_date=$request->start_date;
        $task->end_date=$request->end_date;
        $task->project_manager=$request->project_manager;
        $task->project_team_member=$request->project_team_member;
        $task->description=$request->description;       
        $task->save();
        return redirect('/tasks/list')->withSuccess('Project Details Updated Successfully..');
    }

    public function delete_task($id){
        $tasks = Task::where( 'id',$id)->first();
        $tasks->delete();
        return back()->withSuccess('Project Details Deleted Successfully..');
    }

    // public function search(Request $request){             
        

    //     $query = $request->input('query');
    //     if (!empty($query) && strlen($query) >= 1) {

    //         $firstLetter = substr($query, 0, 1);
    //         $tasks = Task::where('project_name', 'LIKE', $firstLetter . '%')->get();
            
           

    //     } else {
    //         // $tasks = collect([]);
    //         $tasks= Task::latest()->paginate(4);

    //     }
    //     return view('task.list_project', compact('tasks'));
    // }
   
}
