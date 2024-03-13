<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class SellerLoginRequest extends FormRequest
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
            'phone' => 'required|max:14',
            'otp1'  => 'required',
            'otp2'  => 'required',
            'otp3'  => 'required',
            'otp4'  => 'required'
        ];
    }

    public function messages(){
        return [
           'phone.required' => 'Phone number is required!',
           'phone.max'      => 'Phone must not be greater than 14 characters!',
           'otp1.required'   => 'OTP1 is required!',
           'otp2.required'   => 'OTP2 is required!',
           'otp3.required'   => 'OTP3 is required!',
           'otp4.required'   => 'OTP4 is required!',
        ];
    }


}
