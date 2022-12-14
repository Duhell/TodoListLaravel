<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Todo::paginate(4);
        return view("welcome")->with('todos',$tasks);
    }
    public function store(Request $req){
        $tasks = new Todo;
        $tasks->task = $req->input('todo');
        $tasks->save();
        return redirect("/");
    }

    public function create(){
        return view('addTask');
    }

    public function show($id){
        $tasks = Todo::find($id);
        return view("show")->with('todos',$tasks);
    }

    public function update(Request $req, $id){
       $tasks = Todo::find($id);
       $tasks->task = $req->todo;
       $tasks->save();
       return redirect("/");

    }

    public function destroy($id){
        $tasks = Todo::find($id);
        $tasks->delete();
       return redirect("/");
        
    }

    public function edit($id){
        $tasks = Todo::find($id);
        return view("edit")->with('todos',$tasks);
    }
}
