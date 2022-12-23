<?php

namespace App\Http\Middleware;

use App\Models\Course;
use App\Models\Seen;
use Closure;
use Illuminate\Http\Request;
use hisorange\BrowserDetect\Parser as Browser;


class SeenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        $id = optional(Course::whereSlug(request()->route("slug"))->first())->id;
        if($id){
            $ipAddress = 'NA';
            if(isset($_SERVER["HTTP_CF_CONNECTING_IP"])){ 
                $ipAddress = $_SERVER["HTTP_CF_CONNECTING_IP"];
            } else{ 
                $ipAddress = $_SERVER['REMOTE_ADDR'];
            } 
            $ip = $request->ip();
            if($ipAddress!='NA'){
                $ip=$ipAddress;
            }
            $seen = Seen::where(['ip'=> $ip, 'seenable_type'=> Course::class, 'seenable_id'=> $id])->first();
            $prev_domain="";

            try{
                $prev_url= url()->previous();
                $parsex= parse_url(url()->previous());
                $prev_domain=$parsex['host'];  
            }catch(\Exception $e){ }   
            $country= get_country_from_ip($ip);
            $data = [
                "ip"=> $ip,
                "seenable_type"=> Course::class, 
                'seenable_id'=> $id,
                "visit_count"=> 1,
                "domain"=> $prev_domain,
                "prev_link"=>$prev_url,
                "agent_name"=> Browser::userAgent(),
                "browser"=> Browser::browserName(),
                "device"=> Browser::deviceFamily(),
                "os"=> Browser::platformName(),
                'country_code'=>$country['country_code'],
                'country_name'=>$country['country'],
            ];
            if(!$seen){
                Seen::create($data);
            }else{
                $seen->increment('visit_count');
            }
           
        }
        
        return $next($request);
    }
}
