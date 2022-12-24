<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SeensDataTable;
use App\Http\Controllers\Controller;
use App\Models\Seen;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index(SeensDataTable $dataTable)
    {
        if(auth()->user()->cannot('statistics_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return $dataTable->render('admin.statistics.index');
    }
    
    public function show(Seen $statistic)
    {
        if(auth()->user()->cannot('statistics_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.statistics.show', compact('statistic'));
    }

    public function delete()
    {
        return view('admin.statistics.delete');
    }

    public function destroy(Seen $statistic)
    {
        if(auth()->user()->cannot('statistics_delete')){
            return response()->json(['message'=> __('site.access denied')], 200);
        }
        $statistic->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }

    public function delete_post(Request $request)
    {
        $request->validate([
            "date_end"=> "required|date|before:today|date_format:Y-m-d"
        ]);

        Seen::where('created_at', "<=", $request->date_end ." 00:00:00")->delete();
        return redirect()->route('admin.statistics.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.item deleted successfully')
        ]);
    }
}
