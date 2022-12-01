<?php

use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('mail', 'admin.mail.index', [
    'title'=> "عنوان البريد الالكتروني", 
    'body'=> "هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات من قاموس يحوي على أكثر من 200 كلمة لا تينية، مضاف إليها مجموعة من الجمل النموذجية، لتكوين نص لوريم إيبسوم ذو شكل منطقي قريب إلى النص الحقيقي. وبالتالي يكون النص الناتح خالي من التكرار، أو أي كلمات أو عبارات غير لائقة أو ما شابه. وهذا ما يجعله أول مولّد نص لوريم إيبسوم حقيقي على الإنترنت."
]);

Route::get('/', function () {
    App::setLocale('ar');
    session()->put('locale', 'ar');
    return view('welcome');
});

Route::get('/language/{lang}', function($lang){
    if(in_array($lang, ['en', 'ar'])){
        App::setLocale($lang);
        session()->put('locale', $lang);
    }
    return redirect()->back();
})->name('change.lang');


Route::view('locale/{locale?}', "comming-soon")->name('set-locale');

Route::get('/wpr-registration-download', [RoutingController::class, 'WPRRegistrationDownload'])->name('WPRRegistrationDownload');
Route::get('/{id?}', [RoutingController::class, 'Routing'])->name('routeName');
