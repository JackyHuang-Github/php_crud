<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        $inputs = [
            'account' => 'required | string | max:10 | unique:users',
            'password' => 'required | string | max:10',
            'name' => 'required | string | max:10',
            'sex' => 'required | string | max:2',
            'year' => 'required | integer',
            'month' => 'required | integer',
            'day' => 'required | integer',
            'telephone' => 'required | string | max:20',
            'cellphone' => 'required | string | max:20',
            'address' => 'required | string | max:50',
            'email' => 'required | string | max:50',
            'url' => 'required | string | max:50',
            'comment' => 'required | string'
        ];

        echo "run in UserRequest";
        // dd($inputs);

        return $inputs;
    }
}
