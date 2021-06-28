<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class officerValidateRequest extends FormRequest
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
            'officerid'=>'required',
            'officername'=>'required',
            'officerdescription'=>'required',
            'officerrank'=>'required',
            'armouryvehicle'=>'required',
            'indiscipline'=>'required',
            'familymembers'=>'required',
            'contact'=>'required|integer|min:0|max:10000000000|unique:officers',
            'email'=>'required|unique:officers',
            'image'=>'mimes:jpg,png,jpeg,webp|max:5048'
        ];
    }
}
