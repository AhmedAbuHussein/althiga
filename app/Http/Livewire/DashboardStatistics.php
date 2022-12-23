<?php

namespace App\Http\Livewire;

use App\Models\Seen;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DashboardStatistics extends Component
{


    public function render()
    {
        $data=[
            'traffics_labels'=>$this->get_traffic_label(),
            'traffics_values'=>$this->get_traffic_value(),

            "top_pages" => $this->get_to_pages(),
        ];
        
        return view('livewire.dashboard-statistics', ["data"=>$data]);
    }


    public function get_to_pages()
    {
        $seens = Seen::groupBy(['seenable_id', 'id'])
                    ->select(DB::raw("id, seenable_id, SUM(visit_count) as visits"))
                    ->with('seenable')
                    ->get();
        return $seens;
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
            10,
            15,
            25,
            20,
            5,
        ];
    }
}
