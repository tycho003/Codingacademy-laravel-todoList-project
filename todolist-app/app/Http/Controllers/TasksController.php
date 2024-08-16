<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Tasks::latest()->get();

        return view("tasks.index", [
            'tasks' => $tasks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tasks.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
          'title' => 'required|string|max:255',
          'description' => 'required|string',
          'start_date' => 'required|date',
          'end_date' => 'required|date',
          'priority' => ['required', 'in:Urgent,In progress,Completed,Not started'],
          
       ]);
        
       $create = new Tasks($validated);
       $create->user_id = Auth::id();
       $create->save();
       /* Tasks::create([
            'title' => $request->title,
            'description' => $request->description,
            'start-date' => $request->start_date,
            'end-date' => $request->end_date,
            'priority' => $request->priority,
       ]); */

       return redirect(route("tasks.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show($tasks)
    {
        // dd($tasks);
        $task = Tasks::findOrFail($tasks);
        return view("tasks.show", [
            'tasks' => $task
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tasks $tasks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tasks $tasks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tasks $tasks)
    {
        //
    }
}
