<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\CourseTerm;
use Illuminate\Support\Str;
use App\Models\InstituteTerm;
use App\Events\UploadImageEvent;
use App\Mail\RegisterClientEmail;
use Illuminate\Support\Facades\Log;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RegistrationSingleRequest;
use App\Http\Requests\RegistrationCompanyRequest;

class AramcoRegistrationController extends Controller
{
    public function index(){
        $cities = [];
        $employees = [];
        $response = Http::get(env('CRM_BASE_URL')."/fetch-selection");
        if($response->successful()){
            $data = $response->json();
            $cities = $data['cities'];
            $employees = $data['employees'];
        }

        return view('aramco.index', compact('employees', 'cities'));
    }

    public function terms(){
        $items = InstituteTerm::get();
        return view('aramco.terms', ['items'=> $items])->render();
    }

    public function privacy(){
        $items = CourseTerm::get();
        return view('aramco.terms', ['items'=> $items])->render();
    }


    public function single(RegistrationSingleRequest $request){
        $validated = $request->validated();
        try{
            // $response = Http::get("https://www.google.com/recaptcha/api/siteverify", [
            //     "secret"=> env("RECAPTCHA2_SECRET", "6Lf8kUwqAAAAAJNL_xkc9wIR7EVM5G-Ij47bIuG8"),
            //     "response"=> $request->get('g-recaptcha-response'),
            // ]);
            // if(!$response['success']){
            //     $message = $response['error-codes'][0];
            //     Toastr::error($message , __('alert'));
            //     return redirect()->route('aramco.register')->withInput($validated);
            // }  
            $data = [
                "fname" => $validated['fname'],
                "lname" => $validated['lname'],
                "email"=> $validated['email'],
                "phone"=> $validated['phone'],
                "national_id" => $validated['national_id'],
                "group_number" => $validated['group_number'],
                "terms_institute"=> $validated['terms_institute'] ?? false,
                "terms_course"=> $validated['terms_course'] ?? false,
            ];
            if($request->hasFile('image')){    
                $image = uploadImage($request->file('image'), null, 'registration_', false, null, null, 'registrations');
                $path = storage_path("app/public/$image");
            }

            $response = Http::post(env('CRM_BASE_URL')."/store-single", $data);

            if($response->successful()){
                Toastr::success(__('Feel free to let me know if you need any adjustments!') , __('alert'));
                try {
                    Mail::to($validated['email'])->send(new RegisterClientEmail(
                        $data['fname']." ".$data['lname'] , 
                        $data['email'], 
                        $data['phone'], 
                        $validated['national_id'],
                        $validated['group_number'],
                    ));
                } catch (\Throwable $th) {
                    Toastr::warning($th->getMessage(), __('alert'));
                }
                if(isset($path) && isset($image)){
                    $imageName = Str::after($image, 'registrations/');
                    $itemId = $response->json("item")['id'];
                    Log::info("[****] Individual Item ID: $itemId", [$response->json()]);
                    event(new UploadImageEvent($path, $imageName, $itemId));
                }
                return redirect()->route('aramco.register');
            }else{
                Toastr::warning("Sometings want wrong, Please try again later", __('alert'));
                return redirect()->route('aramco.register');
            }

        }catch(Throwable $th){
            Toastr::warning($th->getMessage(), __('alert'));
            return redirect()->route('aramco.register');
        }
    }

    public function company(RegistrationCompanyRequest $request){
        $validated = $request->validated();
        try{
            $response = Http::get("https://www.google.com/recaptcha/api/siteverify", [
                "secret"=> env("RECAPTCHA2_SECRET", "6Lf8kUwqAAAAAJNL_xkc9wIR7EVM5G-Ij47bIuG8"),
                "response"=> $request->get('g-recaptcha-response'),
            ]);
            if(!$response['success']){
                $message = $response['error-codes'][0];
                Toastr::error($message , __('alert'));
                return redirect()->route('aramco.register', ['company'=>true])->withInput($validated);
            }  
            $data = [
                "name" => $validated['c_name'],
                "email"=> $validated['c_email'],
                "phone"=> $validated['c_phone'],
                "employee_range_id" => $validated['c_employee_number'],
                "city_id" => $validated['c_city'],
                "terms_institute"=> $validated['terms_institute'] ?? false,
                "terms_course"=> $validated['terms_course'] ?? false,
            ];
            $response = Http::post(env('CRM_BASE_URL')."/store-company", $data);
            if($response->successful()){
                Toastr::success(__('Feel free to let me know if you need any adjustments!') , __('alert'));
                try {
                    Mail::to($data['email'])->send(new RegisterClientEmail(
                        $data['name'], 
                        $data['email'], 
                        $data['phone']
                    ));
                } catch (\Throwable $th) {
                    Toastr::warning($th->getMessage(), __('alert'));
                }
                return redirect()->route('aramco.register', ['company'=>true]);
            }
            
        }catch(Throwable $th){
            Toastr::warning($th->getMessage(), __('alert'));
            return redirect()->route('aramco.register', ['company'=>true]);
        }
    }
}
