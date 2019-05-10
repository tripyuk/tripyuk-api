<?php

namespace App\Http\Requests;

use App\Helpers\Helpers;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class UserAdvertiseRequest extends FormRequest
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
            'title' => 'required|string',
            'start_date' => 'required|string',
            'end_date' => 'required|string',
            'price' => 'required|string',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $validate = new Helpers();
        $validate->failedValidation($validator);
    }
}
