<?php

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Stevebauman\Location\Facades\Location;

if(!function_exists('detectURL')){
    function detectURL($string)
    {
        $url = '~(?:(https?)://([^\s<]+)|(www\.[^\s<]+?\.[^\s<]+))(?<![\.,:])~i'; 
        $string = preg_replace($url, '<a href="$0" target="_blank" title="$0">$0</a>', $string);

        $pattern = '/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i';
        return preg_replace($pattern, '<a href="mailto:$0" target="_blank" title="$0">$0</a>', $string);
    }
}

if(!function_exists("addIcon")){
    function addIcon($content, $tag='<i class="fa fa-check-square-o"></i>')
    {
        $dom = new \DomDocument();
        libxml_use_internal_errors(true);
        $dom->loadHtml('<?xml encoding="UTF-8">'.$content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $listItem = $dom->getElementsByTagName('li');
        $element = $dom->createElement("i");
        $element->setAttribute('class', "fa fa-check-square-o");
        if(count($listItem)) {
            foreach($listItem as $index => $item){
                dd($item->childs());
                $item->insertBefore($element);
            }
            return \Illuminate\Support\Str::replaceFirst('<?xml encoding="UTF-8">', '', $dom->saveHTML());
        }
        return $content;
    }
}



if (!function_exists("uploadImage")) {

    function uploadImage(UploadedFile $file, $oldFileName = null, $prefix="", $resize = false, $width = 200, $height = 200, $folder = 'images')
    {
        if (!Storage::exists("$folder")) {
            Storage::makeDirectory("$folder");
        }
        if ($oldFileName && $oldFileName != "default.png") {
            try {
                Storage::delete(["$folder/$oldFileName", "$oldFileName"]);
            } catch (\Throwable $th) {
            }
        }
        $extension = $file->getClientOriginalExtension();
        $name = $prefix . '' . Str::random() . '.' . ($extension ? $extension : 'png') ;
        if ($resize) {
            $directory = "$folder/$name";
            if (!Storage::exists("$folder")) {
                Storage::makeDirectory("$folder");
            }
            $image = Image::make($file)->resize($width, $height);
            $image->save(storage_path("app/public/$directory"));
        } else {
            if(! (Storage::putFileAs("$folder", $file, $name))){
                throw new Exception("Cant save this file", 400);
            }
        }
        return "$folder/$name";
    }
}


if (!function_exists("uploadFile")) {

    function uploadFile(UploadedFile $file, $oldFileName = null, $prefix="", $folder = 'files')
    {
        if (!Storage::exists("$folder")) {
            Storage::makeDirectory("$folder");
        }
        if ($oldFileName && $oldFileName != "default.png") {
            try {
                Storage::delete(["$folder/$oldFileName", "$oldFileName"]);
            } catch (\Throwable $th) {}
        }
        $extension = $file->getClientOriginalExtension();
        $name = $prefix . '.' . Str::random() . '.' . ($extension ? $extension : 'png') ;
        if(! (Storage::putFileAs("$folder", $file, $name))){
            throw new Exception("Cant save this file", 400);
        }
        return "$folder/$name";
    }
}


if(!function_exists("get_country_from_ip")){
    function get_country_from_ip($ip)
    {
        $countries = ["SA" =>'السعودية',"ET" =>'إثيوبيا',"AZ" =>'أذربيجان',"AM" =>'أرمينيا',"AW" =>'أروبا',"ER" =>'إريتريا',"ES" =>'أسبانيا',"AU" =>'أستراليا',"EE" =>'إستونيا',"IL" =>'فلسطين',"AF" =>'أفغانستان',"IO" =>'إقليم المحيط الهندي البريطاني',"EC" =>'إكوادور',"AR" =>'الأرجنتين',"JO" =>'الأردن',"AE" =>'الإمارات',"AL" =>'ألبانيا',"BR" =>'البرازيل',"PT" =>'البرتغال',"BA" =>'البوسنة والهرسك',"GA" =>'الجابون',"DZ" =>'الجزائر',"DK" =>'الدانمارك',"CV" =>'الرأس الأخضر',"PS" =>'فلسطين',"SV" =>'السلفادور',"SN" =>'السنغال',"SD" =>'السودان',"SE" =>'السويد',"SO" =>'الصومال',"CN" =>'الصين',"IQ" =>'العراق',"PH" =>'الفلبين',"CM" =>'الكاميرون',"CG" =>'الكونغو',"CD" =>'الكونغو (جمهورية الكونغو الديمقراطية)',"KW" =>'الكويت',"DE" =>'ألمانيا',"HU" =>'المجر',"MA" =>'المغرب',"MX" =>'المكسيك',"UK" =>'المملكة المتحدة',"TF" =>'المناطق الفرنسية الجنوبية ومناطق انتراكتيكا',"NO" =>'النرويج',"AT" =>'النمسا',"NE" =>'النيجر',"IN" =>'الهند',"US" =>'الولايات المتحدة',"JP" =>'اليابان',"YE" =>'اليمن',"GR" =>'اليونان',"AQ" =>'أنتاركتيكا',"AG" =>'أنتيغوا وبربودا',"AD" =>'أندورا',"ID" =>'إندونيسيا',"AO" =>'أنغولا',"AI" =>'أنغويلا',"UY" =>'أوروجواي',"UZ" =>'أوزبكستان',"UG" =>'أوغندا',"UA" =>'أوكرانيا',"IR" =>'إيران',"IE" =>'أيرلندا',"IS" =>'أيسلندا',"IT" =>'إيطاليا',"PG" =>'بابوا-غينيا الجديدة',"PY" =>'باراجواي',"BB" =>'باربادوس',"PK" =>'باكستان',"PW" =>'بالاو',"BM" =>'برمودا',"BN" =>'بروناي',"BE" =>'بلجيكا',"BG" =>'بلغاريا',"BD" =>'بنجلاديش',"PA" =>'بنما',"BJ" =>'بنين',"BT" =>'بوتان',"BW" =>'بوتسوانا',"PR" =>'بورتو ريكو',"BF" =>'بوركينا فاسو',"BI" =>'بوروندي',"PL" =>'بولندا',"BO" =>'بوليفيا',"PF" =>'بولينزيا الفرنسية',"PE" =>'بيرو',"BY" =>'بيلاروس',"BZ" =>'بيليز',"TH" =>'تايلاند',"TW" =>'تايوان',"TM" =>'تركمانستان',"TR" =>'تركيا',"TT" =>'ترينيداد وتوباجو',"TD" =>'تشاد',"CL" =>'تشيلي',"TZ" =>'تنزانيا',"TG" =>'توجو',"TV" =>'توفالو',"TK" =>'توكيلاو',"TO" =>'تونجا',"TN" =>'تونس',"TP" =>'تيمور الشرقية (تيمور الشرقية)',"JM" =>'جامايكا',"GM" =>'جامبيا',"GI" =>'جبل طارق',"GL" =>'جرينلاند',"AN" =>'جزر الأنتيل الهولندية',"PN" =>'جزر البتكارين',"BS" =>'جزر البهاما',"VG" =>'جزر العذراء البريطانية',"VI" =>'جزر العذراء، الولايات المتحدة',"KM" =>'جزر القمر',"CC" =>'جزر الكوكوس (كيلين)',"MV" =>'جزر المالديف',"TC" =>'جزر تركس وكايكوس',"AS" =>'جزر ساموا الأمريكية',"SB" =>'جزر سولومون',"FO" =>'جزر فايرو',"UM" =>'جزر فرعية تابعة للولايات المتحدة',"FK" =>'جزر فوكلاند (أيزلاس مالفيناس)',"FJ" =>'جزر فيجي',"KY" =>'جزر كايمان',"CK" =>'جزر كوك',"MH" =>'جزر مارشال',"MP" =>'جزر ماريانا الشمالية',"CX" =>'جزيرة الكريسماس',"BV" =>'جزيرة بوفيه',"IM" =>'جزيرة مان',"NF" =>'جزيرة نورفوك',"HM" =>'جزيرة هيرد وجزر ماكدونالد',"CF" =>'جمهورية أفريقيا الوسطى',"CZ" =>'جمهورية التشيك',"DO" =>'جمهورية الدومينيكان',"ZA" =>'جنوب أفريقيا',"GT" =>'جواتيمالا',"GP" =>'جواديلوب',"GU" =>'جوام',"GE" =>'جورجيا',"GS" =>'جورجيا الجنوبية وجزر ساندويتش الجنوبية',"GY" =>'جيانا',"GF" =>'جيانا الفرنسية',"DJ" =>'جيبوتي',"JE" =>'جيرسي',"GG" =>'جيرنزي',"VA" =>'دولة الفاتيكان',"DM" =>'دومينيكا',"RW" =>'رواندا',"RU" =>'روسيا',"RO" =>'رومانيا',"RE" =>'ريونيون',"ZM" =>'زامبيا',"ZW" =>'زيمبابوي',"WS" =>'ساموا',"SM" =>'سان مارينو',"PM" =>'سانت بيير وميكولون',"VC" =>'سانت فينسنت وجرينادينز',"KN" =>'سانت كيتس ونيفيس',"LC" =>'سانت لوشيا',"SH" =>'سانت هيلينا',"ST" =>'ساوتوماي وبرينسيبا',"SJ" =>'سفالبارد وجان ماين',"SK" =>'سلوفاكيا',"SI" =>'سلوفينيا',"SG" =>'سنغافورة',"SZ" =>'سوازيلاند',"SY" =>'سوريا',"SR" =>'سورينام',"CH" =>'سويسرا',"SL" =>'سيراليون',"LK" =>'سيريلانكا',"SC" =>'سيشل',"RS" =>'صربيا',"TJ" =>'طاجيكستان',"OM" =>'عمان',"GH" =>'غانا',"GD" =>'غرينادا',"GN" =>'غينيا',"GQ" =>'غينيا الاستوائية',"GW" =>'غينيا بيساو',"VU" =>'فانواتو',"FR" =>'فرنسا',"VE" =>'فنزويلا',"FI" =>'فنلندا',"VN" =>'فيتنام',"CY" =>'قبرص',"QA" =>'قطر',"KG" =>'قيرقيزستان',"KZ" =>'كازاخستان',"NC" =>'كاليدونيا الجديدة',"KH" =>'كامبوديا',"HR" =>'كرواتيا',"CA" =>'كندا',"CU" =>'كوبا',"CI" =>'كوت ديفوار (ساحل العاج)',"KR" =>'كوريا',"KP" =>'كوريا الشمالية',"CR" =>'كوستاريكا',"CO" =>'كولومبيا',"KI" =>'كيريباتي',"KE" =>'كينيا',"LV" =>'لاتفيا',"LA" =>'لاوس',"LB" =>'لبنان',"LI" =>'لختنشتاين',"LU" =>'لوكسمبورج',"LY" =>'ليبيا',"LR" =>'ليبيريا',"LT" =>'ليتوانيا',"LS" =>'ليسوتو',"MQ" =>'مارتينيك',"MO" =>'ماكاو',"FM" =>'ماكرونيزيا',"MW" =>'مالاوي',"MT" =>'مالطا',"ML" =>'مالي',"MY" =>'ماليزيا',"YT" =>'مايوت',"MG" =>'مدغشقر',"EG" =>'مصر',"MK" =>'مقدونيا، جمهورية يوغوسلافيا السابقة',"BH" =>'البحرين',"MN" =>'منغوليا',"MR" =>'موريتانيا',"MU" =>'موريشيوس',"MZ" =>'موزمبيق',"MD" =>'مولدوفا',"MC" =>'موناكو',"MS" =>'مونتسيرات',"ME" =>'مونتينيغرو',"MM" =>'ميانمار',"NA" =>'ناميبيا',"NR" =>'ناورو',"NP" =>'نيبال',"NG" =>'نيجيريا',"NI" =>'نيكاراجوا',"NU" =>'نيوا',"NZ" =>'نيوزيلندا',"HT" =>'هايتي',"HN" =>'هندوراس',"NL" =>'هولندا',"HK" =>'هونغ كونغ SAR',"WF" =>'واليس وفوتونا',"GB" =>'المملكة المتحدة' ];
        try{ 
            $location = Location::get($ip);
            $country=$countries[$location->countryCode]; 
            return [
                'country'=>$country,
                'country_code'=>$location->countryCode
            ]; 
        }catch(\Exception $e){ }           
        return [
            'country'=>"غير محدد",
            'country_code'=>"404"
        ];
    }
}

if (!function_exists('active')) {
    function active($route, $class = "active", $key = null, $params = null)
    {
        if ($key && $params) {
            return (request()->routeIs("$route") ||  request()->routeIs("$route.*")) && (request()->route($key) == $params) ? $class : '';
        } else {
            return (request()->routeIs("$route") ||  request()->routeIs("$route.*")) ? $class : '';
        }
    }
}


if (!function_exists('_splite_by_chuncks')) {
    function _splite_by_chuncks($objects, $chuncks = 2, $index = 0)
    {
        if(!$objects) return [];
        $len = $objects->count();
        if($chuncks < 2) return $objects;
        if($len <= $chuncks) return $objects;

        $chunk = round($len / $chuncks, 0);
        $chunks = $objects->chunk($chunk);

        return $chunks[$index];

    }
}
if (!function_exists('_splite_by_items')) {
    function _splite_by_items($objects, $chuncks = 8, $index = 0)
    {
        if(!$objects) return [];
        $len = $objects->count();
        if($chuncks < 1) return $objects;
        if($len <= $chuncks) return $objects;
        $chunks = $objects->chunk($chuncks);

        return $chunks[$index];

    }
}

if (!function_exists('_random_chunks')) {
    function _random_chunks($objects, $chuncks = 8)
    {
        if(!$objects) return [];
        $len = $objects->count();
        if($chuncks < 1) return $objects;
        if($len <= $chuncks) return $objects;
        $items = $objects->shuffle();
        $chunks = $items->chunk($chuncks);
        return $chunks[0];

    }
}

?>