<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class FileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $files = DB::table('files')
            ->join('users', 'files.user_id', '=', 'users.id')
            ->select('files.name')
            ->where('users.id', $user_id)
            ->get();    
        // $data = File::all();
        
        
        return view('file', compact('files'));
    }

    public function upload()
    {
        $file = Input::file('user_icon_file');
        $extension = $file->getClientOriginalExtension();
        $file_name = strval(time()).str_random(5).'.'.$extension;

        $destination_path = public_path().'/user-upload/';

        if (Input::hasFile('user_icon_file')) {
            $upload_success = $file->move($destination_path, $file_name);
            $user = Auth::user();
            $file = new File();
            //On left field name in DB and on right field name in Form/view
            $file->name = $file_name;
            $file->user_id = $user->id;
            $file->save();
            
            return redirect()->back()->withSuccess('Success Upload!');
        } else {
            return redirect()->back()->with('error','Fail to Upload!');
        }
    }
}
