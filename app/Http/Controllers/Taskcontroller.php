<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function update(Request $request):RedirectResponse
    {
        $request->user()->fill([
            'password' => Hash::make($request->newPassword)
        ])->save();
        return redirect('/profile');
    }
}

class Taskcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $tasks = Task::latest()->paginate(3);
        return view('index',['tasks'=>$tasks]);

    }    
    /**
     * Show the form for creating a new resource.
     */
    public function create():    View
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        Task::create($request->all());
        return redirect()->route('tasks.index')->with('success','Nueva tarea creada exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task):   View
    {
        return view('edit',['task'=>$task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task): RedirectResponse
    {     
        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success','Propuesta actualizada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success','Comentario eliminado exitosamente!');
    }
}
