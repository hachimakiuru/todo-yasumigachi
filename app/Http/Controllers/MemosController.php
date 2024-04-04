<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemosController extends Controller
{
    function update(Request $request, $day)
    {
        $memo = Memo::where('days', $day)->first();
        if ($memo) {
            $memo->content = $request->input('memo');
            $memo->save();
        } else {
            $memo = new Memo();
            $memo->day_of_week = $day;
            $memo->content = $request->input('memo');
            $memo->save();
        }
        return redirect()->back()->with('success', 'メモが更新されました');
    }

    public function store(Request $request)
    {
        $memo = new Memo;
        $memo->day_id = $request->day_id;
        $memo->content= $request->content;

        $memo->save();
        return redirect()->back()->with('success', 'メモが更新されました');
    }
    
}
