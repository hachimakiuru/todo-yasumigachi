<?php

namespace App\Http\Controllers;

use App\Models\Records;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $records = Records::all();
        return view('home', compact('records'));
    }
    
    public function store(Request $request)
    {
        $record = new Records;
        $record->title = $request->title;
        $record->kg = $request->kg;
        $record->reps = $request->reps;
        $record->set = $request->set;

        $record->save();
        return redirect()->route('home');

    }
}


