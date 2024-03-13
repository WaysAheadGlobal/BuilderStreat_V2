<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class BuyerLoginRequest extends FormRequest
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
            'phone'  => 'required|max:14',
            'otp'    => 'required|max:4|min:4'
        ];
    }

    public function messages(){
        return [
           'phone.required' => 'Phone number is required!',
           'phone.max'      => 'Phone must not be greater than 14 characters!',
           'otp.required'   => 'OTP is required!',
           'otp.max'        => 'The OTP must not be greater than 4 digits!',
           'otp.min'        => 'The OTP must not be less than 4 digits!'
        ];
    }


}
