<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",

            "details"=> "required|array",
            "details.en"=> "required|string",
            "details.ar"=> "required|string",

            "accreditation_num"=> "required|numeric",
            "category_id"=> "required|numeric|exists:categories,id",
            "is_popular"=> "required|boolean",
            "main_header"=> "required|boolean",

            "title2"=> "nullable|array",
            "title2.en"=> "nullable|string",
            "title2.ar"=> "nullable|string",

            "details2"=> "nullable|array",
            "details2.en"=> "nullable|string",
            "details2.ar"=> "nullable|string",
            
            "days"=> "required|array",
            "duration"=> "required|numeric",
            "hour_per_day"=> "required|numeric",
            "languages"=> "required|string",
            
            "certification"=> "required|array",
            "certification.ar"=> "required|string",
            "certification.en"=> "required|string",

            "show_single_price"=> "required|boolean",
            "price"=> "nullable|required_if:show_single_price,1|numeric",
            "discount_price"=> "nullable|required_if:show_single_price,1|numeric",
            "price_role"=> "nullable|required_if:show_single_price,0|array",

            "show_group_price"=> "required|boolean",
            "group_price"=> "nullable|required_if:show_group_price,1|numeric",
            "discount_group_price"=> "nullable|required_if:show_group_price,1|numeric",
            "group_price_role"=> "nullable|required_if:show_group_price,0|array",

            "file"  => "nullable|file",
            "image"=> "nullable|image",
        ];
    }
}
