<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             "g-recaptcha-response"=> "required|string",
             "c_name"=> "required|string",
             "c_email"=> "required|email",
             "c_phone"=> ["required", "numeric", "regex:/^(\+)?(05|5|9665|009665)([0-9]{8})$/"],
             "c_employee_number"=> "required|min:1",
             "c_city"=> "required|min:1",
             "terms_institute"=> "required|boolean",
             "terms_course"=> "required|boolean",
        ];
    }
}
