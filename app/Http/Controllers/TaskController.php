<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('taches.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
             "name" => "required|min:4",
             "description"=>"required"

        ]);

        $task= new Task ();

        $task->name=$request->name;
        $task->description=$request->description;
      
     

        $task->save ();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
      $task=Task::findorFail($id);
       return view('taches.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name" => "required|min:4",
            "description"=>"required"

       ]);
        $task=Task::findorFail($id);

        $task->name=$request->name;
        $task->description=$request->description;
      
     

        $task->update();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    
        Task::destroy($id);
        return redirect()->route('home');
    }
}
