<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Seen;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DashboardStatistics extends Component
{

    public function __constract()
    {

    }

    public function render()
    {
        $flat_colors = collect([
            '#1abc9c',
            '#3498db',
            '#9b59b6',
            '#34495e',
            '#e74c3c',
            '#f1c40f',
            '#e67e22',
            '#7f8c8d',
            '#ffda79',
            '#2c2c54',
            '#218c74',
        ]);

        $data=[
            'traffics_labels'=>$this->get_traffic_label(),
            'traffics_values'=>$this->get_traffic_value(),

            "top_devices"=> $this->top_devices(),
            "top_browsers"=> $this->top_browsers(),
            "top_os" => $this->top_os(),
            "top_pages" => $this->get_to_pages(),

            "top_domains"=> $this->top_domains(),
            "top_courses"=> $this->top_courses(),
        ];

        return view('livewire.dashboard-statistics', ["data"=>$data, 'flat_colors'=> $flat_colors]);
    }

    public function get_traffic_label()
    {
        return [
            Carbon::now()->subDays(4)->format("Y-m-d"),
            Carbon::now()->subDays(3)->format("Y-m-d"),
            Carbon::now()->subDays(2)->format("Y-m-d"),
            Carbon::now()->subDays(1)->format("Y-m-d"),
            Carbon::now()->format("Y-m-d"),
        ];
    }

    public function get_traffic_value()
    {
      
        return [
            Seen::whereBetween('created_at', [Carbon::now()->subDays(4)->format("Y-m-d")." 00:00:00", Carbon::now()->subDays(4)->format("Y-m-d"). " 23:59:59"])->count(),
            Seen::whereBetween('created_at', [Carbon::now()->subDays(3)->format("Y-m-d")." 00:00:00", Carbon::now()->subDays(3)->format("Y-m-d"). " 23:59:59"])->count(),
            Seen::whereBetween('created_at', [Carbon::now()->subDays(2)->format("Y-m-d")." 00:00:00", Carbon::now()->subDays(2)->format("Y-m-d"). " 23:59:59"])->count(),
            Seen::whereBetween('created_at', [Carbon::now()->subDays(1)->format("Y-m-d")." 00:00:00", Carbon::now()->subDays(1)->format("Y-m-d"). " 23:59:59"])->count(),
            Seen::whereBetween('created_at', [Carbon::now()->format("Y-m-d")." 00:00:00", Carbon::now()->format("Y-m-d"). " 23:59:59"])->count(),
        ];
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
                //->where('domain', "<>", $domain)
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
