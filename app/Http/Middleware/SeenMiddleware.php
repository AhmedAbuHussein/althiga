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
        $ipAddress = 'NA';
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $ipAddress = $_SERVER["HTTP_CF_CONNECTING_IP"];
        } else {
            $ipAddress = $_SERVER['REMOTE_ADDR'];
        }
        $ip = $request->ip();
        if ($ipAddress != 'NA') {
            $ip = $ipAddress;
        }
        $prev_domain = "";
        try {
            $prev_url = url()->previous();
            $parsex = parse_url(url()->previous());
            $prev_domain = $parsex['host'];
        } catch (\Exception $e) {
        }
        $slug = request()->route("slug");
        $id = null;
        if($slug){
            $id = optional(Course::whereSlug($slug)->first())->id;
        }

        $country = get_country_from_ip($ip);
        $data = [
            "ip" => $ip,
            "domain" => $prev_domain,
            "prev_link" => $prev_url,
            "current_link" => $request->url(),
            "agent_name" => Browser::userAgent(),
            "browser" => Browser::browserFamily(),
            "device_family" => Browser::deviceFamily(),
            "device_name" => Browser::deviceType(),
            "os" => Browser::platformName(),
            "os_type" => Browser::platformFamily(),
            'country_code' => $country['country_code'],
            'country_name' => $country['country'],
            "seenable_type"=> $id ? Course::class : NULL,
            "seenable_id"   => $id,
        ];

        Seen::create($data);
        return $next($request);
    }
}
