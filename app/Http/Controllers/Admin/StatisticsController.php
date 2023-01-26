<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SeensDataTable;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Seen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $report_name = "إحصائيات الموقع";
        
        ini_set('memory_limit', '-1');
        
        $items = Seen::where(['seenable_type'=> Course::class])->get();

        $top_devices = $this->top_devices();
        $top_browsers = $this->top_browsers();
        $top_os = $this->top_os();
        $top_pages = $this->get_to_pages();
        $top_domains = $this->top_domains();
        $top_courses = $this->top_courses();

        ini_set("pcre.backtrack_limit", "5000000");
        $pdf = PDF::loadView('admin.statistics.report-pdf',[
            'report_name'       => $report_name,
            "items"             => $items,
            "pages"             =>$top_pages,
            "devices"             =>$top_devices,
            "browsers"             =>$top_browsers,
            "domains"             =>$top_domains,
            "courses"             =>$top_courses,
            "top_os"             =>$top_os,
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

    public function get_to_pages()
    {
        $seens = Seen::whereNull("seenable_id")->groupBy(['current_link'])
                    ->select(DB::raw("current_link as url, COUNT(current_link) as count"))
                    ->orderBy('count', 'DESC')
                    ->limit(10)
                    ->get();
        return $seens;
    }

   

    public function top_os()
    {
        return Seen::groupBy('os_type')
                    ->orderBy(DB::raw("count('os_type')"),'DESC')
                    ->select("os_type")
                    ->addSelect(DB::raw("count('os_type') as count"))
                    ->limit(10)
                    ->get();
    }

    public function top_browsers()
    {
        return Seen::groupBy('browser')
        ->orderBy(DB::raw("count('browser')"),'DESC')
        ->select("browser")
        ->addSelect(DB::raw("count('browser') as count"))
        ->limit(10)
        ->get();
    }

    public function top_devices()
    {
        return Seen::groupBy('device_name')
        ->orderBy(DB::raw("count('device_name')"),'DESC')
        ->select("device_name")
        ->addSelect(DB::raw("count('device_name') as count"))
        ->limit(10)
        ->get();
    }

    public function top_domains()
    {
        $domain = str_replace(['http://', 'https://', 'www.', ":8000"], '', env('APP_URL'));
        return Seen::whereNotNull('domain')
                ->select([DB::raw("COUNT(domain) AS domain_count , SUBSTRING_INDEX(REPLACE(REPLACE(REPLACE(domain,'http://',''),'https://',''),'www.',''),'/',1) AS main_domain")])
                ->groupBy('main_domain')
                ->orderBy('domain_count','DESC')
                ->limit(7)->get();

    }

    public function top_courses()
    {
        return Course::withCount('seens')->orderBy('seens_count', 'desc')->limit(10)->get();
    }
    
}
