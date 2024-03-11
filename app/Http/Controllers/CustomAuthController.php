<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Task;

class CustomAuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function registration(){
        return view('auth.registration');
    }

    public function registerUser(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=>"required|email|unique:users",
            "password"=>"required|min:5|max:12",
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $result = $user->save();
        if($result){
            return redirect('/')->with('success ','You have Registered Successfully..');
        }else{
            return back()->with('fail ','Unsuccessful registration. Invalid information.');
        }
    }   

    public function loginUser(Request $request){
        $request->validate([
            "email"=>"required|email",
            "password"=>"required|min:5|max:12",
        ]);

        $user = User::where('email','=',$request->email)->first();
            if(Hash::check($request->password, $user->password)) { 
                $request->session()->put('loginId', $user->id);
                return redirect('/dashboard');
            }else{
                return back()->with('fail ','Password do not match.');
            } 
    }  
     
    public function dashboard() {

        $data = array();
        if(Session::has('loginId')) {
            $data = User::where('id', "=", Session::get("loginId"))->first();
        }
        $tasks = Task::all();
        $tasks= Task::latest()->paginate(5);
        
        return view('task.dashboard', compact('data', 'tasks'));

    }

    public function logout() {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect ('/');
        }
    }

    
}

