<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        $tasks=Task::all();
        return view('index', compact('tasks'));
       
    }
    public function update_ter($id){
        $task=Task::findOrFail($id);

        $task->terminee = !$task->terminee;

        $task->save();

        return back();
    }

    
}
