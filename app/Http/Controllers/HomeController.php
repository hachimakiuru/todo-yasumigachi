<?php

namespace App\Http\Controllers;

use App\Models\Records;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;



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

    function edit(Request $request, $id)
    {
        $record = Records::find($id);

        $record->title = $request->input('title');
        $record->reps = $request->input('reps');
        $record->kg = $request->input('kg');
        $record->set = $request->input('set');
        $record->update();

        return back();
    }
    
    public function destroy($id)
    {
        $record = Records::findOrFail($id);
        $record->delete();
    
        return back()->with('success', 'レコードが削除されました');
    }

    class HomeController extends Controller
{
    public function clearEntries()
    {
        // 昨日の日付を取得
        $yesterday = Carbon::yesterday();

        // 昨日の日付以前のエントリを削除
        YourModel::whereDate('created_at', '<', $yesterday)->delete();

        return "エントリが削除されました";
    }
}

}




