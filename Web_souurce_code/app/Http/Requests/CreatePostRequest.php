<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class CreatePostRequest extends FormRequest
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
            'product_name'          => 'required',
            'brand_name'            => 'required',
            'modal_number'          => 'required',
            'serial_number'         => 'required',
            'source'                => 'required',
            'condition_of_material' => 'required',
            'discount'              => 'required',
            'offer'                 => 'required',
            'pickup_faculty'        => 'required',
            'hours_of_operation'    => 'required',
            'availability'          => 'required',
            'quantity'              => 'required',
            'unit'                  => 'required',
            // 'price'                 => 'required',
            // 'transport'             => 'required',
            // 'price_availability'    => 'required',
            // 'file'                  => 'required'
            // 'file'                  => 'required|image|mimes:jpeg,pdf'
        ];
    }


}
