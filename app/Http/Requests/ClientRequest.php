<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fullname' => 'required',
            'gender' => 'required|integer|between:1,2',
            'email' => 'required|email',
            'postcode' => 'required|num-dash|size:9',
            'address' => 'required',
            'building_name' => 'nullable',
            'opinion' => 'required|max:120',
            'created_at' => 'date|nullable',
            'updated_at' => 'date|nullable',
        ];
    }
}
