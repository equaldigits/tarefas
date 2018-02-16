<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
        
        $tasks = DB::table('tasks')->get();
        
        $incompleteTasks = DB::table('tasks')->where('completed', '=0')->get();
        
        $completeTasks = DB::table('tasks')->where('completed', '=1')->get(); 

        return view('home', compact('tasks', 'incompleteTasks', 'completeTasks'));





    }
}
