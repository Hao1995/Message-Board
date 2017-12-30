<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

use App\Http\Requests;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $data = Task::table('tasks')->get();
        $data = Task::all();

        // return view('index', ['data' => $data]);
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
        Task::create($request->all());
        return redirect()->back()->with('message', 'Success message!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $task = Task::findOrFail($id);
        $task->update($request->all());

        return redirect()->back()->with('message', 'Updated Successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // $task = Task::findOrFail($id);
        // $task->delete();
        // // $task = task::whereId($id)->delete();
        // return redirect()->back()->with('message', 'Deleted Successful!');
        
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->back()->with('message', 'Deleted Successful!');
    }
}
