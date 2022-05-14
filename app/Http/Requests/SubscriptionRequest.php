<?php

namespace App\Http\Requests;

use App\Rules\MaxWordCount;
use Illuminate\Foundation\Http\FormRequest;

class SubscriptionRequest extends FormRequest
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
            'name' => ['required', 'min:1', 'max:255', new MaxWordCount(4)],
            'email' => 'required|email'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Lūdzu norādi savu vārdu',
            'name.min' => 'Vārdam jābūt vismaz vienu raksta zīmi garam',
            'name.max' => 'Vārds nedrīkst pārsniegt 255 rakstu zīmes',
            'email.required' => 'Lūdzu norādi savu e-pasta adresi',
        ];
    }
}
