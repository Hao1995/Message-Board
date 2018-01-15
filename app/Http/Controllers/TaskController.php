<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $user = Auth::user();
        // $data = Task::all();
        if ( empty($user) ) {
            $data = DB::table('tasks')
            ->select('id','content','level')
            ->where('level', '=', 0)
            ->get();  
        }else if ( $user->id == 1) { 
            $data = DB::table('tasks')->get(); 
        }else if ( $user->id != 1) {
            $data = DB::table('tasks')
            ->select('id','content','level')
            ->whereIn('level', [0,1])
            ->get();  
        }

        // $user_id = Auth::user()->id;
        

        // return view('index', ['data' => $data]);
        return view('index', compact('data','user'));
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
        return redirect()->back()->with('success', 'Post Successful!');
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

        return redirect()->back()->with('info', 'Updated Successful!');
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
        return redirect()->back()->with('error', 'Deleted Successful!');
    }
}
