<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SeensDataTable;
use App\Http\Controllers\Controller;
use App\Models\Seen;
use Illuminate\Http\Request;
use PDF;
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

    public function generatepdf()
    {
        $report_name = "ALthiga Statistic";
        
        ini_set('memory_limit', '-1');
        
        $items = Seen::get();
        ini_set("pcre.backtrack_limit", "5000000");
        $pdf = PDF::loadView('admin.statistics.report-pdf',[
            'report_name'       => $report_name,
            "items"             => $items,
        ]);

        $pdf->autoScriptToLang = true;
        $pdf->baseScript = 1;
        $pdf->allow_charset_conversion = false;

        $pdf->useAdobeCJK = true;
        $pdf->autoVietnamese = true;
        $pdf->autoArabic = true;
        $pdf->autoLangToFont = true;
        $pdf->img_dpi = 96;
        $pdf->showImageErrors = true;

        return $pdf->stream('statistics-report-'.now().'.pdf');
    }
}
